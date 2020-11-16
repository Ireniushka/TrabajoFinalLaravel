<table class ="table table-light">
    <thead class="thead-ligth">
        <tr>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Id estudiante</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($fichasAlumno as $fichaAlumno)
        <tr>
            <td>{{$fichaAlumno->date}}</td>
            <td>{{$fichaAlumno->description}}</td>
            <td>{{$fichaAlumno->student_id}}</td>
            <td>Editar | 
            
            <form method="post" action="{{url('/fichas/'.$fichaAlumno->id)}}">
            {{csrf_field() }}
            {{ method_field('DELETE')}}
            <button>Borrar</button>
            </form>
            
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<p>{{$fichasAlumno->links()}}</p>
<a href="{{url('/fichas/create')}}"><button onclick="">Crear</button></a>