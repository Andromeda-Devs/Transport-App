<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/regions.fields.nombre').':') !!}
    <p>{{ $region->nombre }}</p>
</div>

<!-- Pais Field -->
<div class="form-group">
    {!! Form::label('pais', __('models/regions.fields.pais').':') !!}
    <p>{{ $region->paisRel->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/regions.fields.activo').':') !!}
    <p>{{ ($region->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/regions.fields.created_at').':') !!}
    <p>{{ $region->created_at }}</p>
</div> --}}

