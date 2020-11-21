<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cycle;

class CycleController extends Controller
{
    public function index()
    {
        $ciclos['ciclos']=cycle::where('deleted', 0)->paginate(7);
    
        

        return view('ciclos.index', $ciclos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciclos.create');
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
            'name' => 'required|max:100',
            'grade' => 'required|max:255',
            'year' => 'required|max:255',
        ]);

    Cycle::insert(['name'=>request()->name, 'grade'=>request()->grade , 'year'=>request()->year]);

    return redirect('ciclos');
       
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
        $ciclo = Cycle::findOrFail($id);

        return view('ciclos.edit', compact('ciclo'));
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
        $datosCiclo = request()->except(['_token', '_method']);
        Cycle::where('id','=',$id)->update($datosCiclo);

        return redirect('ciclos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciclo = Cycle::where('id', $id);
        $ciclo -> increment('deleted');
        

        return redirect('ciclos');
    }
}
