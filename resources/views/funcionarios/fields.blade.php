<!-- Rut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rut', __('models/funcionarios.fields.rut').':') !!}
    {!! Form::text('rut', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', __('models/funcionarios.fields.nombre').':') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad', __('models/funcionarios.fields.nacionalidad').':') !!}
    {!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sexo', __('models/funcionarios.fields.sexo').':') !!}
    <label class="radio-inline">
        {!! Form::radio('sexo', "1", null) !!} Masculino
    </label>

    <label class="radio-inline">
        {!! Form::radio('sexo', "0", null) !!} Femenino
    </label>

</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', __('models/funcionarios.fields.departamento').':') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo_id', __('models/funcionarios.fields.cargo_id').':') !!}
    {!! Form::select('cargo_id', $cargoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', __('models/funcionarios.fields.estado').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('funcionarios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
