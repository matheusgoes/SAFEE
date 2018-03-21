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

Route::get('/laravel', function () {
    return view('laravel');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');
Route::get('/contratos', 'HomeController@contratos');
Route::get('/faturas', 'HomeController@faturas');
Route::get('/avaliacao_reativo', 'HomeController@avaliacao_reativo');
Route::get('/ultrapassagem_demanda', 'HomeController@ultrapassagem_demanda');
Route::get('/reducao_demanda', 'HomeController@reducao_demanda');
Route::get('/analise_tarifaria', 'HomeController@analise_tarifaria');
Route::get('/tarifa_minima', 'HomeController@tarifa_minima');
