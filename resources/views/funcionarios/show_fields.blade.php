<!-- Rut Field -->
<div class="form-group">
    {!! Form::label('rut', __('models/funcionarios.fields.rut').':') !!}
    <p>{{ $funcionario->rut }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/funcionarios.fields.nombre').':') !!}
    <p>{{ $funcionario->nombre }}</p>
</div>

<!-- Nacionalidad Field -->
<div class="form-group">
    {!! Form::label('nacionalidad', __('models/funcionarios.fields.nacionalidad').':') !!}
    <p>{{ $funcionario->nacionalidad }}</p>
</div>

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', __('models/funcionarios.fields.sexo').':') !!}
    <p>{{ $funcionario->sexo }}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', __('models/funcionarios.fields.departamento').':') !!}
    <p>{{ $funcionario->departamento }}</p>
</div>

<!-- Cargo Id Field -->
<div class="form-group">
    {!! Form::label('cargo_id', __('models/funcionarios.fields.cargo_id').':') !!}
    <p>{{ $funcionario->cargo_id }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', __('models/funcionarios.fields.estado').':') !!}
    <p>{{ $funcionario->estado }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/funcionarios.fields.created_at').':') !!}
    <p>{{ $funcionario->created_at }}</p>
</div> --}}
