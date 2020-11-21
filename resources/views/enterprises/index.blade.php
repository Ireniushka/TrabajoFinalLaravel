@extends('layouts.app')

@section('content')
<div class="container">
    <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Nombre de la empresa</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{$empresa->name}}</td>
                    <td>{{$empresa->email}}</td>
                    <td>  
                        <a href="{{url('/enterprises/'.$empresa->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form method="post" action="{{url('/enterprises/'.$empresa->id)}}" style="display:inline">
                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p>{{$empresas->links()}}</p>
        <a href="{{url('/enterprises/create')}}"><button class="btn btn-success">Crear empresa</button></a>
</div>
@endsection