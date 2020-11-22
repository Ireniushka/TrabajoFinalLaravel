@extends('layouts.app')
<style>
    .boton_agregar{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: white;
    background-color: green;
    border-radius: 3px;
    border: 1px solid #0016b0;
  }
  .boton_agregar:hover{
    color: green;
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
    <h2> <strong>Crear Criterio de Evaluación </strong></h2>
    <form action="{{ url('/ces') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="word">{{ 'Palabra' }}</label>
        <input type="text" name="word" id="word" value="" size=100>
        </br>
        <label for="description">{{ 'Descripcion' }}</label>
        <input type="text" name="description" id="description" value="" size=100>
        </br>
        <label for="ra_id">{{ 'Id del ra' }}</label>
        <input type="text" name="ra_id" id="ra_id" value="" size=1>
        </br>
        <label for="task_id">{{ 'Id de la tarea' }}</label>
        <input type="text" name="task_id" id="task_id" value="" size=1>
        </br>
        <label for="mark">{{ 'Nota' }}</label>
        <input type="text" name="mark" id="mark" value="" size=2>
        </br>
        <input type="submit" value="Add" class="boton_agregar">
    </form>
</div>
@endsection