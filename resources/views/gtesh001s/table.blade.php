<div class="table-responsive-sm">
    <table class="table table-striped" id="gtesh001s-table">
        <thead>
            <tr>
                <th>@lang('models/gtesh001s.fields.programacion_id')</th>
        <th>@lang('models/gtesh001s.fields.nombre_responsable')</th>
        <th>@lang('models/gtesh001s.fields.fono_contacto')</th>
        <th>@lang('models/gtesh001s.fields.fecha')</th>
        <th>@lang('models/gtesh001s.fields.patente_camion')</th>
        <th>@lang('models/gtesh001s.fields.patente_estanque')</th>
        <th>@lang('models/gtesh001s.fields.odometro')</th>
        <th>@lang('models/gtesh001s.fields.observaciones')</th>
        <th>@lang('models/gtesh001s.fields.firma_responsable')</th>
        <th>@lang('models/gtesh001s.fields.firma_vb')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gtesh001s as $gtesh001)
            <tr>
                <td>{{ $gtesh001->programacion_id }}</td>
            <td>{{ $gtesh001->nombre_responsable }}</td>
            <td>{{ $gtesh001->fono_contacto }}</td>
            <td>{{ $gtesh001->fecha }}</td>
            <td>{{ $gtesh001->patente_camion }}</td>
            <td>{{ $gtesh001->patente_estanque }}</td>
            <td>{{ $gtesh001->odometro }}</td>
            <td>{{ $gtesh001->observaciones }}</td>
            <td>{{ $gtesh001->firma_responsable }}</td>
            <td>{{ $gtesh001->firma_vb }}</td>
                <td>
                    {!! Form::open(['route' => ['gtesh001s.destroy', $gtesh001->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gtesh001s.show', [$gtesh001->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('gtesh001s.edit', [$gtesh001->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>