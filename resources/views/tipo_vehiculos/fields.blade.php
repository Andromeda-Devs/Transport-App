<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', __('models/tipoVehiculos.fields.nombre').':') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', __('models/tipoVehiculos.fields.activo').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('activo', 0) !!}
        {!! Form::checkbox('activo', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoVehiculos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
