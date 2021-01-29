<!-- Nro Guia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nro_guia', __('models/trasporteAguas.fields.nro_guia').':') !!}
    {!! Form::text('nro_guia', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', __('models/trasporteAguas.fields.fecha_inicio').':') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_inicio').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Odometro Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('odometro_inicio', __('models/trasporteAguas.fields.odometro_inicio').':') !!}
    {!! Form::text('odometro_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Lts Combustible Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lts_combustible', __('models/trasporteAguas.fields.lts_combustible').':') !!}
    {!! Form::text('lts_combustible', null, ['class' => 'form-control']) !!}
</div>

<!-- Medidor Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidor_inicio', __('models/trasporteAguas.fields.medidor_inicio').':') !!}
    {!! Form::text('medidor_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Medidor Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidor_final', __('models/trasporteAguas.fields.medidor_final').':') !!}
    {!! Form::text('medidor_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Cloro Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_cloro_inicio', __('models/trasporteAguas.fields.nivel_cloro_inicio').':') !!}
    {!! Form::text('nivel_cloro_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Conductor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conductor', __('models/trasporteAguas.fields.conductor').':') !!}
    {!! Form::select('conductor', $funcionarioItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Auxiliar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auxiliar', __('models/trasporteAguas.fields.auxiliar').':') !!}
    {!! Form::select('auxiliar', $funcionarioItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Origen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origen', __('models/trasporteAguas.fields.origen').':') !!}
    {!! Form::select('origen', $ductoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destino', __('models/trasporteAguas.fields.destino').':') !!}
    {!! Form::select('destino', $ductoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Camion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('camion', __('models/trasporteAguas.fields.camion').':') !!}
    {!! Form::select('camion', $vehiculoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Acoplado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acoplado', __('models/trasporteAguas.fields.acoplado').':') !!}
    {!! Form::select('acoplado', $vehiculoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_final', __('models/trasporteAguas.fields.fecha_final').':') !!}
    {!! Form::text('fecha_final', null, ['class' => 'form-control','id'=>'fecha_final']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_final').datetimepicker({
               format: 'DD-MM-YYYY',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Odometro Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('odometro_final', __('models/trasporteAguas.fields.odometro_final').':') !!}
    {!! Form::text('odometro_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Cloro Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_cloro_final', __('models/trasporteAguas.fields.nivel_cloro_final').':') !!}
    {!! Form::text('nivel_cloro_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Desviacion Observacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desviacion_observacion', __('models/trasporteAguas.fields.desviacion_observacion').':') !!}
    {!! Form::textarea('desviacion_observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Medidas Adoptadas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('medidas_adoptadas', __('models/trasporteAguas.fields.medidas_adoptadas').':') !!}
    {!! Form::textarea('medidas_adoptadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trasporteAguas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
