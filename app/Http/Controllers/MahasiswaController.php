<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function daftarMahasiswa()
    {
    return view('halaman',['judul' => 'Daftar Mahasiswa']);

}
public function tabelMahasiswa()
{
    return view('halaman',['judul'=> 'Tabel Mahasiswa']);
}
public function blogMahasiswa()
{
    return view('halaman',['judul' => 'Blog Mahasiswa']);
    }
    
     public function login()
     {
     return view('form-login');
     }

     public function index()
     {
         $mahasiswas = Mahasiswa::all();
         return view('mahasiswa.index',['mahasiswas'=> $mahasiswas]);
     }
    
     public function prosesLogin(Request $request)
     {
     $request->validate([
     'username' => 'required',
     ]);
    
     $validUsername = ['andi','rani','lisa','joko'];
     // Jika inputan username ada di array, buat session 'username'
     if (in_array($request->username, $validUsername))
     {
     session(['username' => $request->username]);
     return redirect('/daftar-mahasiswa');
     }
     else {
     // Username tidak ada di daftar
     return back()->withInput()->with('pesan',"Username tidak valid");
     }
     }
    
     public function store(Request $request)
     {
         $validateData = $request->validate([
            'nim' => 'required|size:8',
             'nama' => 'required|min:3|max:50',
             'jenis_kelamin' => 'required|in:P,L',
             'jurusan' => 'required',
             'alamat' => '',
         ]);
    
         Mahasiswa::create($validateData);
         return "Data berhasil diinput ke database";
     }

     public function show($mahasiswa)
     {
         dd($mahasiswa);
     }

     public function create()
     {
         return view('mahasiswa.create');
     }

     public function logout()
     {
     // Hapus session 'username'
     session()->forget('username');
     return redirect('login')->with('pesan','Logout berhasil');
     }
 }
