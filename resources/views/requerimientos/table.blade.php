<div class="table-responsive-sm">
    <table class="table table-striped" id="requerimientos-table">
        <thead>
            <tr>
                <th>@lang('models/requerimientos.fields.codigo')</th>
                <th>@lang('models/requerimientos.fields.nombre_cliente')</th>
                <th>@lang('models/requerimientos.fields.cantidad_de_equipos')</th>
                <th>@lang('models/requerimientos.fields.ducto')</th>
                <th>@lang('models/requerimientos.fields.observaciones')</th>
                {{-- <th>@lang('models/requerimientos.fields.created_at')</th> --}}
                <th>@lang('models/requerimientos.fields.fecha_programada')</th>
                <th>@lang('models/requerimientos.fields.programado')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($requerimientos->SortByDesc('id') as $requerimiento)
            <tr>
                <td>{{ $requerimiento->id }}</td>
                <td>{{ $requerimiento->cliente->nombre }}</td>
                <td>{{ $requerimiento->cantidad_de_equipos }}</td>
                <td>{{ $requerimiento->ducto_rel->descripcion }}</td>
                <td>{{ $requerimiento->observaciones }}</td>
                {{-- <td>{{ $requerimiento->created_at }}</td> --}}
                <td>{{ is_null($requerimiento->fecha_programada) ? "N/A" : $requerimiento->fecha_programada->format('d-m-Y') }}</td>
                <td>
                    @if ($requerimiento->programado)
                        <i class="icon-check" style="color:green"></i>
                    @else
                        <i class="icon-close" style="color:red"></i>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['requerimientos.destroy', $requerimiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver requerimientos')
                            <a href="{{ route('requerimientos.show', [$requerimiento->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        @endcan
                        @if(auth()->user()->can('recepcionar requerimiento') || auth()->user()->can('preparar programacion'))
                            <a href="{{ route('requerimientos.edit', [$requerimiento->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        @endif
                        @can('recepcionar requerimientos')
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
