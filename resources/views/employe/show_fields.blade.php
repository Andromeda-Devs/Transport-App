<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $employe->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    <p>{!! $employe->email !!}</p>
</div>

<!-- Rut Field -->
<div class="form-group">
    {!! Form::label('rut', __('models/funcionarios.fields.rut').':') !!}
    <p>{{ $employe->rut }}</p>
</div>

<!-- Nacionalidad Field -->
<div class="form-group">
    {!! Form::label('nacionalidad', __('models/funcionarios.fields.nacionalidad').':') !!}
    <p>{{ $employe->nacionalidad }}</p>
</div>

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', __('models/funcionarios.fields.sexo').':') !!}
    <p>{{ $employe->sexo }}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', __('models/funcionarios.fields.departamento').':') !!}
    <p>{{ $employe->departamento }}</p>
</div>

<!-- Cargo Id Field -->
<div class="form-group">
    {!! Form::label('cargo_id', __('models/funcionarios.fields.cargo_id').':') !!}
    <p>{{ $employe->cargo_id }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', __('models/funcionarios.fields.estado').':') !!}
    <p>{{ $employe->estado }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/funcionarios.fields.created_at').':') !!}
    <p>{{ $employe->created_at }}</p>
</div> --}}

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{!! $employe->created_at !!}</p>
</div> --}}

<!-- Updated At Field -->
{{-- <div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{!! $employe->updated_at !!}</p>
</div> --}}

