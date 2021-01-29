<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/pais.fields.nombre').':') !!}
    <p>{{ $pais->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/pais.fields.activo').':') !!}
    <p>{{ ($pais->activo == 1 ? "SI" : "NO") }}</p>
</div>
