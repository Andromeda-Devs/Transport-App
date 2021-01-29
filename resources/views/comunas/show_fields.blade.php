<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/comunas.fields.nombre').':') !!}
    <p>{{ $comuna->nombre }}</p>
</div>

<!-- Ciudad Id Field -->
<div class="form-group">
    {!! Form::label('ciudad_id', __('models/comunas.fields.ciudad_id').':') !!}
    <p>{{ $comuna->ciudad->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/comunas.fields.activo').':') !!}
    <p>{{ ($comuna->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/comunas.fields.created_at').':') !!}
    <p>{{ $comuna->created_at }}</p>
</div> --}}

