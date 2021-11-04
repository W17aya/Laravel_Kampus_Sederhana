<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

 @section('content')
 <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{$judul}}</div>
 <div class="card-body">
 <p>Bla... bla..</p>
 </div>
 </div>
 </div>
 </div>
 </div>
 @endsection
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
 <div class="container">
 <button class="navbar-toggler" type="button" data-toggle="collapse"
 data-target="#navbar" >
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbar">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item">
 <a class="nav-link" href="{{url('/daftar-mahasiswa')}}">
 Daftar Mahasiswa
 </a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="{{url('/tabel-mahasiswa')}}">
 Tabel Mahasiswa
 </a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="{{url('/blog-mahasiswa')}}">
 Blog Mahasiswa
 </a>
 </li>
 </ul>
 <ul class="navbar-nav">
 <li class="nav-item">
 <span class="text-light">Hello, {{ session('username')}} </span> <a class="nav-link d-inline" href="{{url('/logout')}}">Logout</a>
 </li>
 </ul>
 </div>
 </div>
 </nav>
<div class="container">
    <h2 class="text-center my-4">{{$judul}}</h2>
    <hr>
</div>
<script src="/js/jquery-3.3.1.slim.min.js"></script>
 <script src="/js/popper.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
</body>
</html>