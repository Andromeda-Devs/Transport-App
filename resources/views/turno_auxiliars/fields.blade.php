{!! Form::model($turnoAuxiliar, ['route' => ['turnoAuxiliars.update', $turnoAuxiliar->id], 'method' => 'patch', 'files' => true]) !!}

<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', __('models/turnoAuxiliars.fields.turno').':') !!}
    {!! Form::text('turno', null, ['class' => 'form-control']) !!}
</div>

<!-- Auxiliar Id Select -->
@can('aprobar programacion')
<div class="form-group col-sm-6">
    {!! Form::label('auxiliar_id', __('models/turnoAuxiliars.fields.auxiliar_id').':') !!}
    {!! Form::select('auxiliar_id', $auxiliarItems, null, ['class' => 'form-control']) !!}
</div>
@endcan
<div class="form-group col-sm-6">
    {!! Form::label('auxiliar_id', __('models/turnoAuxiliars.fields.auxiliar_id').':') !!}
    {!! Form::text('auxiliar_name', $turnoAuxiliar->auxiliar->name, ['class' => 'form-control', 'disabled']) !!}
</div>

<!-- Viaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('viaje', __('models/turnoAuxiliars.fields.viaje').':') !!}
    {!! Form::text('viaje', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('auxiliar_id', __('models/turnoAuxiliars.fields.Aprobado_id').':') !!}
    {!! Form::text('Aprobado_name', $turnoAuxiliar->aprobado->name, ['class' => 'form-control', 'disabled']) !!}
</div>

<!-- Concentradora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concentradora', __('models/turnoAuxiliars.fields.concentradora').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('concentradora', 0) !!}
        {!! Form::checkbox('concentradora', '1', null) !!}
    </label>
</div>


<!-- Rechazado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rechazado', __('models/turnoAuxiliars.fields.rechazado').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('rechazado', 0) !!}
        {!! Form::checkbox('rechazado', '1', null) !!}
    </label>
</div>


{!! Form::hidden('Gtesh010') !!}
{!! Form::hidden('Gtesh011') !!}
{!! Form::hidden('Gtesh012') !!}
{!! Form::hidden('Gtesh018') !!}

<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoAuxiliars-table">
        <thead>
            <tr>
                <th>#</th>
                <th>DOCUMENTO</th>
                <th>ACCIONES</th>
                <th>CUMPLE (Si/No)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh010))
                        {{ $documentos[9]->nombre }}.
                    @else
                        {{ $documentos[9]->nombre }}.
                        <a download="Gtesh010_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh010)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh010 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh010Name', ['id' => 'inputGtesh010', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh010', 0) !!}
                        {!! Form::checkbox('cumpleGtesh010', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh011))
                        {{ $documentos[10]->nombre }}.
                    @else
                        {{ $documentos[10]->nombre }}.
                        <a download="Gtesh011_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh011)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh011 }}">Descargar</a>
                        <span></span>
                    @endif
                <td>{!! Form::file('Gtesh011Name', ['id' => 'inputGtesh011', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh011', 0) !!}
                        {!! Form::checkbox('cumpleGtesh011', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh012))
                        {{ $documentos[11]->nombre }}.
                    @else
                        {{ $documentos[11]->nombre }}.
                        <a download="Gtesh012_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh012)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh012 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh012Name', ['id' => 'inputGtesh012', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh012', 0) !!}
                        {!! Form::checkbox('cumpleGtesh012', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh018))
                        {{ $documentos[17]->nombre }}.
                    @else
                        {{ $documentos[17]->nombre }}.
                        <a download="Gtesh018_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh018)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh018 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh018Name', ['id' => 'inputGtesh018', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh018', 0) !!}
                        {!! Form::checkbox('cumpleGtesh018', '1', null) !!}
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('turnoAuxiliars.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
{!! Form::close() !!}

<div class="col-12 d-flex justify-content-end">
    {!! Form::open(['route' => ['turnoAuxiliars.enviar', $turnoAuxiliar->id], 'method' => 'post']) !!}
        {!! Form::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary ml-2', 'onclick' => "return confirm('¿Está seguro de Enviarlo?')"]) !!}
    {!! Form::close() !!}
</div>

<script>

    let inputGtesh010 = document.getElementById('inputGtesh010');
    inputGtesh010.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh010')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh010')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh011 = document.getElementById('inputGtesh011');
    inputGtesh011.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh011')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh011')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh012 = document.getElementById('inputGtesh012');
    inputGtesh012.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh012')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh012')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh018 = document.getElementById('inputGtesh018');
    inputGtesh018.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh018')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh018')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })

</script>
