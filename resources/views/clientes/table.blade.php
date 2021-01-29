<div class="table-responsive-sm">
    <table class="table table-striped" id="clientes-table">
        <thead>
            <tr>
                <th>@lang('models/clientes.fields.id')</th>
        <th>@lang('models/clientes.fields.rut')</th>
        <th>@lang('models/clientes.fields.nombre')</th>
        <th>@lang('models/clientes.fields.giro')</th>
        <th>@lang('models/clientes.fields.ciudad_id')</th>
        <th>@lang('models/clientes.fields.direccion')</th>
        <th>@lang('models/clientes.fields.telefono')</th>
        <th>@lang('models/clientes.fields.email')</th>
        <th>@lang('models/clientes.fields.nombre_contacto')</th>
        <th>@lang('models/clientes.fields.telefono_contacto')</th>
        <th>@lang('models/clientes.fields.email_contacto')</th>
        <th>@lang('models/clientes.fields.activo')</th>
        {{-- <th>@lang('models/clientes.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->rut }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->giro }}</td>
            <td>{{ $cliente->ciudad->nombre }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->nombre_contacto }}</td>
            <td>{{ $cliente->telefono_contacto }}</td>
            <td>{{ $cliente->email_contacto }}</td>
            <td>{{ ($cliente->activo == 1 ? "SI" : "NO") }}</td>
            {{-- <td>{{ $cliente->created_at }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$cliente->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clientes.edit', [$cliente->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>