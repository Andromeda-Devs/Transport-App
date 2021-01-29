@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{{ route('turnoChofers.edit', [$programacion->turnoChofer->id]) }}">Turno chofer</a>
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
                              <strong>Editar @lang('models/gtesh001s.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($gtesh001, ['route' => ['gtesh001s.update', $gtesh001->id], 'method' => 'patch']) !!}
                                <div class="row">
                                    @include('gtesh001s.fields')
                                </div>
                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection