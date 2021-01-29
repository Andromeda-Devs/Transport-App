{!! Form::model($turnoChofer, ['route' => ['turnoChofers.update', $turnoChofer->id], 'method' => 'patch', 'files' => true]) !!}

<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', __('models/turnoChofers.fields.turno').':') !!}
    {!! Form::text('turno', null, ['class' => 'form-control']) !!}
</div>

<!-- Chofer Id Select -->
@hasanyrole('jefe operaciones|admin')
<div class="form-group col-sm-6">
    {!! Form::label('chofer_id', __('models/turnoChofers.fields.chofer_id').':') !!}
    {!! Form::select('chofer_id', $conductorItems, null, ['class' => 'form-control']) !!}
</div>
@endhasanyrole

<!-- Chofer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chofer_id', __('models/turnoChofers.fields.chofer_id').':') !!}
    {!! Form::text('chofer_name', $turnoChofer->chofer->name, ['class' => 'form-control', 'disabled']) !!}
</div>

<!-- Viaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('viaje', __('models/turnoChofers.fields.viaje').':') !!}
    {!! Form::text('viaje', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('auxiliar_id', __('models/turnoChofers.fields.Aprobado_id').':') !!}
    {!! Form::text('Aprobado_name', $turnoChofer->aprobado->name, ['class' => 'form-control', 'disabled']) !!}
</div>

<!-- Concentradora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concentradora', __('models/turnoChofers.fields.concentradora').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('concentradora', 0) !!}
        {!! Form::checkbox('concentradora', '1', null) !!}
    </label>
</div>


<!-- Rechazado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rechazado', __('models/turnoChofers.fields.rechazado').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('rechazado', 0) !!}
        {!! Form::checkbox('rechazado', '1', null) !!}
    </label>
</div>


<!-- Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motivo', __('models/turnoChofers.fields.motivo').':') !!}
    {!! Form::textarea('motivo', null, ['class' => 'form-control','maxlength' => 200]) !!}
</div>

{{-- <!-- Gtesh001 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gtesh001_id', __('models/turnoChofers.fields.Gtesh001_id').':') !!}
    {!! Form::number('Gtesh001_id', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="clearfix"></div>

{!! Form::hidden('Gtesh001') !!}
{!! Form::hidden('Gtesh002') !!}
{!! Form::hidden('Gtesh003') !!}
{!! Form::hidden('Gtesh004') !!}
{!! Form::hidden('Gtesh005') !!}
{!! Form::hidden('Gtesh006') !!}
{!! Form::hidden('Gtesh007') !!}
{!! Form::hidden('Gtesh008') !!}
{!! Form::hidden('Gtesh010') !!}
{!! Form::hidden('Gtesh012') !!}
{!! Form::hidden('Gtesh013') !!}
{!! Form::hidden('Gtesh016') !!}
{!! Form::hidden('Gtesh018') !!}

<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoChofers-table">
        <thead>
            <tr>
                <th>#</th>
                <th style="width: 300px;">DOCUMENTO</th>
                <th>ACCIONES</th>
                <th>CUMPLE (Si/No)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh001))
                        {{ $documentos[0]->nombre }}.
                    @else
                        {{ $documentos[0]->nombre }}.
                        <a download="Gtesh001_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh001)[1])[0]  }}" href="{{ $turnoChofer->Gtesh001 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>
                    {!! Form::file('Gtesh001Name', ['id' => 'inputGtesh001', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}
                    <a class="btn btn-primary" href="{{ route('gtesh001s.edit', [$programacion->gtesh001->id]) }}" role="button">Llenar</a>
                </td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh001', 0) !!}
                            {!! Form::checkbox('cumpleGtesh001', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh002))
                        {{ $documentos[1]->nombre }}.
                    @else
                        {{ $documentos[1]->nombre }}.
                        <a download="Gtesh002_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh002)[1])[0]  }}" href="{{ $turnoChofer->Gtesh002 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh002Name', ['id' => 'inputGtesh002', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh002', 0) !!}
                            {!! Form::checkbox('cumpleGtesh002', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh003))
                        {{ $documentos[2]->nombre }}.
                    @else
                        {{ $documentos[2]->nombre }}.
                        <a download="Gtesh003_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh003)[1])[0]  }}" href="{{ $turnoChofer->Gtesh003 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh003Name', ['id' => 'inputGtesh003', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh003', 0) !!}
                            {!! Form::checkbox('cumpleGtesh003', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh004))
                        {{ $documentos[3]->nombre }}.
                    @else
                        {{ $documentos[3]->nombre }}.
                        <a download="Gtesh004_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh004)[1])[0]  }}" href="{{ $turnoChofer->Gtesh004 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh004Name', ['id' => 'inputGtesh004', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh004', 0) !!}
                            {!! Form::checkbox('cumpleGtesh004', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh005))
                        {{ $documentos[4]->nombre }}.
                    @else
                        {{ $documentos[4]->nombre }}.
                        <a download="Gtesh005_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh005)[1])[0]  }}" href="{{ $turnoChofer->Gtesh005 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh005Name', ['id' => 'inputGtesh005', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh005', 0) !!}
                            {!! Form::checkbox('cumpleGtesh005', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh006))
                        {{ $documentos[5]->nombre }}.
                    @else
                        {{ $documentos[5]->nombre }}.
                        <a download="Gtesh006_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh006)[1])[0]  }}" href="{{ $turnoChofer->Gtesh006 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh006Name', ['id' => 'inputGtesh006', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh006', 0) !!}
                            {!! Form::checkbox('cumpleGtesh006', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh007))
                        {{ $documentos[6]->nombre }}.
                    @else
                        {{ $documentos[6]->nombre }}.
                        <a download="Gtesh007_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh007)[1])[0]  }}" href="{{ $turnoChofer->Gtesh007 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh007Name', ['id' => 'inputGtesh007', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh007', 0) !!}
                            {!! Form::checkbox('cumpleGtesh007', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh008))
                        {{ $documentos[7]->nombre }}.
                    @else
                        {{ $documentos[7]->nombre }}.
                        <a download="Gtesh008_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh008)[1])[0]  }}" href="{{ $turnoChofer->Gtesh008 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh008Name', ['id' => 'inputGtesh008', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh008', 0) !!}
                            {!! Form::checkbox('cumpleGtesh008', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh010))
                        {{ $documentos[9]->nombre }}.
                    @else
                        {{ $documentos[9]->nombre }}.
                        <a download="Gtesh010_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh010)[1])[0]  }}" href="{{ $turnoChofer->Gtesh010 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh010Name', ['id' => 'inputGtesh010', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh010', 0) !!}
                            {!! Form::checkbox('cumpleGtesh010', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh012))
                        {{ $documentos[11]->nombre }}.
                    @else
                        {{ $documentos[11]->nombre }}.
                        <a download="Gtesh012_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh012)[1])[0]  }}" href="{{ $turnoChofer->Gtesh012 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh012Name', ['id' => 'inputGtesh012', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh012', 0) !!}
                            {!! Form::checkbox('cumpleGtesh012', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh013))
                        {{ $documentos[12]->nombre }}.
                    @else
                        {{ $documentos[12]->nombre }}.
                        <a download="Gtesh013_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh013)[1])[0]  }}" href="{{ $turnoChofer->Gtesh013 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh013Name', ['id' => 'inputGtesh013', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh013', 0) !!}
                            {!! Form::checkbox('cumpleGtesh013', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>12</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh016))
                        {{ $documentos[15]->nombre }}.
                    @else
                        {{ $documentos[15]->nombre }}.
                        <a download="Gtesh016_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh016)[1])[0]  }}" href="{{ $turnoChofer->Gtesh016 }}">Descargar</a>
                        <span></span>
                    @endif
                <td>{!! Form::file('Gtesh016Name', ['id' => 'inputGtesh016', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh016', 0) !!}
                            {!! Form::checkbox('cumpleGtesh016', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>13</td>
                <td>
                    @if (is_null($turnoChofer->Gtesh018))
                        {{ $documentos[17]->nombre }}.
                    @else
                        {{ $documentos[17]->nombre }}.
                        <a download="Gtesh018_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh018)[1])[0]  }}" href="{{ $turnoChofer->Gtesh018 }}">Descargar</a>
                        <span></span>
                    @endif
                </td>
                <td>{!! Form::file('Gtesh018Name', ['id' => 'inputGtesh018', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}</td>
                <td>
                    @if (auth()->user()->hasRole('conductor'))
                        <i class="nav-icon fa fa-check-square"></i>
                    @else
                        <label class="checkbox-inline">
                            {!! Form::hidden('cumpleGtesh018', 0) !!}
                            {!! Form::checkbox('cumpleGtesh018', '1', null) !!}
                        </label>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let inputGtesh001 = document.getElementById('inputGtesh001');
    inputGtesh001.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh001')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh001')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh002 = document.getElementById('inputGtesh002');
    inputGtesh002.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh002')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh002')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh003 = document.getElementById('inputGtesh003');
    inputGtesh003.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh003')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh003')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh004 = document.getElementById('inputGtesh004');
    inputGtesh004.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh004')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh004')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh005 = document.getElementById('inputGtesh005');
    inputGtesh005.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh005')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh005')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh006 = document.getElementById('inputGtesh006');
    inputGtesh006.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh006')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh006')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh007 = document.getElementById('inputGtesh007');
    inputGtesh007.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh007')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh007')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh008 = document.getElementById('inputGtesh008');
    inputGtesh008.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh008')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh008')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
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
    
    let inputGtesh013 = document.getElementById('inputGtesh013');
    inputGtesh013.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh013')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh013')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
    
    let inputGtesh016 = document.getElementById('inputGtesh016');
    inputGtesh016.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('Gtesh016')[0].value = reader.result
                console.log(document.getElementsByName('Gtesh016')[0].value)
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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('turnoChofers.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
{!! Form::close() !!}

<div class="col-12 d-flex justify-content-end">
    {!! Form::open(['route' => ['turnoChofers.enviar', $turnoChofer->id], 'method' => 'post']) !!}
        {!! Form::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary ml-2', 'onclick' => "return confirm('¿Está seguro de Enviarlo?')"]) !!}
    {!! Form::close() !!}
</div>
