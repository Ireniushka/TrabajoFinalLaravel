@extends('layouts.app')

@section('content')
<div class="container">
    <table class ="table table-light">
        <thead class="thead-ligth">
            <tr>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Id estudiante</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach($fichasAlumno as $fichaAlumno)
            <tr>
                <td>{{$fichaAlumno->description}}</td>
                <td>{{$fichaAlumno->date}}</td>
                <td>{{$fichaAlumno->student_id}}</td>
                <td>  
                    <a href="{{url('/fichas/'.$fichaAlumno->id.'/edit')}}" class="btn btn-warning">
                        Editar
                    </a>
                    |
                    <form method="post" action="{{url('/fichas/'.$fichaAlumno->id)}}" style="display:inline">
                        {{csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <p>{{$fichasAlumno->links()}}</p>
    <a href="{{url('/fichas/create')}}"><button onclick="" class="btn btn-success">Crear</button></a>
</div>
@endsection