<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| ES UN  ASQUEROSO EL QUE ESCRIBIO ESTE CODIGO JAMAS HE TENIDO QUE TRABAJAR CON ALGO TAN POCO PROFESIONAL 
  ESPERO JAMAS TRABAJAR CON ELLOS
*/

Route::redirect('/', 'home');
Route::get('pdf/view/{id}','PdfImport@showUsers', 'pdf/view_{id}');
Route::get('pdf/dd/{id}','PdfImport@createPDF', 'pdf/dd_{id}');

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->middleware('verified');


Route::resource('requerimientos', 'RequerimientoController')->middleware('verified');

Route::resource('programacions', 'ProgramacionController')->middleware('verified');

Route::put('programacions/{programacion}/aprobar', 'ProgramacionController@aprobar')->name('programacions.aprobar')->middleware('verified');
Route::put('programacions/{programacion}/noAprobar', 'ProgramacionController@noAprobar')->name('programacions.noAprobar')->middleware('verified');

Route::resource('documentos', 'DocumentoController')->middleware('verified');

Auth::routes(['verify' => true]);

Route::resource('cargos', 'CargoController')->middleware('verified');

Route::resource('regions', 'RegionController')->middleware('verified');

Route::resource('ciudads', 'CiudadController')->middleware('verified');

Route::resource('comunas', 'ComunaController')->middleware('verified');

Route::resource('vehiculos', 'VehiculoController')->middleware('verified');

Route::resource('tipoVehiculos', 'TipoVehiculoController')->middleware('verified');

Route::resource('ductos', 'DuctoController')->middleware('verified');

Route::resource('funcionarios', 'FuncionarioController')->middleware('verified');

Route::resource('clientes', 'ClienteController')->middleware('verified');

Route::resource('trasporteAguas', 'TrasporteAguaController')->middleware('verified');

Route::resource('gtesh001s', 'Gtesh001Controller')->only([
    'show', 'edit', 'update'
])->middleware('verified');

Route::resource('tipoVehiculos', 'TipoVehiculoController')->middleware('verified');

Route::resource('trasporteAguas', 'TrasporteAguaController')->middleware('verified');

Route::resource('tipoVehiculos', 'TipoVehiculoController')->middleware('verified');

Route::resource('trasporteAguas', 'TrasporteAguaController')->middleware('verified');

Route::middleware(['verified'])->group(function() {
    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store');
    Route::get('roles', 'RoleController@index')->name('roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
});

Route::resource('users', 'UserController')->middleware('auth');

Route::resource('employe', 'EmployeController')->middleware('verified');


Route::get('turnoSupervisors/document1/{id}', 'TurnoSupervisorController@turnoChoferDocument1')->name('turnoSupervisors.document1')->middleware('verified');
Route::get('turnoSupervisors/document1/{id}/download','TurnoSupervisorController@downloadPDF');

Route::put('turnoSupervisors/{id}/autorizar', 'TurnoSupervisorController@autorizar')->name('turnoSupervisors.autorizar')->middleware('verified');
Route::put('turnoSupervisors/{id}/rechazar', 'TurnoSupervisorController@rechazar')->name('turnoSupervisors.rechazar')->middleware('verified');

Route::resource('turnoSupervisors', 'TurnoSupervisorController')->middleware('verified');

Route::post('turnoChofers/{id}/enviar', 'TurnoChoferController@enviar')->name('turnoChofers.enviar')->middleware('verified');

Route::resource('turnoChofers', 'TurnoChoferController')->middleware('verified');

Route::post('turnoAuxiliars/{id}/enviar', 'TurnoAuxiliarController@enviar')->name('turnoAuxiliars.enviar')->middleware('verified');

Route::resource('turnoAuxiliars', 'TurnoAuxiliarController')->middleware('verified');

Route::resource('departamentos', 'DepartamentoController');

Route::resource('pais', 'PaisController');