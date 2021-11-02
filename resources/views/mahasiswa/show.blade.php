<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container mt-3">
    <div class="row">
        <div class="col-12">

        <div class="pt-3">
            <h1 class="h2 mr-auto">Biodata {{$mahasiswa->nama}}</h1>           
        </div>
        <hr>
 <ul>
 <li>NIM: {{$mahasiswa->nim}} </li>
 <li>Nama: {{$mahasiswa->nama}} </li>
 <li>Jenis Kelamin:
 {{$mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}
 </li>
 <li>Jurusan: {{$mahasiswa->jurusan}} </li>
 <li>Alamat:
 {{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}
 </li>
 </ul>

</div>
 </div>
 </div>

 </body>
 </html>