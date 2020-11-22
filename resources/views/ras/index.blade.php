@extends('layouts.app')

@section('content')
<div class="container">
    @LoggedAdmin()
    <h1>Resultados de aprendizaje</h1>
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>descripcion</th>
                    <th>Id modulo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($ras as $ra)
                <tr>
                    <td>{{ $ra->id }}</td>
                    <td>{{ $ra->number }}</td>
                    <td>{{ $ra->description }}</td>
                    <td>{{ $ra->module_id }}</td>
                    <td> 
                        <a href="{{url('/ras/'.$ra->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        <form method="post" action="{{url('/ras/'.$ra->id)}}" style="display:inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
            @endforeach
        </table>
        <a href="{{url('/ras/create')}}"><button onclick="" class="btn btn-success">Crear tarea</button></a>
        @endLoggedAdmin

        @LoggedTute()
        <h1>Resultados de aprendizaje</h1>
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>descripcion</th>
                    <th>Id modulo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($ras as $raT)
                <tr>
                    <td>{{ $raT->id }}</td>
                    <td>{{ $raT->number }}</td>
                    <td>{{ $raT->description }}</td>
                    <td>{{ $raT->module_id }}</td>
                    <td> 
                        <a href="{{ url('/ras/'.$raT->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>
                        <form method="post" action="{{ url('/ras/'.$raT->id) }}" style="display:inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
            @endforeach
        </table>
        <a href="{{url('/ras/create')}}"><button onclick="" class="btn btn-success">Crear tarea</button></a>
    @endLoggedTute
</div>
@endsection