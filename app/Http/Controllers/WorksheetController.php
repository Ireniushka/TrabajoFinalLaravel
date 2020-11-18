<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Worksheet;

class WorksheetController extends Controller
{
    public function index()
    {
        $fichas['fichas']=worksheet::where('deleted', 0)->with('alumno')->paginate(7);
        $fichasAlumno['fichasAlumno']=Worksheet::where('deleted', 0)->where('student_id', auth()->id())->with('alumno')->paginate(5);
        

        return view('fichas.index', $fichasAlumno,$fichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
                'date' => 'required|max:100',
                'description' => 'required|max:500',
            ]);

        Worksheet::insert(['date'=>request()->date, 'description'=>request()->description , 'student_id'=> auth()->id()]);

        return redirect('fichas');
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
        $ficha = Worksheet::findOrFail($id);

        return view('fichas.edit', compact('ficha'));
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
        $datosFicha = request()->except(['_token', '_method']);
        Worksheet::where('id','=',$id)->update($datosFicha);

        return redirect('fichas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $ficha = Worksheet::where('id', $id);
        $ficha -> increment('deleted');
        // Worksheet::destroy($id);

        return redirect('fichas');
    }
}
