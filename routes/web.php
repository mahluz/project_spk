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
