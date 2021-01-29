<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', __('models/turnoSupervisors.fields.turno').':') !!}
    {!! Form::text('turno', null, ['class' => 'form-control']) !!}
</div>

<!-- Viaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('viaje', __('models/turnoSupervisors.fields.viaje').':') !!}
    {!! Form::text('viaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Chofer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chofer_id', __('models/turnoSupervisors.fields.chofer_id').':') !!}
    {!! Form::select('chofer_id', $conductorItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Chofer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chofer_id', __('models/turnoSupervisors.fields.chofer_id').':') !!}
    {!! Form::text('chofer_name', $turnoSupervisor->chofer->name, ['class' => 'form-control', 'disabled']) !!}
</div>

<!-- Auxiliar Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auxiliar_id', __('models/turnoSupervisors.fields.auxiliar_id').':') !!}
    {!! Form::select('auxiliar_id', $auxiliarItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Concentradora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concentradora', __('models/turnoSupervisors.fields.concentradora').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('concentradora', 0) !!}
        {!! Form::checkbox('concentradora', '1', null) !!}
    </label>
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', __('models/turnoSupervisors.fields.notas').':') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control','maxlength' => 200]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('turnoSupervisors.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
