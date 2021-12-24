<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>


@extends('layouts.master')
@section('title','gallery')
@section('menuGallery','active')

@section('content')

 <div class="container text-center mt-3 p-4 bg-white">
 <h1>Gallery</h1>
 <div class="row">
 <div class="col-4">
 <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250"
 class="img-thumbnail img-fluid">
 </div>
 <div class="col-4">
 <img src="https://source.unsplash.com/kfwPJieZVwI/350x250"
 class="img-thumbnail img-fluid">
 </div>
 <div class="col-4">
 <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250"
 class="img-thumbnail img-fluid">
 </div>
 <div class="col-4 mt-4">
 <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250"
 class="img-thumbnail img-fluid">
 </div>
 <div class="col-4 mt-4">
 <img src="https://source.unsplash.com/T-tVt4xsCdE/350x250"
 class="img-thumbnail img-fluid">
 </div>
 <div class="col-4 mt-4">
 <img src="https://source.unsplash.com/F8t2VGnI47I/350x250"
 class="img-thumbnail img-fluid">
 </div>
 </div>
 </div>


 @endsection

 </body>
 </html>