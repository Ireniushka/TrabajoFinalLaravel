@extends('layouts.app')

@section('content')
<div class="container">
        @LoggedTute()
        <h1>Ces</h1>
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
                    @foreach($ras as $ra)
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
                                            <form method="post" action="{{ url('/ces/'.$ce->id) }}"
                                                style="display:inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger">Borrar</button>
                                            </form>
                                            <a href="{{ url('/tasks/'.$ce->task_id) }}"
                                                class="btn btn-info">
                                                Ver tarea
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                    @endforeach
                </tbody>
        </table>
        <a href="{{url('/ces/create')}}"><button onclick="" class="btn btn-success">Crear Ce</button></a>
    @endLoggedTute
</div>
@endsection