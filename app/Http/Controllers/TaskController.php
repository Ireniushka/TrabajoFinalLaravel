<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Module;
use App\Ce;
use App\Ra;

class TaskController extends Controller
{
    public function index()
    {   
        $cicloId = auth()->user()->cycle_id;
        $modulos['modulos'] = Module::where('cycle_id',$cicloId)->paginate(10);
        // foreach($modulos as $m){
        //     $raId['raId'] = Ra::where('module_id',$m->id);
        //     foreach($raId as $ra){
        //         $ces['ces'] = Ce::where('ra_id',$ra->id);
        //         foreach($ces as $ce){
        //             $Tutetasks['Tutetasks'] += Task::where('id',$ce->task_id);
        //         }
        //     }
        // }
        // $raId = Ra::where('module_id',$modulo);

        $Tutetasks['Tutetasks'] = Task::where('id',Ce::where('ra_id',Ra::where('module_id',Module::where('cycle_id',$cicloId))));
        
        $tasks['tasks']=Task::where('deleted', 0)->paginate(12);
        
        // $Tutetasks['tasks']=Task::where('deleted', 0)->where()->paginate(12);
        return view('tasks.index',$tasks,$Tutetasks);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $taskData=request()->except('_token');
        Task::insert(['number'=>request()->number,'description'=>request()->description]);
        return response()-> json($taskData);
        //return redirect('tasks');
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
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
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
        $datosTask = request()->except(['_token', '_method']);
        Task::where('id','=',$id)->update($datosTask);
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::where('id', $id);
        $task -> increment('deleted');

        return redirect('tasks');
    }
}
