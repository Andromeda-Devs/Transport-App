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

Route::view('/{path?}', 'app')
  ->where('path', '.*')
  ->name('react');