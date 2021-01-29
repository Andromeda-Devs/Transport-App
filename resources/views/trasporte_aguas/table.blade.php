<div class="table-responsive-sm">
    <table class="table table-striped" id="trasporteAguas-table">
        <thead>
            <tr>
                <th>@lang('models/trasporteAguas.fields.nro_guia')</th>
        <th>@lang('models/trasporteAguas.fields.fecha_inicio')</th>
        <th>@lang('models/trasporteAguas.fields.conductor')</th>
        <th>@lang('models/trasporteAguas.fields.auxiliar')</th>
        <th>@lang('models/trasporteAguas.fields.origen')</th>
        <th>@lang('models/trasporteAguas.fields.destino')</th>
        <th>@lang('models/trasporteAguas.fields.camion')</th>
        <th>@lang('models/trasporteAguas.fields.acoplado')</th>
        <th>@lang('models/trasporteAguas.fields.fecha_final')</th>
        {{-- <th>@lang('models/trasporteAguas.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trasporteAguas as $trasporteAgua)
            <tr>
                <td>{{ $trasporteAgua->nro_guia }}</td>
            <td>{{ $trasporteAgua->fecha_inicio }}</td>
            <td>{{ $trasporteAgua->conductor }}</td>
            <td>{{ $trasporteAgua->auxiliar }}</td>
            <td>{{ $trasporteAgua->origen }}</td>
            <td>{{ $trasporteAgua->destino }}</td>
            <td>{{ $trasporteAgua->camion }}</td>
            <td>{{ $trasporteAgua->acoplado }}</td>
            <td>{{ $trasporteAgua->fecha_final }}</td>
            {{-- <td>{{ $trasporteAgua->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['trasporteAguas.destroy', $trasporteAgua->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trasporteAguas.show', [$trasporteAgua->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('trasporteAguas.edit', [$trasporteAgua->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>