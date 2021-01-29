<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', __('models/ductos.fields.descripcion').':') !!}
    <p>{{ $ducto->descripcion }}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', __('models/ductos.fields.tipo').':') !!}
    <p>{{ $ducto->tipo }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', __('models/ductos.fields.activo').':') !!}
    <p>{{ ($ducto->activo == 1 ? "SI" : "NO") }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/ductos.fields.created_at').':') !!}
    <p>{{ $ducto->created_at }}</p>
</div> --}}

