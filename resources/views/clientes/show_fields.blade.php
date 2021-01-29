<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/clientes.fields.id').':') !!}
    <p>{{ $cliente->id }}</p>
</div>

<!-- Rut Field -->
<div class="form-group">
    {!! Form::label('rut', __('models/clientes.fields.rut').':') !!}
    <p>{{ $cliente->rut }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/clientes.fields.nombre').':') !!}
    <p>{{ $cliente->nombre }}</p>
</div>

<!-- Giro Field -->
<div class="form-group">
    {!! Form::label('giro', __('models/clientes.fields.giro').':') !!}
    <p>{{ $cliente->giro }}</p>
</div>

<!-- Ciudad Id Field -->
<div class="form-group">
    {!! Form::label('ciudad_id', __('models/clientes.fields.ciudad_id').':') !!}
    <p>{{ $cliente->ciudad->nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', __('models/clientes.fields.direccion').':') !!}
    <p>{{ $cliente->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', __('models/clientes.fields.telefono').':') !!}
    <p>{{ $cliente->telefono }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/clientes.fields.email').':') !!}
    <p>{{ $cliente->email }}</p>
</div>

<!-- Nombre Contacto Field -->
<div class="form-group">
    {!! Form::label('nombre_contacto', __('models/clientes.fields.nombre_contacto').':') !!}
    <p>{{ $cliente->nombre_contacto }}</p>
</div>

<!-- Telefono Contacto Field -->
<div class="form-group">
    {!! Form::label('telefono_contacto', __('models/clientes.fields.telefono_contacto').':') !!}
    <p>{{ $cliente->telefono_contacto }}</p>
</div>

<!-- Email Contacto Field -->
<div class="form-group">
    {!! Form::label('email_contacto', __('models/clientes.fields.email_contacto').':') !!}
    <p>{{ $cliente->email_contacto }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/clientes.fields.activo').':') !!}
    <p>{{ ($cliente->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/clientes.fields.created_at').':') !!}
    <p>{{ $cliente->created_at }}</p>
</div> --}}

