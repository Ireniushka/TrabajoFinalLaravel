@extends('layouts.app')

@section('content')
<div>
    @LoggedAdmin()
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Id</th>
                    <th>Word</th>
                    <th>Description</th>
                    <th>ra_id</th>
                    <th>task_id</th>
                    <th>mark</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($Ras as $ra)
                <tr>
                    <td>{{$ra->id}}</td>
                    <td>{{$ra->name}}</td>
                    <td>{{$ra->cycle_id}}</td>
                    <td> 
                        <a href="{{url('/modules/'.$ra->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/modules/'.$ra->id)}}" style="display:inline">
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
                    <th>Word</th>
                    <th>Description</th>
                    <th>ra_id</th>
                    <th>task_id</th>
                    <th>mark</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($Ras as $ra)
                <tr>
                    <td>{{$ra->id}}</td>
                    <td>{{$ra->name}}</td>
                    <td>{{$ra->cycle_id}}</td>
                    <td> 
                        <a href="{{url('/modules/'.$ra->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/modules/'.$ra->id)}}" style="display:inline">
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