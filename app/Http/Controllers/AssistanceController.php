<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assistance;

class AssistanceController extends Controller
{
    public function index()
    {
        $asistencias['asistencias']=Assistance::where('deleted', 0)->with('alumno')->paginate(7);
        $asistenciasAlumno['asistenciasAlumno']=Assistance::where('deleted', 0)->where('student_id', auth()->id())->with('alumno')->paginate(5);
        

        return view('asistencia.index', $asistencias,$asistenciasAlumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asistencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Assistance::insert(['date'=>request()->date1, 'assistance'=>request()->assistance1 , 'student_id'=> auth()->id()]);
        Assistance::insert(['date'=>request()->date2, 'assistance'=>request()->assistance2 , 'student_id'=> auth()->id()]);
        Assistance::insert(['date'=>request()->date3, 'assistance'=>request()->assistance3 , 'student_id'=> auth()->id()]);

        return redirect('asistencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Assistance::findOrFail($id);

        return view('asistencia.edit', compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAsistencia = request()->except(['_token', '_method']);
        Assistance::where('id','=',$id)->update($datosAsistencia);

        return redirect('asistencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia = Assistance::where('id', $id);
        $asistencia -> increment('deleted');
        // Worksheet::destroy($id);

        return redirect('asistencia');
    }
}
