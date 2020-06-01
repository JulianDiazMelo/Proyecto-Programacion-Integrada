

<div class="form-group">
<label for="cod_compra"  class="control-label">{{'cod_compra'}}</label>
<input type="text" class="form-control {{$errors->has('cod_compra')?'is-invalid':''}}" name="cod_compra" id="cod_compra" value="{{ isset($compra->cod_compra)?$compra->cod_compra:old('cod_compra') }}">
{!!$errors->first('cod_compra','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group" class="control-label">
<label for="producto">{{'producto'}}</label>
<input type="text" class="form-control {{$errors->has('producto')?'is-invalid':''}}" name="producto" id="producto" value="{{ isset($compra->producto)?$compra->producto:old('producto') }}">
{!!$errors->first('producto','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group" class="control-label"> 
<label for="cantidad">{{'cantidad'}}</label>
<input type="text" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}" name="cantidad" id="cantidad" value="{{ isset($compra->cantidad)?$compra->cantidad:old('cantidad') }}">
{!!$errors->first('cantidad','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear'? 'Agregar ':'Modificar'}}">
<a class="btn btn-primary" href="{{url('compras')}}" >Regresar</a>
