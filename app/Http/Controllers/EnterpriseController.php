<?php

namespace App\Http\Controllers;

use App\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function index()
    {
        $empresas['empresas']=Enterprise::where('deleted', 0)->paginate(7);
    
        

        return view('enterprises.index', $empresas);
    }

    public function create()
    {
        return view('enterprises.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|max:100',
            'email' => 'required|max:255',
        ]);

        Enterprise::insert(['name'=>request()->name, 'email'=>request()->email]);

        return redirect('enterprises');
       
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $empresa = Enterprise::findOrFail($id);

        return view('enterprises.edit', compact('empresa'));
    }

    public function update(Request $request, $id)
    {
        $datosEmpresa = request()->except(['_token', '_method']);
        Enterprise::where('id','=',$id)->update($datosEmpresa);

        return redirect('enterprises');
    }

    public function destroy($id)
    {
        $empresa = Enterprise::where('id', $id);
        $empresa -> increment('deleted');
        

        return redirect('enterprises');
    }

}
