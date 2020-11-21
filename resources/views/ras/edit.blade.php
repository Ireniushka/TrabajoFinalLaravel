@extends('layouts.app')
<style>
    .boton_actualizar {
        text-decoration: none;
        padding: 5px;
        font-weight: 600;
        font-size: 15px;
        color: white;
        background-color: orange;
        border-radius: 3px;
        border: 1px solid #0016b0;
    }

    .boton_actualizar:hover {
        color: orange;
        background-color: white;
    }

    h2 {
        font: oblique 100% cursive;
    }
</style>

@section('content')
<div class="container">
    @LoggedAdminTute()
        <h2> <strong>Editar RRA </strong></h2>
        <form action="{{ url('/ras/'.$ra->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="number">{{ 'number' }}</label>
            <input type="number" name="number" id="number" value="" size=100>
            </br>
            <label for="description">{{ 'description' }}</label>
            <input type="text" name="description" id="description" value="" size=100>
            </br>
            <input type="submit" value="Actualizar" class="boton_actualizar">
            </br>
        </form>
        </br>
        </br>
        </br>
        <a href="{{ url('/ras') }}"><button class="btn btn-primary">Volver</button></a>
    @endLoggedAdminTute
</div>
@endsection