<div class="table-responsive-sm">
    <table class="table table-striped" id="regions-table">
        <thead>
            <tr>
                <th>@lang('models/regions.fields.nombre')</th>
        <th>@lang('models/regions.fields.pais')</th>
        <th>@lang('models/regions.fields.activo')</th>
        {{-- <th>@lang('models/regions.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($regions as $region)
            <tr>
                <td>{{ $region->nombre }}</td>
            <td>{{ $region->paisRel->nombre }}</td>
            <td>{{ ($region->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $region->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['regions.destroy', $region->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('regions.show', [$region->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('regions.edit', [$region->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>