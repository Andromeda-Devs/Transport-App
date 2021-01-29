<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/departamentos.fields.nombre').':') !!}
    <p>{{ $departamento->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/departamentos.fields.activo').':') !!}
    <p>{{ ($departamento->activo == 1 ? "SI" : "NO") }}</p>
</div>
