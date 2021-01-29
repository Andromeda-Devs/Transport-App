<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Correo') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Confirmación de la contraseña') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Rut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rut', __('models/funcionarios.fields.rut').':') !!}
    {!! Form::text('rut', null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad', __('models/funcionarios.fields.nacionalidad').':') !!}
    {!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sexo', __('models/funcionarios.fields.sexo').':') !!}
    <label class="radio-inline">
        {!! Form::radio('sexo', "1", null) !!} Masculino
    </label>

    <label class="radio-inline">
        {!! Form::radio('sexo', "0", null) !!} Femenino
    </label>

</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', __('models/funcionarios.fields.departamento').':') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo_id', __('models/funcionarios.fields.cargo_id').':') !!}
    {!! Form::select('cargo_id', $cargoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', __('models/funcionarios.fields.estado').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!}
    </label>
</div>

{!! Form::hidden('firma') !!}

<hr>
<h3>Firma</h3>
<div class="row mb-5">
    <div class="col-12 col-md-6">
        @if (isset($user))
            @if (is_null($user->firma))
                SIN FIRMA
            @else
                <img src="{{ $user->firma }}" alt="firma" height="100" class="border" />
            @endif
        @else
            SIN FIRMA
        @endif
    </div>
    <div class="col-12 col-md-6">
        {!! Form::file('FirmaInputName', ['id' => 'inputFirma', "accept" => "image/x-png,image/gif,image/jpeg"]) !!}
    </div>
</div>

<hr>
<h3>Lista de Roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($roles as $role)
        <li>
            <label>
                {{ Form::checkbox('roles[]', $role->id, null) }}
                {{ $role->name }}
            </label>
        </li>
        @endforeach
    </ul>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script>
    let inputFirma = document.getElementById('inputFirma');
    inputFirma.addEventListener("change", (e) => {
        if (e.target.files.length > 0) {
            let archivo = e.target.files[0]
            const reader = new FileReader()
            reader.onload = () => {
                document.getElementsByName('firma')[0].value = reader.result
                console.log(document.getElementsByName('firma')[0].value)
            }
            reader.readAsDataURL(archivo)
        }
    })
</script>