<!-- Nro Guia Field -->
<div class="form-group">
    {!! Form::label('nro_guia', __('models/trasporteAguas.fields.nro_guia').':') !!}
    <p>{{ $trasporteAgua->nro_guia }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', __('models/trasporteAguas.fields.fecha_inicio').':') !!}
    <p>{{ $trasporteAgua->fecha_inicio }}</p>
</div>

<!-- Conductor Field -->
<div class="form-group">
    {!! Form::label('conductor', __('models/trasporteAguas.fields.conductor').':') !!}
    <p>{{ $trasporteAgua->conductor }}</p>
</div>

<!-- Auxiliar Field -->
<div class="form-group">
    {!! Form::label('auxiliar', __('models/trasporteAguas.fields.auxiliar').':') !!}
    <p>{{ $trasporteAgua->auxiliar }}</p>
</div>

<!-- Origen Field -->
<div class="form-group">
    {!! Form::label('origen', __('models/trasporteAguas.fields.origen').':') !!}
    <p>{{ $trasporteAgua->origen }}</p>
</div>

<!-- Destino Field -->
<div class="form-group">
    {!! Form::label('destino', __('models/trasporteAguas.fields.destino').':') !!}
    <p>{{ $trasporteAgua->destino }}</p>
</div>

<!-- Camion Field -->
<div class="form-group">
    {!! Form::label('camion', __('models/trasporteAguas.fields.camion').':') !!}
    <p>{{ $trasporteAgua->camion }}</p>
</div>

<!-- Acoplado Field -->
<div class="form-group">
    {!! Form::label('acoplado', __('models/trasporteAguas.fields.acoplado').':') !!}
    <p>{{ $trasporteAgua->acoplado }}</p>
</div>

<!-- Fecha Final Field -->
<div class="form-group">
    {!! Form::label('fecha_final', __('models/trasporteAguas.fields.fecha_final').':') !!}
    <p>{{ $trasporteAgua->fecha_final }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/trasporteAguas.fields.created_at').':') !!}
    <p>{{ $trasporteAgua->created_at }}</p>
</div> --}}

