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
    <h2> <strong>Crear Resultado de Aprendizaje </strong></h2>
    <form action="{{ url('/ras') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="number">{{ 'Numero' }}</label>
        <input type="text" name="number" id="number" value="" size=1>
        </br>
        <label for="description">{{ 'Descripcion' }}</label>
        <input type="text" name="description" id="description" value="" size=100>
        </br>
        <label for="module_id">{{ 'Id del modulo' }}</label>
        <input type="text" name="module_id" id="module_id" value="" size=1>
        </br>
        <input type="submit" value="Add" class="boton_agregar">
    </form>
</div>
@endsection