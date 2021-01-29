<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', __('models/turnoSupervisors.fields.turno').':') !!}
    {!! Form::text('turno', null, ['class' => 'form-control', 'disabled' => true]) !!}
</div>

<!-- Viaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('viaje', __('models/turnoSupervisors.fields.viaje').':') !!}
    {!! Form::text('viaje', null, ['class' => 'form-control', 'disabled' => true]) !!}
</div>

<!-- Chofer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chofer_id', __('models/turnoSupervisors.fields.chofer_id').':') !!}
    {!! Form::text('chofer_name', $turnoSupervisor->chofer->name, ['class' => 'form-control', 'disabled' => true]) !!}
</div>

<!-- Auxiliar Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auxiliar_id', __('models/turnoSupervisors.fields.auxiliar_id').':') !!}
    {!! Form::text('chofer_name', $turnoSupervisor->chofer->name, ['class' => 'form-control', 'disabled' => true]) !!}
</div>

<!-- Concentradora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concentradora', __('models/turnoSupervisors.fields.concentradora').':') !!}
    <label class="checkbox-inline">
        <p>{{ (($turnoSupervisor->concentradora) ? "SI" : "NO") }}</p>
    </label>
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', __('models/turnoSupervisors.fields.notas').':') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control','maxlength' => 200, 'disabled' => true]) !!}
</div>

{!! Form::model($turnoChofer, ['route' => ['turnoSupervisors.update', $turnoChofer->id], 'method' => 'patch']) !!}
@if ($turnoChofer->enviado)
<h4>TURNO DEL CHOFER</h4>
<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoChofers-table">
        <thead>
            <tr>
                <th>#</th>
                <th>NOMBRE</th>
                <th>DOCUMENTO</th>
                <th>CUMPLE (Si/No)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh001')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh001))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh001_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh001)[1])[0]  }}" href="{{ $turnoChofer->Gtesh001 }}">DESCARGAR</a>
                    @endif
                    <a class="btn btn-primary" href="{{ route('turnoSupervisors.document1', [$programacion->gtesh001->id]) }}" role="button">Ver</a>
                    <a class="btn btn-primary" href="{{ URL::to('turnoSupervisors/document1/' . $programacion->gtesh001->id . '/download') }}">Descargar</a>
                </td>
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh001', 0) !!}
                        {!! Form::checkbox('cumpleGtesh001', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh002')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh002))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh002_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh002)[1])[0]  }}" href="{{ $turnoChofer->Gtesh002 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh002', 0) !!}
                        {!! Form::checkbox('cumpleGtesh002', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh003')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh003))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh003_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh003)[1])[0]  }}" href="{{ $turnoChofer->Gtesh003 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh003', 0) !!}
                        {!! Form::checkbox('cumpleGtesh003', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh004')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh004))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh004_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh004)[1])[0]  }}" href="{{ $turnoChofer->Gtesh004 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh004', 0) !!}
                        {!! Form::checkbox('cumpleGtesh004', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh005')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh005))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh005_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh005)[1])[0]  }}" href="{{ $turnoChofer->Gtesh005 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh005', 0) !!}
                        {!! Form::checkbox('cumpleGtesh005', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh006')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh006))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh006_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh006)[1])[0]  }}" href="{{ $turnoChofer->Gtesh006 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh006', 0) !!}
                        {!! Form::checkbox('cumpleGtesh006', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh007')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh007))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh007_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh007)[1])[0]  }}" href="{{ $turnoChofer->Gtesh007 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh007', 0) !!}
                        {!! Form::checkbox('cumpleGtesh007', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh008')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh008))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh008_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh008)[1])[0]  }}" href="{{ $turnoChofer->Gtesh008 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh008', 0) !!}
                        {!! Form::checkbox('cumpleGtesh008', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh010')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh010))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh010_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh010)[1])[0]  }}" href="{{ $turnoChofer->Gtesh010 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh010', 0) !!}
                        {!! Form::checkbox('cumpleGtesh010', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh012')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh012))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh012_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh012)[1])[0]  }}" href="{{ $turnoChofer->Gtesh012 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh012', 0) !!}
                        {!! Form::checkbox('cumpleGtesh012', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh013')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh013))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh013_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh013)[1])[0]  }}" href="{{ $turnoChofer->Gtesh013 }}">DESCARGAR</a>
                    @endif
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh013', 0) !!}
                        {!! Form::checkbox('cumpleGtesh013', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>12</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh016')
                <td>
                    @if (is_null($turnoChofer->Gtesh016))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh016_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh016)[1])[0]  }}" href="{{ $turnoChofer->Gtesh016 }}">DESCARGAR</a>
                    @endif
                </td>
                <td>
                    <label class="checkbox-inline">
                        {!! Form::hidden('cumpleGtesh016', 0) !!}
                        {!! Form::checkbox('cumpleGtesh016', '1', null) !!}
                    </label>
                </td>
            </tr>
            <tr>
                <td>13</td>
                <td>
                    @lang('models/turnoChofers.fields.Gtesh018')
                </td>
                <td>
                    @if (is_null($turnoChofer->Gtesh018))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh018_{{ $turnoChofer->chofer->name }}_{{ $turnoChofer->created_at }}.{{ explode(";",explode("/",$turnoChofer->Gtesh018)[1])[0]  }}" href="{{ $turnoChofer->Gtesh018 }}">DESCARGAR</a>
                    @endif
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
@endif
{!! Form::close() !!}

