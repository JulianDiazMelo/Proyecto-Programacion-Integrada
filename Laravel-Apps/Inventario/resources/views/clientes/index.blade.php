@extends('layouts.app')
@section('content')

<div class='container'>


@if(Session::has('Mensaje1'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje1')}}
</div>

@endif




<a href="{{url('clientes/create ')}}" class= "btn btn-success">Agregar Empleado</a>
<br/>
<br/>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Id Compra</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$cliente->documento}}</td>
        <td>{{$cliente->nombre}} {{$cliente->apellido}}</td>
        <td>{{$cliente->id_compra}}</td>
        <td>
        <a class="btn btn-warning" href="{{url('/clientes/'.$cliente->id.'/edit') }}">
        Editar
        </a>    
        <form method="post" action="{{url('/clientes/'.$cliente->id)}}" style="display:inline">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?')">Borrar</button>
        
        </form>
        </td>
        </form>
        </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
{{$clientes->links()}}
</div>
@endsection