@extends('layouts.app')

@section('content')
<div class="container">
    @LoggedAdmin()
    <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Nombre del ciclo</th>
                    <th>Grado</th>
                    <th>Año</th>
                </tr>
            </thead>

            <tbody>
            @foreach($ciclos as $ciclo)
                <tr>
                    <td>{{$ciclo->name}}</td>
                    <td>{{$ciclo->grade}}</td>
                    <td>{{$ciclo->year}}</td>
                    <td>  
                        <a href="{{url('/ciclos/'.$ciclo->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/ciclos/'.$ciclo->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p>{{$ciclos->links()}}</p>
        <a href="{{url('/ciclos/create')}}"><button class="btn btn-success">Crear ciclo</button></a>
    @endLoggedAdmin
</div>
@endsection