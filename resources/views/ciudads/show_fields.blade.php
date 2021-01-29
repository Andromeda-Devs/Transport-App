<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/ciudads.fields.nombre').':') !!}
    <p>{{ $ciudad->nombre }}</p>
</div>

<!-- Region Id Field -->
<div class="form-group">
    {!! Form::label('region_id', __('models/ciudads.fields.region_id').':') !!}
    <p>{{ $ciudad->region->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/ciudads.fields.activo').':') !!}
    <p>{{ ($ciudad->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/ciudads.fields.created_at').':') !!}
    <p>{{ $ciudad->created_at }}</p>
</div> --}}

