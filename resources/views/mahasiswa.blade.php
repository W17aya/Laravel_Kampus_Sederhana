<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/dosen">Data Dosen</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/gallery">Gallery</a>
</li>
</ul>
</nav>

<div class="container text-center mt-3 p-4 bg-white">
    <h1> data mahasiswa     </h1>
    div class="row">
 <div class="col-sm-8 col-md-6 m-auto">
 <ol class="list-group">
 @forelse ($mahasiswa as $val)
 <li class="list-group-item">{{$val}}</li>
 @empty
 <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
 @endforelse
 </ol>
 </div>
</div>
 </div>

</div>

<footer class="bg-dark py-4 text-white mt-4">
<div class="container">
3 Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} w17aya


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</footer>
</body>
</html>