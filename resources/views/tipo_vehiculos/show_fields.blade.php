<!-- Id Field -->
{{-- <div class="form-group">
    {!! Form::label('id', __('models/tipoVehiculos.fields.id').':') !!}
    <p>{{ $tipoVehiculo->id }}</p>
</div> --}}

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/tipoVehiculos.fields.nombre').':') !!}
    <p>{{ $tipoVehiculo->nombre }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/tipoVehiculos.fields.activo').':') !!}
    <p>{{ ($tipoVehiculo->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/tipoVehiculos.fields.created_at').':') !!}
    <p>{{ $tipoVehiculo->created_at }}</p>
</div> --}}

