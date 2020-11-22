@extends('layouts.app')

@section('content')
<div class="container">
    @LoggedAdmin()
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
        <p>{{$ces->links()}}</p>
        <a href="{{url('/ces/create')}}"><button onclick="" class="btn btn-success">Crear Ce</button></a>
        @endLoggedAdmin
</div>
@endsection