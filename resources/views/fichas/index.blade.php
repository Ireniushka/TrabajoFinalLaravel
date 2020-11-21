@extends('layouts.app')

@section('content')
<div class="container">
    @LoggedAdmin()
    <h1>Fichas de seguimiento</h1>
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
            @foreach($fichas as $ficha)
                <tr>
                    <td>{{$ficha->description}}</td>
                    <td>{{$ficha->date}}</td>
                    <td>{{$ficha->alumno->name}}</td>
                    <td>  
                        <a href="{{url('/fichas/'.$ficha->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/fichas/'.$ficha->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p>{{$fichas->links()}}</p>
        <a href="{{url('/fichas/create')}}"><button class="btn btn-success">Crear Ficha</button></a>
    @endLoggedAdmin
    
    @LoggedAlum()
        <h1>Mis fichas de seguimiento</h1>
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
            @foreach($fichasAlumno as $fichaAlumno)
                <tr>
                    <td>{{$fichaAlumno->description}}</td>
                    <td>{{$fichaAlumno->date}}</td>
                    <td>{{$fichaAlumno->alumno->name}}</td>
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
        <a href="{{url('/fichas/create')}}"><button onclick="" class="btn btn-success">Crear Ficha</button></a>
    @endLoggedAlum
</div>
@endsection