<!-- Fecha Programada Field -->
<div class="form-group">
    {!! Form::label('fecha_programada', __('models/requerimientos.fields.fecha_programada').':') !!}
    <p>{{ is_null($requerimiento->fecha_programada) ? "N/A" : $requerimiento->fecha_programada->format('d-m-Y') }}</p>
</div>

<!-- Codigo Field -->
<div class="form-group">
    {!! Form::label('codigo', __('models/requerimientos.fields.codigo').':') !!}
    <p>{{ $requerimiento->id }}</p>
</div>

<!-- Nombre Cliente Field -->
<div class="form-group">
    {!! Form::label('nombre_cliente', __('models/requerimientos.fields.nombre_cliente').':') !!}
    <p>{{ $requerimiento->cliente->nombre }}</p>
</div>

<!-- Cantidad De Equipos Field -->
<div class="form-group">
    {!! Form::label('cantidad_de_equipos', __('models/requerimientos.fields.cantidad_de_equipos').':') !!}
    <p>{{ $requerimiento->cantidad_de_equipos }}</p>
</div>

<!-- Ducto Field -->
<div class="form-group">
    {!! Form::label('ducto', __('models/requerimientos.fields.ducto').':') !!}
    <p>{{ $requerimiento->ducto_rel->descripcion }}</p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    {!! Form::label('observaciones', __('models/requerimientos.fields.observaciones').':') !!}
    <p>{{ $requerimiento->observaciones }}</p>
</div>

<div class="form-group">
    {!! Form::label('programado', __('models/requerimientos.fields.programado').':') !!}
    @if ($requerimiento->programado)
        <i class="icon-check" style="color:green"></i>
    @else
        <i class="icon-close" style="color:red"></i>
    @endif

</div>

