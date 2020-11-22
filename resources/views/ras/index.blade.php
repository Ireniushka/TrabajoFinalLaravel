@extends('layouts.app')

@section('content')
<div>
    @LoggedAdmin()
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
                        |
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
        @endLoggedAdmin

        @LoggedTute()
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
                @foreach($modulo as $m)
                    @foreach($ras as $raT)
                        @if($m->id == $raT->module_id)
                            <tr>
                                <td>{{ $raT->id }}</td>
                                <td>{{ $raT->number }}</td>
                                <td>{{ $raT->description }}</td>
                                <td>{{ $raT->module_id }}</td>
                                <td> 
                                    <a href="{{ url('/ras/'.$raT->id.'/edit') }}" class="btn btn-warning">
                                        Editar
                                    </a>
                                    |
                                    <form method="post" action="{{ url('/ras/'.$raT->id) }}" style="display:inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">Borrar</button>
                                    </form>
                                </td> 
                            </tr>
                        @endif
                    @endforeach
                </tbody>
                @endforeach
        </table>
    @endLoggedTute
</div>
@endsection