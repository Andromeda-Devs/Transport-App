<!-- Patente Field -->
<div class="form-group">
    {!! Form::label('patente', __('models/vehiculos.fields.patente').':') !!}
    <p>{{ $vehiculo->patente }}</p>
</div>

<!-- Tipovehiculo Id Field -->
<div class="form-group">
    {!! Form::label('TipoVehiculo_id', __('models/vehiculos.fields.TipoVehiculo_id').':') !!}
    <p>{{ $vehiculo->tipoVehiculo->nombre }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', __('models/vehiculos.fields.marca').':') !!}
    <p>{{ $vehiculo->marca }}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', __('models/vehiculos.fields.modelo').':') !!}
    <p>{{ $vehiculo->modelo }}</p>
</div>

<!-- Nro Chasis Field -->
<div class="form-group">
    {!! Form::label('nro_chasis', __('models/vehiculos.fields.nro_chasis').':') !!}
    <p>{{ $vehiculo->nro_chasis }}</p>
</div>

<!-- Nro Motor Field -->
<div class="form-group">
    {!! Form::label('nro_motor', __('models/vehiculos.fields.nro_motor').':') !!}
    <p>{{ $vehiculo->nro_motor }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/vehiculos.fields.activo').':') !!}
    <p>{{ ($vehiculo->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/vehiculos.fields.created_at').':') !!}
    <p>{{ $vehiculo->created_at }}</p>
</div> --}}

