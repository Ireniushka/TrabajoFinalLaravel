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
@LoggedAdminTute()
    <h2> <strong>Editar tarea </strong></h2>
    <form action="{{url('/modules/'.$module->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="name">{{'name'}}</label>
        <input type="text" name="name" id="name" value="" size=100>
        </br>

        <input type="submit" value="Actualizar" class="boton_actualizar">
        </br>
    </form>
    </br>
    </br>
    </br>
    <a href="{{url('/tasks')}}"><button class="btn btn-primary">Volver</button></a>
@endLoggedAdminTute
</div>
@endsection