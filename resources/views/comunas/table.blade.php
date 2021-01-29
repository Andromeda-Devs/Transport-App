<div class="table-responsive-sm">
    <table class="table table-striped" id="comunas-table">
        <thead>
            <tr>
                <th>@lang('models/comunas.fields.nombre')</th>
        <th>@lang('models/comunas.fields.ciudad_id')</th>
        <th>@lang('models/comunas.fields.activo')</th>
        {{-- <th>@lang('models/comunas.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comunas as $comuna)
            <tr>
                <td>{{ $comuna->nombre }}</td>
            <td>{{ $comuna->ciudad->nombre }}</td>
            <td>{{ ($comuna->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $comuna->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['comunas.destroy', $comuna->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comunas.show', [$comuna->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('comunas.edit', [$comuna->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>