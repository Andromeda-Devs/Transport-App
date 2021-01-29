<div class="table-responsive-sm">
    <table class="table table-striped" id="ciudads-table">
        <thead>
            <tr>
                <th>@lang('models/ciudads.fields.nombre')</th>
        <th>@lang('models/ciudads.fields.region_id')</th>
        <th>@lang('models/ciudads.fields.activo')</th>
        {{-- <th>@lang('models/ciudads.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ciudads as $ciudad)
            <tr>
                <td>{{ $ciudad->nombre }}</td>
            <td>{{ $ciudad->region->nombre }}</td>
            <td>{{ ($ciudad->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $ciudad->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['ciudads.destroy', $ciudad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ciudads.show', [$ciudad->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ciudads.edit', [$ciudad->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>