@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('turnoSupervisors.show', [$programacion->turnoSupervisor->id]) }}">@lang('models/turnoSupervisors.singular')</a>
          </li>
          <li class="breadcrumb-item active">Ver</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>CHECK LIST DE CAMIONES Y ESTANQUE</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($gtesh001, ['route' => ['gtesh001s.update', $gtesh001->id], 'method' => 'patch']) !!}
                            <div class="row">
                                @include('turno_supervisors.turno_chofers_fields')
                            </div>
                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection