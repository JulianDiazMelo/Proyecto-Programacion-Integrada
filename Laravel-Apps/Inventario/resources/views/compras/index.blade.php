@extends('layouts.app')
@section('content')

<div class='container'>


@if(Session::has('Mensaje2'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje2')}}
</div>
@endif




<a href="{{url('compras/create ')}}" class= "btn btn-success">Agregar Compra</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>ID Compra</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($compras as $compra)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$compra->cod_compra}}</td>
        <td>{{$compra->producto}} </td>
        <td>{{$compra->cantidad}}</td>
        <td>
        <a class="btn btn-warning" href="{{url('/compras/'.$compra->id.'/edit') }}">
        Editar
        </a>    
        <form method="post" action="{{url('/compras/'.$compra->id)}}" style="display:inline">
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
{{$compras->links()}}
</div>
@endsection