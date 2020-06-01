

<div class="form-group">
<label for="documento" class="control-label">{{'Documento'}}</label>
<input type="text" class="form-control {{$errors->has('documento')?'is-invalid':''}}" name="documento" id="documento" value="{{ isset($cliente->documento)?$cliente->documento:old('documento') }}">
{!!$errors->first('documento','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="nombre" class="control-label">{{'Nombre'}}</label>
<input type="text"  class="form-control {{$errors->has('nombre')?'is-invalid':''}}" name="nombre" id="nombre" value="{{ isset($cliente->nombre)?$cliente->nombre:old('nombre') }}">
{!!$errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="apellido" class="control-label">{{'Apellido'}}</label>
<input type="text" class="form-control {{$errors->has('apellido')?'is-invalid':''}}" name="apellido" id="apellido" value="{{ isset($cliente->apellido)?$cliente->apellido:old('apellido') }}">
{!!$errors->first('apellido','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="id_compra" class="control-label">{{'ID Compra'}}</label>
<input type="text" class="form-control {{$errors->has('id_compra')?'is-invalid':''}}" name="id_compra" id="id_compra" value="{{ isset($cliente->id_compra)?$cliente->id_compra:old('id_compra') }}">
{!!$errors->first('id_compra','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear'? 'Agregar ':'Modificar'}}">
<a class="btn btn-primary" href="{{url('compras')}}" >Regresar</a>
