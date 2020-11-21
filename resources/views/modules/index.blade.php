@extends('layouts.app')

@section('content')
<div>
    @LoggedAdmin()
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Cycle_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($modules as $module)
                <tr>
                    <td>{{$module->id}}</td>
                    <td>{{$module->name}}</td>
                    <td>{{$module->cycle_id}}</td>
                    <td> 
                        <a href="{{url('/modules/'.$module->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/modules/'.$module->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
            @endforeach
        </table>
        @endLoggedAdmin

        @LoggedTute()
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Cycle_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($Tutemodules as $moduleT)
                <tr>
                    <td>{{$moduleT->id}}</td>
                    <td>{{$moduleT->name}}</td>
                    <td>{{$moduleT->cycle_id}}</td>
                    <td> 
                        <a href="{{url('/modules/'.$moduleT->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/modules/'.$moduleT->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
            @endforeach
        </table>
    @endLoggedTute
</div>
@endsection