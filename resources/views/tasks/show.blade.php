@extends('layouts.app')

@section('content')
<div class="container">
        @LoggedTute()
        <h1>Tareas</h1>
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Description</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($taskT as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->number}}</td>
                    <td>{{$task->description}}</td>
                    <td> 
                        <a href="{{url('/tasks/'.$task->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        <form method="post" action="{{url('/tasks/'.$task->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
            @endforeach
        </table>
        <a href="{{url('/tasks/create')}}"><button onclick="" class="btn btn-success">Crear tarea</button></a>
    @endLoggedTute
</div>
@endsection