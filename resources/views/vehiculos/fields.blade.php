<!-- Patente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patente', __('models/vehiculos.fields.patente').':') !!}
    {!! Form::text('patente', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipovehiculo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoVehiculo_id', __('models/vehiculos.fields.TipoVehiculo_id').':') !!}
    {!! Form::select('TipoVehiculo_id', $tipo_vehiculoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', __('models/vehiculos.fields.marca').':') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', __('models/vehiculos.fields.modelo').':') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nro Chasis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nro_chasis', __('models/vehiculos.fields.nro_chasis').':') !!}
    {!! Form::text('nro_chasis', null, ['class' => 'form-control']) !!}
</div>

<!-- Nro Motor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nro_motor', __('models/vehiculos.fields.nro_motor').':') !!}
    {!! Form::text('nro_motor', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', __('models/vehiculos.fields.activo').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('activo', 0) !!}
        {!! Form::checkbox('activo', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('vehiculos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
