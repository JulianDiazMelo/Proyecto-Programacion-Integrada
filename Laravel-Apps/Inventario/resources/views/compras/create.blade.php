

<form action="{{url('/compras')}}" method="post">
{{csrf_field()}}



</form>

@section('content')
@extends('layouts.app')

<div class="container">
 


<form action="{{url('/compras')}}" class="form-horizontal" method="post">

{{csrf_field()}}

@include('compras.form',['Modo'=>'crear'])


</form>
</div>
@endsection
