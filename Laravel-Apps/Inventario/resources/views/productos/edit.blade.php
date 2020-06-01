@extends('layouts.app')
@section('content')

<div class='container'>

 
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<form action="{{url('/productos/'.$producto->id)}}" method="post">
{{ csrf_field() }}
{{method_field('PATCH')}}

@include('productos.form',['Modo'=>'editar'])
</form>
</div>
@endsection


