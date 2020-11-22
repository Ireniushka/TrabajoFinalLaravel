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
        <h2> <strong>Editar Criterio de Evaluacion </strong></h2>
        <form action="{{ url('/ces/'.$ce->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="word">{{ 'word' }}</label>
            <input type="text" name="word" id="word" value="" size=100>
            </br>
            <label for="description">{{ 'description' }}</label>
            <input type="text" name="description" id="description" value="" size=100>
            </br>
            <label for="ra_id">{{ 'ra_id' }}</label>
            <input type="text" name="ra_id" id="ra_id" value="" size=100>
            </br>
            <label for="task_id">{{ 'task_id' }}</label>
            <input type="text" name="task_id" id="task_id" value="" size=100>
            </br>
            <label for="mark">{{ 'mark' }}</label>
            <input type="text" name="mark" id="mark" value="" size=100>
            </br>
            <input type="submit" value="Actualizar" class="boton_actualizar">
            </br>
        </form>
        </br>
        </br>
        </br>
        <a href="{{ url('/ces') }}"><button class="btn btn-primary">Volver</button></a>
    @endLoggedAdminTute
</div>
@endsection