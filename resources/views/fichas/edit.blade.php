@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/fichas/'.$ficha->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH')}}
        <label for="description">{{'Descripción'}}</label>
        <input type="text" name="description" id="description" value="{{ $ficha->description}}">
        </br>

        <label for="date">{{'Fecha'}}</label>
        <input type="date" name="date" id="date" value="{{ $ficha->date}}">  
        </br>

        <input type="submit" value="Editar">
    </form>
</div>
@endsection