<div class="table-responsive-sm">
    <table class="table table-striped" id="vehiculos-table">
        <thead>
            <tr>
                <th>@lang('models/vehiculos.fields.patente')</th>
        <th>@lang('models/vehiculos.fields.TipoVehiculo_id')</th>
        <th>@lang('models/vehiculos.fields.marca')</th>
        <th>@lang('models/vehiculos.fields.modelo')</th>
        <th>@lang('models/vehiculos.fields.nro_chasis')</th>
        <th>@lang('models/vehiculos.fields.nro_motor')</th>
        <th>@lang('models/vehiculos.fields.activo')</th>
        {{-- <th>@lang('models/vehiculos.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->patente }}</td>
            <td>{{ $vehiculo->tipoVehiculo->nombre }}</td>
            <td>{{ $vehiculo->marca }}</td>
            <td>{{ $vehiculo->modelo }}</td>
            <td>{{ $vehiculo->nro_chasis }}</td>
            <td>{{ $vehiculo->nro_motor }}</td>
            <td>{{ ($vehiculo->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $vehiculo->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['vehiculos.destroy', $vehiculo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehiculos.show', [$vehiculo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('vehiculos.edit', [$vehiculo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>