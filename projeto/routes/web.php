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
    return view('home');
});

Route::get('/home','HomeController@index');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/medicamentos/{id}/solicitar', 'SolicitacoesController@solicitar')->name('solicitacoes.solicitar');
Route::post('/solicitacoes/{id_user}/{id_medicamento}/create', 'SolicitacoesController@store')->name('solicitacoes.store');

Route::group(['middleware' => ['web']], function(){
	Route::resource('medicamentos', 'MedicamentosController');
});

