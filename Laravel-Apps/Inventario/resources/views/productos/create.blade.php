@section('content')
@extends('layouts.app')

<div class="container">
 

<form action="{{url('/productos')}}" method="post" >
{{ csrf_field() }}
@include('productos.form',['Modo'=>'crear'])


</form>
</div>
@endsection