{!! Form::model($turnoAuxiliar, ['route' => ['turnoAuxiliars.update', $turnoAuxiliar->id], 'method' => 'patch']) !!}
@if ($turnoAuxiliar->enviado)
<h4>TURNO DEL AUXILIAR</h4>
<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoAuxiliars-table">
        <thead>
            <tr>
                <th>#</th>
                <th>NOMBRE</th>
                <th>DOCUMENTO</th>
                <th>CUMPLE (Si/No)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    @lang('models/turnoAuxiliars.fields.Gtesh010')
                </td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh010))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh010_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh010)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh010 }}">@lang('models/turnoAuxiliars.fields.Gtesh010')</a>
                    @endif
                </td>
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
                    @lang('models/turnoAuxiliars.fields.Gtesh011')
                </td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh011))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh011_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh011)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh011 }}">@lang('models/turnoAuxiliars.fields.Gtesh011')</a>
                    @endif
                </td>
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
                    @lang('models/turnoAuxiliars.fields.Gtesh012')
                </td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh012))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh012_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh012)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh012 }}">@lang('models/turnoAuxiliars.fields.Gtesh012')</a>
                    @endif
                </td>
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
                    @lang('models/turnoAuxiliars.fields.Gtesh018')
                </td>
                <td>
                    @if (is_null($turnoAuxiliar->Gtesh018))
                        NO ADJUNTO
                    @else
                        <a download="Gtesh018_{{ $turnoAuxiliar->auxiliar->name }}_{{ $turnoAuxiliar->created_at }}.{{ explode(";",explode("/",$turnoAuxiliar->Gtesh018)[1])[0]  }}" href="{{ $turnoAuxiliar->Gtesh018 }}">@lang('models/turnoAuxiliars.fields.Gtesh018')</a>
                    @endif
                </td>
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
@endif
{!! Form::close() !!}

<div class="form-group col-sm-12">
    {!! Form::open(['route' => ['turnoSupervisors.autorizar', $turnoSupervisor->id], 'method' => 'put', 'style' => 'display:inline;']) !!}
        {!! Form::button('Autorizar', ['type' => 'submit', 'class' => 'btn btn-primary ml-2', 'onclick' => "return confirm('¿Está seguro de Autorizarlo?')"]) !!}
    {!! Form::close() !!}
    {!! Form::open(['route' => ['turnoSupervisors.rechazar', $turnoSupervisor->id], 'method' => 'put', 'style' => 'display:inline;']) !!}
        {!! Form::button('Rechazar', ['type' => 'submit', 'class' => 'btn btn-danger ml-2', 'onclick' => "return confirm('¿Está seguro de Rechazarlo?')"]) !!}
    {!! Form::close() !!}
</div>

@push('scripts')
   <script type="text/javascript">
        $(':radio:not(:checked)').attr('disabled', true);
        $(':checkbox:not(:checked)').attr('disabled', true);
        $(':checkbox').attr("onclick", "javascript: return false;")
    </script>
@endpush