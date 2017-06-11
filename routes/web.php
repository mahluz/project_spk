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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('Beranda','SiswaController@index');

Route::get('dataSiswa','SiswaController@dataSiswa');
Route::group(['prefix'=>'dataSiswa'],function(){
  Route::get('create','SiswaController@create');
  Route::post('store','SiswaController@store');
  Route::post('update','SiswaController@update');
  Route::post('delete','SiswaController@delete');
});

Route::get('statistik','StatistikController@index');
Route::group(['prefix'=>'statistik'],function(){
  Route::post('ipk','StatistikController@ipk');
  Route::post('toefl','StatistikController@toefl');
  Route::post('prestasi','StatistikController@prestasi');
  Route::post('ranking','StatistikController@ranking');

  Route::post('chart_ipk','StatistikController@chart_ipk');
  Route::post('chart_toefl','StatistikController@chart_toefl');
  Route::post('chart_prestasi','StatistikController@chart_prestasi');
});

Route::get('pencarian','PencarianController@index');
Route::group(['prefix'=>'pencarian'],function(){
  Route::post('get','PencarianController@search');
});
