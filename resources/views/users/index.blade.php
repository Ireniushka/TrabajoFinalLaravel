@extends('layouts.app')

@section('content')
<div class="container">
    @LoggedAdmin()
    <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Ciclo</th>
                    <th>Empresa</th>
                </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->type}}</td>
                    <td>{{$user->cycle_id}}</td>
                    <td>{{$user->enterprise_id}}</td>
                    <td>  
                        <a href="{{url('/users/'.$user->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/users/'.$user->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p>{{$users->links()}}</p>
        <a href="{{url('/users/create')}}"><button class="btn btn-success">Crear Usuario</button></a>
    @endLoggedAdmin
    
   
</div>
@endsection