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
@LoggedAdmin()
    <h2>Sesión iniciada como Administrador</h2>
    </br>
    <a class="boton_agregar" href="users" role="button">Usuarios</a>
    <a class="boton_agregar" href="ciclos" role="button">Ciclos</a>
    <a class="boton_agregar" href="fichas" role="button">Fichas</a>
    <a class="boton_agregar" href="empresas" role="button">Empresasad</a>
    <a class="boton_agregar" href="asistencia" role="button">Asistencia</a>
   


    @endLoggedAdmin
</div>
@endsection

