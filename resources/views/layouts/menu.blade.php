@can('ver requerimientos')
    <li class="nav-item {{ Request::is('requerimientos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('requerimientos.index') }}">
            <i class="nav-icon fa fa-list"></i>
            <span>@lang('models/requerimientos.plural')</span>
        </a>
    </li>
@endcan
@if(auth()->user()->can('aprobar programacion') || auth()->user()->can('generar programacion'))
<li class="nav-item {{ Request::is('programacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programacions.index') }}">
        <i class="nav-icon fa fa-clock"></i>
        <span>@lang('models/programacions.plural')</span>
    </a>
</li>
@endif
@hasanyrole('jefe operaciones|supervisor|admin')
<li class="nav-item {{ Request::is('trasporteAguas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('trasporteAguas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/trasporteAguas.plural')</span>
    </a>
</li>
@endhasanyrole
@hasanyrole('jefe operaciones|supervisor|admin')
<li class="nav-item {{ Request::is('turnoSupervisors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('turnoSupervisors.index') }}">
        <i class="nav-icon fa fa-user-friends"></i>
        <span>@lang('models/turnoSupervisors.plural')</span>
    </a>
</li>
@endhasanyrole
@hasanyrole('jefe operaciones|supervisor|admin')
<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#multiColapse">
        <i class="nav-icon icon-arrow-down"></i>
        <span>Mantenedores</span>
    </a>
</li>
<div class="collapse multi-collapse" id="multiColapse" style="background-color: #57626b">
    <li class="nav-item {{ Request::is('vehiculos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('vehiculos.index') }}">
            <i class="nav-icon fas fa-truck"></i>
            <span>@lang('models/vehiculos.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('tipoVehiculos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tipoVehiculos.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>@lang('models/tipoVehiculos.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('pais*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pais.index') }}">
            <i class="nav-icon fas fa-globe-americas"></i>
            <span>@lang('models/pais.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('regions*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('regions.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>@lang('models/regions.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('ciudads*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('ciudads.index') }}">
            <i class="nav-icon fas fa-city"></i>
            <span>@lang('models/ciudads.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('comunas*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('comunas.index') }}">
            <i class="nav-icon fas fa-city"></i>
            <span>@lang('models/comunas.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('ductos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('ductos.index') }}">
            <i class="nav-icon fa fa-list"></i>
            <span>@lang('models/ductos.plural')</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('departamentos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('departamentos.index') }}">
            <i class="nav-icon fa fa-list"></i>
            <span>@lang('models/departamentos.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('cargos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('cargos.index') }}">
            <i class="nav-icon fa fa-list"></i>
            <span>@lang('models/cargos.plural')</span>
        </a>
    </li>





    {{-- <li class="nav-item {{ Request::is('funcionarios*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('funcionarios.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>@lang('models/funcionarios.plural')</span>
        </a>
    </li> --}}
</div>
<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#maestros-items">
        <i class="nav-icon icon-arrow-down"></i>
        <span>Maestros</span>
    </a>
</li>
<div class="collapse multi-collapse" id="maestros-items" style="background-color: #57626b">
    <li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('clientes.index') }}">
            <i class="nav-icon fa fa-users"></i>
            <span>@lang('models/clientes.plural')</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('employe*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('employe.index') }}">
            <i class="nav-icon fas fa-truck"></i>
            <span>Trabajadores</span>
        </a>
    </li>
</div>
<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#settings">
        <i class="nav-icon icon-arrow-down"></i>
        <span>Configuracion</span>
    </a>
</li>
<div class="collapse multi-collapse" id="settings" style="background-color: #57626b">
    <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
            <i class="nav-icon fas fa-users-cog"></i>
            <span>Roles</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link" href="{!! route('users.index') !!}">
            <i class="nav-icon fa fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('documentos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('documentos.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>@lang('models/documentos.plural')</span>
        </a>
    </li>
</div>
@endhasanyrole

@hasanyrole('supervisor|conductor|admin')
<li class="nav-item {{ Request::is('turnoChofers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('turnoChofers.index') }}">
        <i class="nav-icon fa fa-truck-moving"></i>
        <span>@lang('models/turnoChofers.plural')</span>
    </a>
</li>
@endhasanyrole
@hasanyrole('auxiliar|admin')
<li class="nav-item {{ Request::is('turnoAuxiliars*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('turnoAuxiliars.index') }}">
        <i class="nav-icon fa fa-hands-helping"></i>
        <span>@lang('models/turnoAuxiliars.plural')</span>
    </a>
</li>
@endhasanyrole
{{-- @can('ver requerimientos')
    <li class="nav-item {{ Request::is('requerimientos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('requerimientos.index') }}">
            <i class="nav-icon fa fa-list"></i>
            <span>@lang('models/requerimientos.plural')</span>
        </a>
    </li>
@endcan --}}

{{-- @hasanyrole('jefe operaciones|supervisor|admin')
<li class="nav-item {{ Request::is('gtesh001s*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('gtesh001s.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/gtesh001s.plural')</span>
    </a>
</li>
@endhasanyrole --}}



