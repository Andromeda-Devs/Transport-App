<!-- Codigo Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('codigo', __('models/requerimientos.fields.codigo').':') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Nombre Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_cliente', __('models/requerimientos.fields.nombre_cliente').':') !!}
    <br>
    {!! Form::select('nombre_cliente', $clienteItems, null, ['class' => 'form-control', 'id' => "searchClient"]) !!}
</div>

<!-- Cantidad De Equipos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_de_equipos', __('models/requerimientos.fields.cantidad_de_equipos').':') !!}
    {!! Form::number('cantidad_de_equipos', null, ['class' => 'form-control','min' => 1]) !!}
</div>

<!-- Ducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ducto', __('models/requerimientos.fields.ducto').':') !!}
    {!! Form::select('ducto', $ductoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', __('models/requerimientos.fields.observaciones').':') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

@can('preparar programacion')
    <!-- Fecha Programada Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_programada', __('models/requerimientos.fields.fecha_programada').':') !!}
        {!! Form::text('fecha_programada', null, ['class' => 'form-control', 'id'=>'fecha_programada']) !!}
    </div>


@endcan

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('requerimientos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

@push('scripts')
    <script type="text/javascript">

            $('#fecha_programada').datetimepicker({
                format: 'DD-MM-YYYY',
                useCurrent: true,
                icons: {
                    up: "icon-arrow-up-circle icons font-2xl",
                    down: "icon-arrow-down-circle icons font-2xl"
                },
                date: new Date(),
                sideBySide: true
            })
        </script>
@endpush
@push('scripts')

<script>
   document.addEventListener("DOMContentLoaded", function(){

        tail.select("#searchClient", {
            animate: true,
            multiple: false,
            search: true,
            placeholder: 'Buscar Cliente...'
         });


    });
</script>
@endpush
