<div class="table-responsive-sm">
    <table class="table table-striped" id="turnoSupervisors-table">
        <thead>
            <tr>
                {{-- <th>@lang('models/turnoSupervisors.fields.created_at')</th> --}}
                <th>@lang('models/turnoSupervisors.fields.turno')</th>
                <th>@lang('models/turnoSupervisors.fields.viaje')</th>
                <th>@lang('models/turnoSupervisors.fields.chofer_id')</th>
                <th>@lang('models/turnoSupervisors.fields.auxiliar_id')</th>
                <th>@lang('models/turnoSupervisors.fields.concentradora')</th>
                <th>@lang('models/turnoSupervisors.fields.notas')</th>
                <th>Autorización</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($turnoSupervisors as $turnoSupervisor)
            <tr>
                {{-- <td>{{ date('d-m-Y', strtotime($turnoSupervisor->created_at)) }}</td> --}}
                <td>{{ $turnoSupervisor->turno }}</td>
                <td>{{ $turnoSupervisor->viaje }}</td>
                <td>{{ (is_null($turnoSupervisor->chofer_id) ? "N/A" :  $turnoSupervisor->chofer->name) }}</td>
                <td>{{ (is_null($turnoSupervisor->auxiliar_id) ? "N/A" :  $turnoSupervisor->auxiliar->name) }}</td>
                <td>{{ $turnoSupervisor->concentradora }}</td>
                <td>{{ $turnoSupervisor->notas }}</td>
                <td>{{ ($turnoSupervisor->autorizado === 1 ? ('Autorizado') : (is_null($turnoSupervisor->autorizado) ? 'No aplicado' : 'Rechazado')) }}</td>
                <td>
                    {!! Form::open(['route' => ['turnoSupervisors.destroy', $turnoSupervisor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('turnoSupervisors.show', [$turnoSupervisor->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('turnoSupervisors.edit', [$turnoSupervisor->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>