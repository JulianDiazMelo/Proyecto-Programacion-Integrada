
@extends('layouts.app')
@section('content')

<div class='container'>

@if(Session::has('Mensaje1')){{
    Session::get('Mensaje1')
}}
@endif


<form action="{{url('/clientes/'.$cliente->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('clientes.form',['Modo'=>'editar'])
</form>
</div>
@endsection
