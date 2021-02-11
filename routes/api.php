<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('signup', [AuthController::class, 'signUp']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function (){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'user']);

    Route::apiResources([
        'cargos' => 'CargoController',
        'ciudades' => 'CiudadController',
        'clientes' => 'ClienteController',
        'comunas' => 'ComunaController',
        'departamentos' => 'DepartamentoController',
        'documentos' => 'DocumentoController',
        'ductos' => 'DuctoController',
        'employes' => 'EmployeController',
        'funcionarios' => 'FuncionarioController',
        'gtesh001s' => 'Gtesh001Controller',
        'paises' => 'PaisController',
        'programaciones' => 'ProgramacionController',
        'regiones' => 'RegionController',
        'requerimientos' => 'RequerimientoController',
        'roles' => 'RoleController',
        'tipo-vehiculos' => 'TipoVehiculoController',
        'transportes' => 'TrasporteAguaController',
        'auxiliares' => 'TurnoAuxiliarController',
        'choferes' => 'TurnoChoferController',
        'supervisores' => 'TurnoSupervisorController',
        'users' => 'UserController',
        'vehiculos' => 'VehiculoController'
    ]);

    Route::post('programaciones/aprobar', 'ProgramacionController@aprobar');
    Route::post('programaciones/no-aprobar', 'ProgramacionController@noAprobar');
    Route::post('auxiliares/enviar/{id}', 'TurnoAuxiliarController@enviar');
    Route::post('choferes/enviar/{id}', 'TurnoChoferController@enviar');
    Route::get('supervisores/chofer/{id}', 'TurnoSupervisorController@turnoChoferDocument1');
    Route::get('supervisores/download/{id}', 'TurnoSupervisorController@downloadPDF');
    Route::post('supervisores/autorizar/{id}', 'TurnoSupervisorController@autorizar');
    Route::post('supervisores/rechazar/{id}', 'TurnoSupervisorController@rechazar');

});