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
    <h2> <strong>Editar Ficha de Seguimiento </strong></h2>
    <form action="{{url('/asistencia/'.$asistencia->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="assistance">{{'Descripción'}}</label>
        <input type="text" name="assistance" id="assistance" value="{{ $asistencia->assistance}}" size="50">
        </br>

        <label for="date">{{'Fecha'}}</label>
        <input type="date" name="date" id="date" value="{{ $asistencia->date}}">  
        </br>

        <input type="submit" value="Actualizar" class="boton_actualizar">
        </br>
    </form>
    </br>
    </br>
    </br>
    <a href="{{url('/asistencia')}}"><button class="btn btn-primary">Volver</button></a>
@endLoggedAdminAlum
</div>
@endsection