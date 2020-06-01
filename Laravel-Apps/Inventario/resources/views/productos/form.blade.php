

<div class="form-group">
<label for="producto" class="control-label">{{'Producto'}}</label>
<input type="text" class="form-control {{$errors->has('producto')?'is-invalid':''}} " name="producto" id="producto" value="{{ isset($producto->producto)?$producto->producto:old('producto') }}">
{!!$errors->first('producto','<div class="invalid-feedback">:message</div>')!!}


</div>
<div class="form-group">
<label for="cantidad" class="control-label">{{'Cantidad'}}</label>
<input type="text" class="form-control {{$errors->has('cantidad')?'is-invalid':''}} " name="cantidad" id="cantidad" value="{{ isset($producto->cantidad)?$producto->cantidad:old('cantidad') }}">
{!!$errors->first('cantidad','<div class="invalid-feedback">:message</div>')!!}
</div>
<div class="form-group">
<label for="tamano" class="control-label">{{'Tamaño'}}</label>
<input type="text" class="form-control {{$errors->has('tamano')?'is-invalid':''}} " name="tamano" id="tamano" value="{{ isset($producto->tamano)?$producto->tamano:old('tamano') }}">
{!!$errors->first('tamano','<div class="invalid-feedback">:message</div>')!!}
</div>
<div class="form-group">
<label for="precio_individual" class="control-label">{{'Precio Individual'}}</label>
<input type="text" class="form-control {{$errors->has('precio_individual')?'is-invalid':''}} " name="precio_individual" id="precio_individual" value="{{ isset($producto->precio_individual)?$producto->precio_individual:old('precio_individual') }}">
{!!$errors->first('precio_individual','<div class="invalid-feedback">:message</div>')!!}
</div>
<div class="form-group">
<label for="fecha_vencimiento" class="control-label">{{'Fecha Vencimiento'}}</label>
<input type="text" class="form-control {{$errors->has('fecha_vencimiento')?'is-invalid':''}} " name="fecha_vencimiento" id="fecha_vencimiento" value="{{ isset($producto->fecha_vencimiento)?$producto->fecha_vencimiento:old('fecha_vencimiento')}}">
{!!$errors->first('fecha_vencimiento','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear'? 'Agregar ':'Modificar'}}">
<a class="btn btn-primary" href="{{url('productos')}}" >Regresar</a>
