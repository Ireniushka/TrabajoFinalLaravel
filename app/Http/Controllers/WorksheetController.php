<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worksheet;

class WorksheetController extends Controller
{
    public function index()
    {
        // $fichas=worksheet::where('deleted', 0)->paginate(7);
        $fichasAlumno['fichasAlumno']=Worksheet::where('deleted', 0)->where('student_id', auth()->id())->paginate(7);
        
        return view('fichas.index', $fichasAlumno);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Worksheet::destroy($id);

        return redirect('fichas');
    }
}
