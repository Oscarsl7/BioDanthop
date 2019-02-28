<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('BioNetPos.views.LogIn.index', ['esLogIn' => true]);
});
Route::get('/login', function () {
  Session::flush();
  return view('BioNetPos.views.LogIn.index', ['esLogIn' => true]);
});
Route::get('/template', 'BioNetPos\Configuracion\ConfiguracionController@template');
Route::get('/template/ver', 'BioNetPos\Configuracion\ConfiguracionController@ver');
Route::get('/template/crear', 'BioNetPos\Configuracion\ConfiguracionController@crear');

Route::get('/two', function()
{
    return view('BioNetPos.views.Clientes.index2');
});
