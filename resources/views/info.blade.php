<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Informasi</title>
</head>
<body>


@extends('layouts.master')
@section('title','info')
@section('menuInfo','active')

@section('content')

 <div class="container text-center mt-3 p-4 bg-white">
 <h1>Informasi</h1>   
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper in elementum pharetra in cursus nibh, Vestibulum, egestas odio lobortis porta neque ultricies. Tincidunt molestie mauris nibh purus fusce.</p>

 <div></div>
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

 <!-- <div class="col-4 mt-4">
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
 </div> -->
 </div>
 </div>


 @endsection

 </body>
 </html>