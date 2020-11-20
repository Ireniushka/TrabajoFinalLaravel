@extends('layouts.app')

@section('content')
<div class="container">
    @LoggedAdmin()
    <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Nombre estudiante</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($asistencias as $asistencia)
                <tr>
                    <td>{{$asistencia->assistance}}</td>
                    <td>{{$asistencia->date}}</td>
                    <td>{{$asistencia->alumno->name}}</td>
                    <td>  
                        <a href="{{url('/asistencia/'.$asistencia->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/asistencia/'.$asistencia->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p>{{$asistencias->links()}}</p>
        <a href="{{url('/asistencia/create')}}"><button class="btn btn-success">Crear Asistencia</button></a>
    @endLoggedAdmin
    
    @LoggedAlum()
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Nombre estudiante</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($asistenciasAlumno as $asistenciaAlumno)
                <tr>
                    <td>{{$asistenciaAlumno->assistance}}</td>
                    <td>{{$asistenciaAlumno->date}}</td>
                    <td>{{$asistenciaAlumno->alumno->name}}</td>
                    <td>  
                        <a href="{{url('/asistencia/'.$asistenciaAlumno->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/asistencia/'.$asistenciaAlumno->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p>{{$asistenciasAlumno->links()}}</p>
        <a href="{{url('/asistencia/create')}}"><button onclick="" class="btn btn-success">Crear Asistencia</button></a>
    @endLoggedAlum
</div>
@endsection