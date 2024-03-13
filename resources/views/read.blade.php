@extends('layouts.app')
@section('head')
<style>
    .fixed-size-image {
      width: 250px;
      height: 250px;
    }
  </style>
@endsection
@section('title')
    Read
@endsection
@section('content')
<div class="container py-2 my-5">
    <div class="card pt-4 pb-4 ps-4 pb-4 pe-4">
        <img src="{{$novel->img}}" class="rounded mx-auto d-block fixed-size-image mt-3 mb-3" alt="...">
        <h2>{{$novel->title}}</h2>
        <hr>
        <p>{!!($novel->content)!!}</p>
    </div>
    
</div>
@endsection