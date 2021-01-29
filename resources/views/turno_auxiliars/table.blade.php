<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoAuxiliars-table">
        <thead>
            <tr>
                {{-- <th>@lang('models/turnoAuxiliars.fields.created_at')</th> --}}
                <th>@lang('models/turnoAuxiliars.fields.turno')</th>
                <th>@lang('models/turnoAuxiliars.fields.auxiliar_id')</th>
                <th>@lang('models/turnoAuxiliars.fields.viaje')</th>
                <th>@lang('models/turnoAuxiliars.fields.Aprobado_id')</th>
                <th>@lang('models/turnoAuxiliars.fields.concentradora')</th>
                <th>@lang('models/turnoAuxiliars.fields.rechazado')</th>
                <th>@lang('models/turnoAuxiliars.fields.motivo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($turnoAuxiliars as $turnoAuxiliar)
            <tr>
                {{-- <td>{{ date('d-m-Y', strtotime($turnoAuxiliar->created_at)) }}</td> --}}
                <td>{{ $turnoAuxiliar->turno }}</td>
                <td>{{ (is_null($turnoAuxiliar->auxiliar_id) ? "N/A" :  $turnoAuxiliar->auxiliar->name) }}</td>
                <td>{{ $turnoAuxiliar->viaje }}</td>
                <td>{{ (is_null($turnoAuxiliar->Aprobado_id) ? "N/A" :  $turnoAuxiliar->aprobado->name) }}</td>
                <td>{{ $turnoAuxiliar->concentradora }}</td>
                <td>{{ $turnoAuxiliar->rechazado }}</td>
                <td>{{ $turnoAuxiliar->motivo }}</td>
                <td>
                    {!! Form::open(['route' => ['turnoAuxiliars.destroy', $turnoAuxiliar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('turnoAuxiliars.show', [$turnoAuxiliar->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ route('turnoAuxiliars.edit', [$turnoAuxiliar->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>