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
    <h2> <strong>Nueva hoja de asistencias</strong></h2>
    <form action="{{ url('/asistencia')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        <h3>Asistencia 1</h3>
        <label for="assistance1">{{'Descripción'}}</label>
        <input type="text" name="assistance1" id="asistance1" value="" size=50>
        </br>

        <label for="date1">{{'Fecha'}}</label>
        <input type="date" name="date1" id="date1" value="">
        </br>

        </br>
        <h3>Asistencia 2</h3>
        <label for="assistance2">{{'Descripción'}}</label>
        <input type="text" name="assistance2" id="assistance2" value="" size=50>
        </br>

        <label for="date2">{{'Fecha'}}</label>
        <input type="date" name="date2" id="date2" value="">
        </br>

        </br>
        <h3>Asistencia 3</h3>
        <label for="assistance3">{{'Descripción'}}</label>
        <input type="text" name="assistance3" id="assistance3" value="" size=50>
        </br>

        <label for="date3">{{'Fecha'}}</label>
        <input type="date" name="date3" id="date3" value="">
        </br>
        <input type="submit" value="Agregar" class="boton_agregar">
    </form>

    </br>
    </br>
    </br>
    <a href="{{url('/asistencia')}}"><button class="btn btn-primary">Volver</button></a>
    
@endLoggedAdminAlum
</div>
@include('partials.errors')
@endsection