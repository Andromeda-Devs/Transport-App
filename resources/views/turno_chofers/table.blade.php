<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoChofers-table">
        <thead>
            <tr>
                {{-- <th>@lang('models/turnoChofers.fields.created_at')</th> --}}
                <th>@lang('models/turnoChofers.fields.turno')</th>
                <th>@lang('models/turnoChofers.fields.chofer_id')</th>
                <th>@lang('models/turnoChofers.fields.viaje')</th>
                <th>@lang('models/turnoChofers.fields.Aprobado_id')</th>
                <th>@lang('models/turnoChofers.fields.concentradora')</th>
                <th>@lang('models/turnoChofers.fields.rechazado')</th>
                <th>@lang('models/turnoChofers.fields.motivo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($turnoChofers as $turnoChofer)
            <tr>
                {{-- <td>{{ date('d-m-Y', strtotime($turnoChofer->created_at)) }}</td> --}}
                <td>{{ $turnoChofer->turno }}</td>
                <td>{{ (is_null($turnoChofer->chofer_id) ? "N/A" :  $turnoChofer->chofer->name) }}</td>
                <td>{{ $turnoChofer->viaje }}</td>
                <td>{{ (is_null($turnoChofer->Aprobado_id) ? "N/A" :  $turnoChofer->aprobado->name) }}</td>
                <td>{{ $turnoChofer->concentradora }}</td>
                <td>{{ $turnoChofer->rechazado }}</td>
                <td>{{ $turnoChofer->motivo }}</td>
                <td>
                    {!! Form::open(['route' => ['turnoChofers.destroy', $turnoChofer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('turnoChofers.show', [$turnoChofer->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ route('turnoChofers.edit', [$turnoChofer->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>