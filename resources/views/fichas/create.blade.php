@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/fichas')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="description">{{'Descripción'}}</label>
        <input type="text" name="description" id="description" value="">
        </br>

        <label for="date">{{'Fecha'}}</label>
        <input type="date" name="date" id="date" value="">
        </br>

        <input type="submit" value="Agregar"></input>
    </form>
</div>
@endsection