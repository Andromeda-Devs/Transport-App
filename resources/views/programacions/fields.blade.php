<!-- Requerimiento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requerimiento_id', __('models/programacions.fields.requerimiento_id').':') !!}
    <br>
    {!! Form::select('requerimiento_id', $requerimientos, null, ['class' => 'form-control', 'id' => "requerimientos"]) !!}

</div>

<!-- Equipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo', __('models/programacions.fields.equipo').':') !!}
    {!! Form::select('equipo', $vehiculoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Acoplado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acoplado', __('models/programacions.fields.acoplado').':') !!}
    {!! Form::select('acoplado', $vehiculoItems, null, ['class' => 'form-control']) !!}
</div>


<!-- Conductor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conductor', __('models/programacions.fields.conductor').':') !!}
    <br>
    {!! Form::select('conductor', $funcionarioConductorItems, null, ['class' => 'form-control', 'id' => "funcionarioConductorItems"]) !!}
</div>

<!-- Auxiliar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auxiliar', __('models/programacions.fields.auxiliar').':') !!}
    <br>
    {!! Form::select('auxiliar', $funcionarioAuxiliarItems, null, ['class' => 'form-control', 'id' => "funcionarioAuxiliarItems"]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('programacions.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

@push('scripts')

<script>

    $('#acoplado').prepend(`<option value=""></option>`);
    $('#acoplado').val("").change()

   document.addEventListener("DOMContentLoaded", function(){

        tail.select("#requerimientos", {
            animate: true,
            multiple: false,
            search: true,
            placeholder: 'Buscar Requerimientos...',
            classNames: ['form-control', 'w-100']
        });

        tail.select("#funcionarioConductorItems", {
            animate: true,
            multiple: false,
            search: true,
            placeholder: 'Buscar Conductor...',
            classNames: ['form-control', 'w-100']
        });

        tail.select("#funcionarioAuxiliarItems", {
            animate: true,
            multiple: false,
            search: true,
            placeholder: 'Buscar Auxiliar...',
            classNames: ['form-control', 'w-100']
        });


    });
</script>
@endpush
