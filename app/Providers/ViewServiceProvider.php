<?php

namespace App\Providers;

use App\User;
use App\Models\Requerimiento;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Ducto;
use App\Models\Funcionario;
use App\Models\Cargo;
use App\Models\TipoVehiculo;

use App\Models\Ciudad;
use App\Models\Departamento;
use App\Models\Pais;
use App\Models\Region;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['turno_supervisors.turno_chofers_fields'], function ($view) {
            $userItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'conductor'); })->pluck('name','id')->toArray();
            $view->with('conductorItems', $userItems);
        });
        View::composer(['turno_supervisors.turno_chofers_fields'], function ($view) {
            $vehiculoItems = Vehiculo::pluck('patente','id')->toArray();
            $view->with('vehiculoItems', $vehiculoItems);
        });
        View::composer(['turno_supervisors.fields'], function ($view) {
            $userItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'conductor'); })->pluck('name','id')->toArray();
            $view->with('conductorItems', $userItems);
        });
        View::composer(['turno_supervisors.fields'], function ($view) {
            $userItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'auxiliar'); })->pluck('name','id')->toArray();
            $view->with('auxiliarItems', $userItems);
        });
        View::composer(['turno_auxiliars.fields'], function ($view) {
            $userItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'auxiliar'); })->pluck('name','id')->toArray();
            $view->with('auxiliarItems', $userItems);
        });
        View::composer(['turno_chofers.fields'], function ($view) {
            $userItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'conductor'); })->pluck('name','id')->toArray();
            $view->with('conductorItems', $userItems);
        });
        View::composer(['gtesh001s.fields'], function ($view) {
            $vehiculoItems = Vehiculo::pluck('patente','id')->toArray();
            $view->with('vehiculoItems', $vehiculoItems);
        });
        View::composer(['gtesh001s.fields'], function ($view) {
            $requerimientoItems = Requerimiento::pluck('id','id')->toArray();
            $view->with('requerimientoItems', $requerimientoItems);
        });
        View::composer(['programacions.fields'], function ($view) {
            $funcionarioItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'conductor'); })->pluck('name','id')->toArray();
            $view->with('funcionarioConductorItems', $funcionarioItems);
        });
        View::composer(['programacions.fields'], function ($view) {
            $funcionarioItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'auxiliar'); })->pluck('name','id')->toArray();
            $view->with('funcionarioAuxiliarItems', $funcionarioItems);
        });
        View::composer(['programacions.fields'], function ($view) {
            $vehiculoItems = Vehiculo::pluck('patente','id')->toArray();
            $view->with('vehiculoItems', $vehiculoItems);
        });
        View::composer(['programacions.fields'], function ($view) {
            $requerimientoItems = Requerimiento::pluck('id','id')->toArray();
            $view->with('requerimientoItems', $requerimientoItems);
        });
        View::composer(['requerimientos.fields'], function ($view) {
            $ductoItems = Ducto::where('activo', true)
                ->orWhere('tipo', 'ambos')
                ->orWhere('tipo', 'destino')
                ->pluck('descripcion','id')->toArray();
            $view->with('ductoItems', $ductoItems);
        });
        View::composer(['requerimientos.fields'], function ($view) {
            $clienteItems = Cliente::where('activo', true)->pluck('nombre','id')->toArray();
            $view->with('clienteItems', $clienteItems);
        });
        View::composer(['trasporte_aguas.fields'], function ($view) {
            $vehiculoItems = Vehiculo::pluck('patente','id')->toArray();
            $view->with('vehiculoItems', $vehiculoItems);
        });
        View::composer(['trasporte_aguas.fields'], function ($view) {
            $vehiculoItems = Vehiculo::pluck('patente','id')->toArray();
            $view->with('vehiculoItems', $vehiculoItems);
        });
        View::composer(['trasporte_aguas.fields'], function ($view) {
            $ductoItems = Ducto::pluck('descripcion','id')->toArray();
            $view->with('ductoItems', $ductoItems);
        });
        View::composer(['trasporte_aguas.fields'], function ($view) {
            $ductoItems = Ducto::pluck('descripcion','id')->toArray();
            $view->with('ductoItems', $ductoItems);
        });
        View::composer(['trasporte_aguas.fields'], function ($view) {
            $funcionarioItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'conductor'); })->pluck('name','id')->toArray();
            $view->with('funcionarioItems', $funcionarioItems);
        });
        View::composer(['trasporte_aguas.fields'], function ($view) {
            $funcionarioItems = User::whereHas('roles', function(Builder $query) { $query->where('name', 'conductor'); })->pluck('name','id')->toArray();
            $view->with('funcionarioItems', $funcionarioItems);
        });
        View::composer(['clientes.fields'], function ($view) {
            $ciudadItems = Ciudad::pluck('nombre','id')->toArray();
            $view->with('ciudadItems', $ciudadItems);
        });
        View::composer(['funcionarios.fields'], function ($view) {
            $cargoItems = Cargo::pluck('nombre','id')->toArray();
            $view->with('cargoItems', $cargoItems);
        });
        View::composer(['users.fields'], function ($view) {
            $cargoItems = Cargo::pluck('nombre','id')->toArray();
            $view->with('cargoItems', $cargoItems);
        });
        View::composer(['vehiculos.fields'], function ($view) {
            $tipo_vehiculoItems = TipoVehiculo::pluck('nombre','id')->toArray();
            $view->with('tipo_vehiculoItems', $tipo_vehiculoItems);
        });
        View::composer(['comunas.fields'], function ($view) {
            $ciudadItems = Ciudad::pluck('nombre','id')->toArray();
            $view->with('ciudadItems', $ciudadItems);
        });
        View::composer(['ciudads.fields'], function ($view) {
            $regionItems = Region::pluck('nombre','id')->toArray();
            $view->with('regionItems', $regionItems);
        });
        //
        View::composer(['cargos.fields'], function($view) {
            $departamenoItems = Departamento::where('activo', true)->get()->pluck('nombre', 'id')->toArray();
            $view->with('departamenoItems', $departamenoItems);
        });
        View::composer(['regions.fields'], function($view) {
            $paisItems = Pais::where('activo', true)->get()->pluck('nombre', 'id')->toArray();
            $view->with('paisItems', $paisItems);
        });
    }
}
