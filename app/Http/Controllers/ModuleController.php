<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Cycle;
use App\User;

class ModuleController extends Controller
{
    public function index()
    {

        // $userCiclo['userCiclo']=User::where('cycle_id',)

        $modules['modules']=Module::where('deleted', 0)->paginate(12);
        // $Tutemodules['Tutemodules'] = Module::where('deleted', 0)->paginate(12);
        $Tutemodules['Tutemodules']=Module::where('deleted', 0)->where('cycle_id', auth()->user()->cycle_id)->paginate(12);
        return view('modules.index',$modules,$Tutemodules);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
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

        return view('modules.edit', compact('module'));
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
        return redirect('modules');
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

        return redirect('modules');
    }
}
