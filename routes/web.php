<?php

use App\Mahasiswa;
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

Route::get('/mahasiswa/ilkom', function () {
    return view('universitas.mahasiswa');
     });

     Route::get('/mahasiswa', function () {
         $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
         "Lisa Permata"];
        
         return view('universitas.mahasiswa',['mahasiswa' => $arrMahasiswa]);
         });


Route::get('/', function(){
    return view('welcome');
});

Route::get('/mahasiswa', function(){
    $nama ='Tya Kirana Putri';
    $nilai = 75;
    return view('mahasiswa', compact('nama','nilai'));
});

Route::get('/admin', function(){
    return view('admin');
});
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

     Route::get('informasi/{fakultas}/{jurusan}', function ($fakultas, $jurusan) {
         $data = [$fakultas, $jurusan];
        return view('informasi')->with('data', $data);
         })->name('info');