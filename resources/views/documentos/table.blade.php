<div class="table-responsive-sm">
    <table class="table table-striped" id="documentos-table">
        <thead>
            <tr>
                <th>Documento</th>
                <th>@lang('models/documentos.fields.nombre')</th>
        {{-- <th>@lang('models/documentos.fields.created_at')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentos as $documento)
            <tr>
                <td>{{ $documento->id }}</td>
                <td>{{ $documento->nombre }}</td>
            {{-- <td>{{ $documento->created_at }}</td> --}}
                <td>
                    {{-- {!! Form::open(['route' => ['documentos.destroy', $documento->id], 'method' => 'delete']) !!} --}}
                    <div class='btn-group'>
                        <a href="{{ route('documentos.show', [$documento->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('documentos.edit', [$documento->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!} --}}
                    </div>
                    {{-- {!! Form::close() !!} --}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>