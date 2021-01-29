<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/cargos.fields.nombre').':') !!}
    <p>{{ $cargo->nombre }}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', __('models/cargos.fields.departamento').':') !!}
    <p>{{ $cargo->departamento }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/cargos.fields.activo').':') !!}
    <p>{{ ($cargo->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/cargos.fields.created_at').':') !!}
    <p>{{ $cargo->created_at }}</p>
</div> --}}

