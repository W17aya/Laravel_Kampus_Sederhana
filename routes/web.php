<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('mahasiswa', function () {
     $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo", 
     "Lisa Permata"];
     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
     });
    
     Route::get('dosen', function () {
     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.",
     "Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
     return view('dosen')->with('dosen', $arrDosen);
     });
    
     Route::get('gallery', function () {
     return view('gallery');
     });
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('layouts.template');
});

Route::get('/','MahasiswaController@index');


Route::get('/daftar-mahasiswa', 'MahasiswaController@daftarMahasiswa')
->Middleware('login');

 Route::get('/tabel-mahasiswa', 'MahasiswaController@tabelMahasiswa')
 ->middleware('login');
 Route::get('/blog-mahasiswa', 'MahasiswaController@blogMahasiswa')
 ->middleware('coba');
 Route::get('/mahasiswas/{mahasiswa}', 'MahasiswaController@show')
->name('mahasiswas.show');
Route::get('/form-pendaftaran','MahasiswaController@FormPendaftaran');
Route::post('/proses-form','MahasiswaController@ProsesForm');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cek-object', 'MahasiswaController@cekObject');

Route::get('/insert', 'MahasiswaController@insert');
 Route::get('/mass-assignment', 'MahasiswaController@massAssignment');
 Route::get('/mass-assignment2', 'MahasiswaController@massAssignment2');

 Route::get('/update', 'MahasiswaController@update');
 Route::get('/update-where', 'MahasiswaController@updateWhere');
 Route::get('/mass-update', 'MahasiswaController@massUpdate');

 Route::get('/delete', 'MahasiswaController@delete');
 Route::get('/destroy', 'MahasiswaController@destroy');
 Route::get('/mass-delete', 'MahasiswaController@massDelete');

 Route::get('/all', 'MahasiswaController@all');
 Route::get('/all-view', 'MahasiswaController@allView');
 Route::get('/get-where', 'MahasiswaController@getWhere');
 Route::get('/test-where', 'MahasiswaController@testWhere');
 Route::get('/first', 'MahasiswaController@first');
 Route::get('/find', 'MahasiswaController@find');
 Route::get('/latest', 'MahasiswaController@latest');
 Route::get('/limit', 'MahasiswaController@limit');
 Route::get('/skip-take', 'MahasiswaController@skipTake');

 Route::get('/soft-delete', 'MahasiswaController@softDelete');
 Route::get('/with-trashed', 'MahasiswaController@withTrashed');
 Route::get('/restore', 'MahasiswaController@restore');
 Route::get('/force-delete', 'MahasiswaController@forceDelete');


 Route::get('/', 'MahasiswaController@index');
Route::get('/insert-sql', 'MahasiswaController@insertSql');
 Route::get('/insert-timestamp', 'MahasiswaController@insertTimestamp');
 Route::get('/insert-prepared', 'MahasiswaController@insertPrepared');
 Route::get('/insert-named-binding', 'MahasiswaController@insertNamedBinding');
 Route::get('/update', 'MahasiswaController@update');
 Route::get('/delete', 'MahasiswaController@delete');
 Route::get('/select', 'MahasiswaController@select');
 Route::get('/select-tampil', 'MahasiswaController@selectTampil');
 Route::get('/select-view', 'MahasiswaController@selectView');
 Route::get('/select-where', 'MahasiswaController@selectWhere');
Route::get('/statement', 'MahasiswaController@statement');