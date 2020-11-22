<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ce;
use App\Ra;
use App\Module;


class CeController extends Controller
{
    public function index()
    {
        $ces['ces']=Ce::where('deleted', 0)->paginate(12);

        $ras['ras']=Ra::where('deleted', 0);

        $ciclo= auth()->user()->cycle_id;
        $modulo['modulo']= Module::where('cycle_id',$ciclo);


        return view('ces.index', compact('ces', 'ras', 'modulo'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ceData=request()->except('_token');
        Ce::insert(['word'=>request()->word, 'description'=>request()->description, 'ra_id'=>request()->ra_id, 'task_id'=>request()->task_id, 'mark'=>request()->mark]);
        return response()-> json($ceData);
        return redirect('ces');
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
        $ce = Ce::findOrFail($id);

        return view('ces.edit', compact('ce'));
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
        $datosCe = request()->except(['_token', '_method']);
        Ce::where('id','=',$id)->update($datosCe);
        return redirect('ces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ce = Ce::where('id', $id);
        $ce -> increment('deleted');

        return redirect('ces');
    }
}
