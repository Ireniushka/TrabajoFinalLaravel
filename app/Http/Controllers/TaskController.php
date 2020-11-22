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
        
        $tasks['tasks']=Task::where('deleted', 0)->paginate(10);
        
        return view('tasks.index',$tasks);
        
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
        return redirect('tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taskT['taskT']=Task::where('deleted', 0)->where('id',$id)->paginate(12);
        return view('tasks.show',$taskT);
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
