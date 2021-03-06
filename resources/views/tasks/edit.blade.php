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
  label{
      width: 100px;
  }
  
</style>

@section('content')
<div class="container">
@LoggedAdminTute()
    <h2> <strong>Editar tarea </strong></h2>
    <form action="{{url('/tasks/'.$task->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="number">{{'Numero'}}</label>
        <input type="text" name="number" id="number" value="{{$task->number}}" size=1>
        </br>
        <label for="description">{{'Descripcion'}}</label>
        <input type="text" name="description" id="desc" value="{{$task->description}}" size=100>
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