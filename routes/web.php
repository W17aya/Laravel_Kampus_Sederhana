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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
