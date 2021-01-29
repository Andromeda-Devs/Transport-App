<div class="table-responsive-sm">
    <table class="table table-striped" id="cargos-table">
        <thead>
            <tr>
                <th>@lang('models/cargos.fields.nombre')</th>
        <th>@lang('models/cargos.fields.departamento')</th>
        <th>@lang('models/cargos.fields.activo')</th>
        {{-- <th>@lang('models/cargos.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cargos as $cargo)
            <tr>
                <td>{{ $cargo->nombre }}</td>
            <td>{{ $cargo->departamento }}</td>
            <td>{{ ($cargo->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $cargo->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['cargos.destroy', $cargo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cargos.show', [$cargo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cargos.edit', [$cargo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>