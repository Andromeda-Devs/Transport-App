<div class="table-responsive-sm">
    <table class="table table-striped" id="departamentos-table">
        <thead>
            <tr>
                <th>@lang('models/departamentos.fields.nombre')</th>
        <th>@lang('models/departamentos.fields.activo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->nombre }}</td>
            <td>{{ ($departamento->activo == 1 ? "SI" : "NO") }}</td>
                <td>
                    {!! Form::open(['route' => ['departamentos.destroy', $departamento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departamentos.show', [$departamento->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('departamentos.edit', [$departamento->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>