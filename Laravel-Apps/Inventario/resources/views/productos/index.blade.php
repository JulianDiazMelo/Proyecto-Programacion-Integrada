@extends('layouts.app')
@section('content')

<div class='container'>


@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}}
</div>

@endif




<a href="{{url('productos/create')}}" class= "btn btn-success" >Agregar Producto</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Tamaño</th>
            <th>Precio Individual</th>
            <th>Fecha Vencimiento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$producto->producto}}</td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->tamano}}</td>
        <td>{{$producto->precio_individual}}</td>
        <td>{{$producto->fecha_vencimiento}}</td>
        <td>
        <a class="btn btn-warning" href="{{url('/productos/'.$producto->id.'/edit') }}">
        Editar
        </a>    
        <form method="post" action="{{url('/productos/'.$producto->id)}}" style="display:inline">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?')">Borrar</button>
        
        </form>
        </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
{{$productos->links()}}
</div>
@endsection