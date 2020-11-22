@extends('layouts.app')

@section('content')
<div>
    @LoggedAdmin()
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Palabra</th>
                    <th>Descripcion</th>
                    <th>Id RRA</th>
                    <th>Id Tarea</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($ces as $ce)
                <tr>
                    <td>{{ $ce->id }}</td>
                    <td>{{ $ce->word }}</td>
                    <td>{{ $ce->description }}</td>
                    <td>{{ $ce->ra_id }}</td> 
                    <td>{{ $ce->task_id }}</td>
                    <td>{{ $ce->mark }}</td>
                    <td> 
                        <a href="{{url('/ces/'.$ce->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/ces/'.$ce->id)}}" style="display:inline">
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
                    <th>Palabra</th>
                    <th>Descripcion</th>
                    <th>Id RRA</th>
                    <th>Id Tarea</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($modulo as $m)
                    
                    @foreach($ras as $ra)
                    
                        @if($m->id == $ra->module_id)
                            @foreach($ces as $ce)
                                @if($ra->id == $ce->ra_id)
                                    <tr>
                                        <td>{{ $ce->id }}</td>
                                        <td>{{ $ce->word }}</td>
                                        <td>{{ $ce->description }}</td>
                                        <td>{{ $ce->ra_id }}</td>
                                        <td>{{ $ce->task_id }}</td>
                                        <td>{{ $ce->mark }}</td>
                                        <td>
                                            <a href="{{ url('/ces/'.$ce->id.'/edit') }}"
                                                class="btn btn-warning">
                                                Editar
                                            </a>
                                            |
                                            <form method="post" action="{{ url('/ces/'.$ce->id) }}"
                                                style="display:inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
                @endforeach
        </table>
    @endLoggedTute
</div>
@endsection