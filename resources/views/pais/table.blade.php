<div class="table-responsive-sm">
    <table class="table table-striped" id="pais-table">
        <thead>
            <tr>
                <th>@lang('models/pais.fields.nombre')</th>
        <th>@lang('models/pais.fields.activo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pais as $pais)
            <tr>
                <td>{{ $pais->nombre }}</td>
            <td>{{ ($pais->activo == 1 ? "SI" : "NO") }}</td>
                <td>
                    {!! Form::open(['route' => ['pais.destroy', $pais->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pais.show', [$pais->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pais.edit', [$pais->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>