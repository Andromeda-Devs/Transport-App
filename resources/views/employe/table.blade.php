<div class="table-responsive-sm">
    <table class="table table-striped" id="employe-table">
        <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th colspan="3">Acción</th>
        </thead>
        <tbody>
        @foreach($employe as $user)
            <tr>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['employe.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('employe.show', [$user->id]) !!}" class='btn btn-ghost-success'><i
                                class="fa fa-eye"></i></a>
                        <a href="{!! route('employe.edit', [$user->id]) !!}" class='btn btn-ghost-info'><i
                                class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
