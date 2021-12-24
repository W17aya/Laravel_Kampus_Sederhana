<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

 class MahasiswaController extends Controller
// {
//     public function daftarMahasiswa(request $request)
//     {
//         echo $request->user()->id."<br>";
//         echo $request->user()->name."<br>";
//         echo $request->user()->email."<br>";
//         echo $request->user()->password."<br>";
//     }
// }
// {
//     public function insertTimestamp(){
//         $result = DB::insert(
//             " INSERT INTO mahasiswas
//             (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
//             VALUES
//             ('19002032','Rina Kumala Sari','2000-06-28',3.4,now(),now())"
//         );
//         dump($result);
//     }
// }



// public function cekObject(){
//     $mahasiswa = new Mahasiswa;

//     Dump($mahasiswa);
// }
//     public function AllView(){
//         $mahasiswas = Mahasiswa::all();
//         return view('tampil_mahasiswa', ['mahasiswas' => $mahasiswas]);
//     }

// public function getWhere(){
//     $mahasiswas = Mahasiswa::where('ipk','<','3')
//     ->orderBy('nama','desc')
//     ->get();
//     return view('tampil-mahasiswa',['mahasiswas'=>$mahasiswas]);
// }

// public function tabelMahasiswa()
// {
//     return view('halaman',['judul'=> 'Tabel Mahasiswa']);
// }
// public function blogMahasiswa()
// {
//     return view('halaman',['judul' => 'Blog Mahasiswa']);
//     }
    
//      public function login()
//      {
//      return view('form-login');
//      }


//     public function massAssignment(){
//         Mahasiswa::create(
//             [
//                 'nim' => '19021044',
//                 'nama' => 'Rudi Permana',
//                 'tanggal_lahir' => '2000-08-22',
//                 'ipk' => 2.5,
//             ]
//             );

//             return "Berhasil di proses";
//     }

//      public function index()
//      {
//          return "Berhasil di proses";
//            }
//            public Function insertSql(){
//                $result = DB::insert("INSERT INTO mahasiswas(nim,nama,tanggal_lahir,ipk)
//                VALUES('19003036','Sari Citra Lestari', '2001-12-31',3.5)");

//            }
    
//      public function prosesLogin(Request $request)
//      {
//      $request->validate([
//      'username' => 'required',
//      ]);
    
//      $validUsername = ['andi','rani','lisa','joko'];
//      // Jika inputan username ada di array, buat session 'username'
//      if (in_array($request->username, $validUsername))
//      {
//      session(['username' => $request->username]);
//      return redirect('/daftar-mahasiswa');
//      }
//      else {
//      // Username tidak ada di daftar
//      return back()->withInput()->with('pesan',"Username tidak valid");
//      }
//      }
    
//     //  public function store(Request $request)
//     //  {
//     //      $validateData = $request->validate([
//     //         'nim' => 'required|size:8',
//     //          'nama' => 'required|min:3|max:50',
//     //          'jenis_kelamin' => 'required|in:P,L',
//     //          'jurusan' => 'required',
//     //          'alamat' => '',
//     //      ]);
    
//     //      Mahasiswa::create($validateData);
//     //      return "Data berhasil diinput ke database";
//     //  }

//      public function show($mahasiswa)
//      {
//          dd($mahasiswa);
//      }

     
//      public function create()
//      {
//          return view('mahasiswa.create');
//      }

//     public function inser()
//     {
//         $mahasiswa= new Mahasiswa;
//         $mahasiswa-> nim = '19003036';
//         $mahasiswa->nama ='Sari Citra Lestari';
//         $mahasiswa->tanggal_lahir ='2021-12-31';
//         $mahasiswa->ipk = 3.5;
//         $mahasiswa->save();
        
//         dump($mahasiswa);
//     }
        
    

//      public function logout()
//      {
//      // Hapus session 'username'
//      session()->forget('username');
//      return redirect('login')->with('pesan','Logout berhasil');
//      }
//  }

{
    public function find(){
$result = DB::table('mahasiswas')->find(5);
return view('tampil-mahasiswa', ['mahasiwas'=> [$result]]);
)
    }