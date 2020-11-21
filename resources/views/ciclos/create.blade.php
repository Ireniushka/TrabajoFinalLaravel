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
  
</style>
@section('content')
<div class="container">
    <h2> <strong>Nuevo Ciclo </strong></h2>
    <form action="{{ url('/ciclos')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">{{'Nombre'}}</label>
        <input type="text" name="name" id="name" value="" size=55>
        </br>
        <label for="grade">{{'Grado'}}</label>
        <input type="text" name="grade" id="grade" value="" size=55>
        </br>
        <label for="year">{{'Año'}}</label>
        <input type="text" name="year" id="year" value="" size=55>
        </br>


        <input type="submit" value="Agregar" class="boton_agregar"></input>
        </br>

        
    </form>

    </br>
    </br>
    </br>

    <a href="{{url('/ciclos')}}"><button class="btn btn-primary">Volver</button></a>

    
</div>
@include('partials.errors')
@endsection


