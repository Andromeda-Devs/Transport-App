<div class="table-responsive-sm">
    <table class="table table-striped" id="programacions-table">
        <thead>
            <tr>
                <th>@lang('models/programacions.fields.programacion_id')</th>
                <th>@lang('models/programacions.fields.requerimiento_id')</th>
                <th>@lang('models/programacions.fields.equipo')</th>
                <th>@lang('models/programacions.fields.conductor')</th>
                <th>@lang('models/programacions.fields.auxiliar')</th>
                {{-- <th>@lang('models/programacions.fields.created_at')</th> --}}
                <th>@lang('models/programacions.fields.aprobado')</th>
                <th colspan="4">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($programacions as $programacion)
            <tr>
                <td>
                    {{ $programacion->id }}
                </td>
                <td>
                    @if ($programacion->requerimiento_id < 10)
                        (00{{ $programacion->requerimiento_id }})
                    @elseif($programacion->requerimiento_id < 100)
                        (0{{ $programacion->requerimiento_id }})
                    @else
                        ({{ $programacion->requerimiento_id }})
                    @endif
                    {{ $programacion->requerimiento->cliente->nombre }},
                    {{ $programacion->requerimiento->ducto_rel->descripcion }}.
                </td>
                <td>
                    {{ $programacion->vehiculo->patente }}
                </td>
                <td>
                    {{ $programacion->conductor_rel->name }}
                </td>
                <td>
                    {{ $programacion->auxiliar_rel->name }}
                </td>
                {{-- <td>{{ $programacion->created_at }}</td> --}}
                <td>
                    {{ (is_null($programacion->aprobado) ? "En espera" : ($programacion->aprobado == true ? "Aprobado" : "No aprobado"))  }}
                </td>
                {{-- <td>
                    {!! Form::open(['route' => ['programacions.destroy', $programacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('programacions.show', [$programacion->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('programacions.edit', [$programacion->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td> --}}
                <td>
                    <div class=''>
                        <a href="{{ route('programacions.show', [$programacion->id]) }}" class='btn btn-ghost-success'>
                            <i class="fa fa-eye"></i>
                        </a>
                        @if (is_null($programacion->aprobado))
                            <a href="{{ route('programacions.edit', [$programacion->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                            @can('aprobar programacion')
                                {!! Form::open(['route' => ['programacions.aprobar', $programacion->id], 'method' => 'put', 'style' => 'display:inline;']) !!}
                                    {!! Form::button('Aprobar', ['type' => 'submit', 'class' => 'btn btn-primary ml-2', 'onclick' => "return confirm('¿Está seguro de Aprobarlo?')"]) !!}
                                {!! Form::close() !!}
                                {!! Form::open(['route' => ['programacions.noAprobar', $programacion->id], 'method' => 'put', 'style' => 'display:inline;']) !!}
                                    {!! Form::button('No aprobar', ['type' => 'submit', 'class' => 'btn btn-danger ml-2', 'onclick' => "return confirm('¿Está seguro de No aprobarlo?')"]) !!}
                                {!! Form::close() !!}
                            @endcan
                        @elseif(!$programacion->aprobado)
                            <a href="{{ route('programacions.edit', [$programacion->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                            @can('aprobar programacion')
                                {!! Form::open(['route' => ['programacions.aprobar', $programacion->id], 'method' => 'put', 'style' => 'display:inline;']) !!}
                                    {!! Form::button('Aprobar', ['type' => 'submit', 'class' => 'btn btn-primary ml-2', 'onclick' => "return confirm('¿Está seguro de Aprobarlo?')"]) !!}
                                {!! Form::close() !!}
                            @endcan
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
