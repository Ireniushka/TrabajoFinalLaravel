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
@LoggedAdminAlum()
    <h2> <strong>Editar Usuario </strong></h2>
    <form action="{{url('/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="name">{{'Nombre'}}</label>
        <input type="text" name="name" id="name" value="{{ $user->name}}" size="50">
        </br>

        <label for="firstname">{{'Apellido'}}</label>
        <input type="firstname" name="firstname" id="firstname" value="{{ $user->firstname}}">  
        </br>

        <label for="phone">{{'Teléfono'}}</label>
        <input type="phone" name="phone" id="phone" value="{{ $user->phone}}">  
        </br>

        <label for="email">{{'Email'}}</label>
        <input type="email" name="email" id="email" value="{{ $user->email}}">  
        </br>

        <label for="enterprise_id">{{'Empresa'}}</label>
        <input type="enterprise_id" name="enterprise_id" id="enterprise_id" value="{{ $user->enterprise_id}}">  
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
@endLoggedAdminAlum
</div>
@endsection