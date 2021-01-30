@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/programacions.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            @lang('models/programacions.plural')
                            @can('preparar programacion')
                                <div class="pull-right d-flex">
                                    <form class="input-group" action="{{route('programacions.edit',['id' => 1],false)}}">
                                        <input class="form-control" type="search" name="search-input">
                                        <div class="input-group-append">
                                            <button class="input-group-text" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <a 
                                        class="btn btn-primary ml-2" 
                                        role="button" 
                                        href="{{ route('programacions.create') }}"
                                    >
                                        <i class="fa fa-plus"></i> Añadir
                                    </a>
                                </div>
                            @endcan
                         </div>
                         <div class="card-body">
                             @include('programacions.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

