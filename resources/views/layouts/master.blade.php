<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css')}} " rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
 
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link  @yield('menuOrmawa')" href="/Ormawa">Ormawa.</a>
                    </li>
        <div> </div>
        <li class="nav-item">
            <a class="nav-link @yield('menuBeranda')" href="/Beranda">Beranda</a>
                    </li>
        <li class="nav-item">
            <a class="nav-link @yield('menuOrmawa')" href="/Ormawa">Ormawa</a>
                    </li>
        <li class="nav-item">
            <a class="nav-link @yield('menuDaftar')" href="/Daftar">Daftar</a>
                    </li>
                <a class="nav-link @yield('menuInfo')"" href="/info">Informasi</a>
</li>
        <li class="nav-item">
            <a class="nav-link @yield('menuDiskusi')" href="/Diskusi">Diskusi</a>
                    </li>
        <!-- <li class="nav-item">
            <a class="nav-link @yield('menuMahasiswa')" href="/mahasiswa">Data Mahasiswa</a>
                    </li>
<li class="nav-item">
    <a class="nav-link @yield('menuDosen')"" href="/dosen">Data Dosen</a>
</li>
<li class="nav-item"> -->

<!-- <li class="nav-item">
<a class="nav-link @yield('menuInfo')"" href="{{route('info',['fakultas' => 'FMIPA',
 'jurusan' => 'Matematika'])}}">Info</a>
 </li> -->
  </ul>
</nav>
@yield('content')

<footer class="bg-dark py-4 text-while mt-4">
    <div class="container">
        Sistem Informasi Mahasiswa | Copyright {{ date ("Y")}} W17aya
    </div>
</footer>
</body>
</html>