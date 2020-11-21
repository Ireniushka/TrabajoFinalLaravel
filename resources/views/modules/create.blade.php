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
    <h2> <strong>Crear Task </strong></h2>
    <form action="{{url('/modules')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">{{'name'}}</label>
        <input type="text" name="name" id="name" value="" size=100>
        </br>

        <input type="submit" value="Add">
    </form>
</div>
@endsection