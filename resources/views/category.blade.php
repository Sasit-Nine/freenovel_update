@extends('layouts.app')
@section('title')
    Category
@endsection
@section('content')
<div class="container py-2">
    <h1>{{$namecat}}</h1>
    <hr>
    <div class="container cards-wrapper d-flex gx-5 my-5">
    <div class="row gy-3">
    @foreach ($novelcat as $item)
        <div class="col-md-3">
        <div class="card">
            <img src="{{$item->img}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">หมวดหมู่ : {{$item->category}}</p>
            <a href="/blog/{{$item->id}}" class="btn btn-primary mt-3">อ่านเลย</a>
            </div>
        </div>  
        </div>
        @endforeach   
    </div>  
    </div>
</div>
@endsection