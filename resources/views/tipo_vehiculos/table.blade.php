<div class="table-responsive-sm">
    <table class="table table-striped" id="tipoVehiculos-table">
        <thead>
            <tr>
                {{-- <th>@lang('models/tipoVehiculos.fields.id')</th> --}}
        <th>@lang('models/tipoVehiculos.fields.nombre')</th>
        <th>@lang('models/tipoVehiculos.fields.activo')</th>
        {{-- <th>@lang('models/tipoVehiculos.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoVehiculos as $tipoVehiculo)
            <tr>
                {{-- <td>{{ $tipoVehiculo->id }}</td> --}}
            <td>{{ $tipoVehiculo->nombre }}</td>
            <td>{{ ($tipoVehiculo->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $tipoVehiculo->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['tipoVehiculos.destroy', $tipoVehiculo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoVehiculos.show', [$tipoVehiculo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('tipoVehiculos.edit', [$tipoVehiculo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>