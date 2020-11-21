<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Ra;

class CeController extends Controller
{
    public function index()
    {

        // $userCiclo['userCiclo']=User::where('cycle_id',)
        
        $Tutemodules['Tutemodules']=Module::where('deleted', 0)->where('cycle_id', auth()->user()->cycle_id);
        $Ras['Ras']=Ra::where('module_id',$Tutemodules);
        dd($Tutemodules);
        dd($Ras);
        return view('ces.index',$Ras,$Tutemodules);
        
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
        $cicloId = auth()->user()->cycle_id;
        $moduleData=request()->except('_token');
        Module::insert(['name'=>request()->name, 'cycle_id'=>$cicloId]);
        return response()-> json($moduleData);
        return redirect('modules');
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
        $module = Module::findOrFail($id);

        return view('ces.edit', compact('module'));
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
        $datosModule = request()->except(['_token', '_method']);
        Module::where('id','=',$id)->update($datosModule);
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
        $module = Module::where('id', $id);
        $module -> increment('deleted');

        return redirect('ces');
    }
}
