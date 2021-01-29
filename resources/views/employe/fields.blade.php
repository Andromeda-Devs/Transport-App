<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Correo') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Rut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rut', __('models/funcionarios.fields.rut').':') !!}
    {!! Form::text('rut', null, ['class' => 'form-control']) !!}
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

<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo', __('cargo').':') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employe.index') !!}" class="btn btn-default">Cancel</a>
</div>

