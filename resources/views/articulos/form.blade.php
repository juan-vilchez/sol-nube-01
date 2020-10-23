<div class="form-group">
<label class="control-label" for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" 
value="{{isset($articulo->Nombre)?$articulo->Nombre:''}}" required>
</div>

<div class="form-group">
<label class="control-label" for="Descripcion">{{'Descripcion'}}</label>
<input class="form-control" type="text" name="Descripcion" id="Descripcion"
value="{{isset($articulo->Descripcion)?$articulo->Descripcion:''}}" required>
</div>


<div class="form-group">
<label class="control-label" for="Precio">{{'Precio'}}</label>
<input class="form-control" type="string" name="Precio" id="Precio"
value="{{isset($articulo->Precio)?$articulo->Precio:''}}" required>
</div>


<div class="form-group">
<label class="control-label" for="Stock">{{'Stock'}}</label>
<input class="form-control" type="number" name="Stock" id="Stock"
value="{{isset($articulo->Stock)?$articulo->Stock:''}}" required >
</div>

<!--
<div class="form-group">
<label class="control-label" for="Direccion">{{'Direccion'}}</label>
<input class="form-control" type="text" name="Direccion" id="Direccion"
value="{{isset($articulo->Direccion)?$articulo->Direccion:''}}">
</div>
-->

<input class="btn btn-primary" type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a class="btn btn-success" href="{{url('articulos')}}">Regresar</a>