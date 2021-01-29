@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/requerimientos.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>

                             @lang('models/requerimientos.plural')

                             @can('recepcionar requerimiento')
                                <a class="pull-right btn btn-primary" role="button" href="{{ route('requerimientos.create') }}"><i class="fa fa-plus"></i> Añadir</a>
                             @endcan
                             <hr>
                             <form action="{{ route('requerimientos.index') }}" id="filterForm">
                                {{-- @csrf --}}
                                <label>
                                    <input type="radio" name="programado_filter" value="programado" onclick="autoSubmit()"
                                        @if (app('request')->input('programado_filter') == "programado")
                                            checked
                                        @endif
                                    >
                                    Programados
                                </label>
                                <label>
                                    <input type="radio" name="programado_filter" value="no_programado" onclick="autoSubmit()" 
                                        @if (app('request')->input('programado_filter') == "no_programado")
                                            checked
                                        @endif
                                    >
                                    No Programados
                                </label>
                                <label>
                                    <input type="radio" name="programado_filter" value="ambos" onclick="autoSubmit()"
                                        @if (app('request')->input('programado_filter') != "programado" && app('request')->input('programado_filter') != "no_programado")
                                            checked
                                        @endif
                                    >
                                    Ambos
                                </label>
                            </form>
                         </div>
                         <div class="card-body">
                             @include('requerimientos.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

@push('scripts')
<script>
    function autoSubmit() {
        let form = document.getElementById('filterForm')
        form.submit()
    }
</script>
@endpush

