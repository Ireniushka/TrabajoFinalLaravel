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
    <h2> <strong>Editar Ciclo </strong></h2>
    <form action="{{url('/ciclos/'.$ciclo->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="name">{{'Nombre del ciclo'}}</label>
        <input type="text" name="name" id="name" value="{{ $ciclo->name}}" size="50">
        </br>

        <label for="grade">{{'Grado'}}</label>
        <input type="grade" name="grade" id="grade" value="{{ $ciclo->grade}}">  
        </br>

        <label for="year">{{'Año'}}</label>
        <input type="year" name="year" id="year" value="{{ $ciclo->year}}">  
        </br>

        <input type="submit" value="Actualizar" class="boton_actualizar">
        </br>
    </form>
    </br>
    </br>
    </br>
    <a href="{{url('/ciclos')}}"><button class="btn btn-primary">Volver</button></a>
@endLoggedAdminAlum
</div>
@endsection