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
@LoggedAdminAlum()
    <h2> <strong>Nueva Ficha de Segumiento </strong></h2>
    <form action="{{ url('/fichas')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="description">{{'Descripción'}}</label>
        <input type="text" name="description" id="description" value="" size=50>
        </br>

        <label for="date">{{'Fecha'}}</label>
        <input type="date" name="date" id="date" value="">
        </br>

        <input type="submit" value="Agregar" class="boton_agregar"></input>
        </br>

        
    </form>

    </br>
    </br>
    </br>

    <a href="{{url('/fichas')}}"><button class="btn btn-primary">Volver</button></a>
    
@endLoggedAdminAlum
</div>
@include('partials.errors')
@endsection