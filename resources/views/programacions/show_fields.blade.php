<!-- Requerimiento Id Field -->
<div class="form-group">
    {!! Form::label('requerimiento_id', __('models/programacions.fields.requerimiento_id').':') !!}
    <p>{{ $programacion->requerimiento_id }}</p>
</div>

<!-- Equipo Field -->
<div class="form-group">
    {!! Form::label('equipo', __('models/programacions.fields.equipo').':') !!}
    <p>{{ $programacion->vehiculo->patente }}</p>
</div>

<!-- Acoplado Field -->
<div class="form-group">
    {!! Form::label('acoplado', __('models/programacions.fields.acoplado').':') !!}
    <p>{{ $programacion->acoplado_rel->patente }}</p>
</div>

<!-- Aprobado Field -->
<div class="form-group">
    {!! Form::label('aprobado', __('models/programacions.fields.aprobado').':') !!}
    <p>
        @if ($programacion->aprobado)
            <i class="icon-check text-green" style="color:green"></i>
        @else
            <i class="icon-close" style="color:red"></i>
        @endif
    </p>
</div>

<!-- Conductor Field -->
<div class="form-group">
    {!! Form::label('conductor', __('models/programacions.fields.conductor').':') !!}
    <p>{{ $programacion->conductor_rel->name }}</p>
</div>

<!-- Auxiliar Field -->
<div class="form-group">
    {!! Form::label('auxiliar', __('models/programacions.fields.auxiliar').':') !!}
    <p>{{ $programacion->auxiliar_rel->name }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/programacions.fields.created_at').':') !!}
    <p>{{ $programacion->created_at }}</p>
</div> --}}

