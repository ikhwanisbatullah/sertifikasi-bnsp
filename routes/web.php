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
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MahasiswaController@index');
Route::get('/mahasiswa/create', 'MahasiswaController@create_view');
Route::post('/mahasiswa/create', 'MahasiswaController@create');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@show');
Route::post('/mahasiswa/edit', 'MahasiswaController@update');
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@destroy');

Route::get('/matkul', 'MataKuliahController@index');
Route::get('/matkul/create', 'MataKuliahController@create_view');
Route::post('/matkul/create', 'MataKuliahController@create');
Route::get('/matkul/edit/{id}', 'MataKuliahController@show');
Route::post('/matkul/edit', 'MataKuliahController@update');
Route::get('/matkul/delete/{id}', 'MataKuliahController@destroy');

Route::get('/krs', 'KRSController@index');
Route::get('/krs/create', 'KRSController@create_view');
Route::post('/krs/create', 'KRSController@create');
Route::get('/krs/edit/{id}', 'KRSController@show');
Route::post('/krs/edit', 'KRSController@update');
route::get('/krs/exportpdf/{id}/{nim}','KRSController@exportpdf');
Route::get('/krs/delete/{id}', 'KRSController@destroy');

route::get('/mahasiswa/exportpdf','MahasiswaController@exportpdf');
