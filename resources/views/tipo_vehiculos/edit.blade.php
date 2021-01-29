@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('tipoVehiculos.index') !!}">@lang('models/tipoVehiculos.singular')</a>
          </li>
          <li class="breadcrumb-item active">@lang('crud.edit')</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar @lang('models/tipoVehiculos.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($tipoVehiculo, ['route' => ['tipoVehiculos.update', $tipoVehiculo->id], 'method' => 'patch']) !!}

                              @include('tipo_vehiculos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection