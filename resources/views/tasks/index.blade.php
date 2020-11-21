@extends('layouts.app')

@section('content')
<div>
    @LoggedAdmin()
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
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->number}}</td>
                    <td>{{$task->description}}</td>
                    <td> 
                        <a href="{{url('/tasks/'.$task->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
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
        @endLoggedAdmin

        @LoggedTute()
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
            @foreach($Tutetasks as $taskT)
                <tr>
                    <td>{{$taskT->id}}</td>
                    <td>{{$taskT->number}}</td>
                    <td>{{$taskT->description}}</td>
                    <td> 
                        <a href="{{url('/tasks/'.$taskT->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/tasks/'.$taskT->id)}}" style="display:inline">
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
