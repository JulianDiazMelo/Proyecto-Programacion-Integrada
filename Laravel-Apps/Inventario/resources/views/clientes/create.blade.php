@section('content')
@extends('layouts.app')

<div class="container">
 


<form action="{{url('/clientes')}}" class="form-horizontal" method="post">

{{csrf_field()}}

@include('clientes.form',['Modo'=>'crear'])


</form>
</div>
@endsection
