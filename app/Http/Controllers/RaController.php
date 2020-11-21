<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ra;
use App\Module;
use App\User;

class RaController extends Controller
{
    public function index()
    {
        $ras['ras']=Ra::where('deleted', 0)->paginate(12);

        $Tuteras['Tuteras']=Ra::where('deleted', 0)->where('module_id', auth()->user()->module_id)->paginate(12);
        return view('ras.index',$ras,$Tuteras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raData=request()->except('_token');
        Ra::insert(['number'=>request()->number, 'description'=>request()->description, 'module_id'=>request()->module_id]);
        return response()-> json($raData);
        return redirect('ras');
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
        $ra = Ra::findOrFail($id);

        return view('ras.edit', compact('ra'));
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
        $datosRa = request()->except(['_token', '_method']);
        Ra::where('id','=',$id)->update($datosRa);
        return redirect('ras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ra = Ra::where('id', $id);
        $ra -> increment('deleted');

        return redirect('ras');
    }

}
