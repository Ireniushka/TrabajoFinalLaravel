@extends('layouts.app')
<style>
    .boton_actualizar{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: white;
    background-color: orange;
    border-radius: 3px;
    border: 1px solid #0016b0;
  }
  .boton_actualizar:hover{
    color: orange;
    background-color: white;
  }

  h2{
    font: oblique 100% cursive;
  }
  
</style>

@section('content')
<div class="container">
@LoggedAdmin()
    <h2> <strong>Editar Usuario </strong></h2>
    <form action="{{url('/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="name">{{'Nombre'}}</label>
        <input type="text" name="name" id="name" value="{{ $user->name}}" size="50">
        </br>

        <label for="firstname">{{'Apellidos'}}</label>
        <input type="firstname" name="firstname" id="firstname" value="{{ $user->firstname}}">  
        </br>

        <label for="phone">{{'Telefono'}}</label>
        <input type="phone" name="phone" id="phone" value="{{ $user->phone}}">  
        </br>
        <label for="email">{{'Email'}}</label>
        <input type="email" name="email" id="email" value="{{ $user->email}}">  
        </br>
        <label for="entreprise_id">{{'Empresa'}}</label>
        <input type="entreprise_id" name="entreprise_id" id="entreprise_id" value="{{ $user->entreprise_id}}">  
        </br>
        <label for="cycle_id">{{'Ciclo'}}</label>
        <input type="cycle_id" name="cycle_id" id="cycle_id" value="{{ $user->cycle_id}}">  
        </br>

        <input type="submit" value="Actualizar" class="boton_actualizar">
        </br>
    </form>
    </br>
    </br>
    </br>
    <a href="{{url('/users')}}"><button class="btn btn-primary">Volver</button></a>
@endLoggedAdmin
</div>
@endsection