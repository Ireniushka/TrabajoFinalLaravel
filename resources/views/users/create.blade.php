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

    <h2> <strong>Nuevo Usuario </strong></h2>
    <form action="{{ url('/users')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">{{'Nombre'}}</label>
        <input type="text" name="name" id="name" value="" size=55>
        </br>
        <label for="firstname">{{'Apellido'}}</label>
        <input type="text" name="firstname" id="firstname" value="" size=55>
        </br>
        <label for="phone">{{'Teléfono'}}</label>
        <input type="text" name="phone" id="phone" value="" size=55>
        </br>
        <label for="email">{{'Email'}}</label>
        <input type="text" name="email" id="email" value="" size=55>
        </br>
        <label for="email_verified_at">{{'Confirma tu email'}}</label>
        <input type="text" name="email_verified_at" id="email_verified_at" value="" size=55>
        </br>
        <label for="password">{{'Contraseña'}}</label>
        <input type="password" name="password" id="password" value="" size=55>
        </br>
        <div>
            <label for="inputState">Tipo de Usuario</label>
            <select id="inputState" class="form-control" style="width:200px">
                <option selected>Alumno</option>
                <option>Tutor educativo</option>
                <option>Tutor docente</option>
            </select>
         </div>

        <input type="submit" value="Agregar" class="boton_agregar"></input>
        </br>

        
    </form>

    </br>
    </br>
    </br>

    <a href="{{url('/ciclos')}}"><button class="btn btn-primary">Volver</button></a>

    
</div>
