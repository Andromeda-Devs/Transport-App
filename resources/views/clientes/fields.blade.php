<!-- Rut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rut', __('models/clientes.fields.rut').':') !!}
    {!! Form::text('rut', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', __('models/clientes.fields.nombre').':') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Giro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giro', __('models/clientes.fields.giro').':') !!}
    {!! Form::text('giro', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad_id', __('models/clientes.fields.ciudad_id').':') !!}
    {!! Form::select('ciudad_id', $ciudadItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', __('models/clientes.fields.direccion').':') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', __('models/clientes.fields.telefono').':') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/clientes.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_contacto', __('models/clientes.fields.nombre_contacto').':') !!}
    {!! Form::text('nombre_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_contacto', __('models/clientes.fields.telefono_contacto').':') !!}
    {!! Form::text('telefono_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contacto', __('models/clientes.fields.email_contacto').':') !!}
    {!! Form::email('email_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', __('models/clientes.fields.activo').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('activo', 0) !!}
        {!! Form::checkbox('activo', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
