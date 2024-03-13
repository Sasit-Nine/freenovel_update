@extends('layouts.app')
@section('title')
    Category
@endsection
@section('content')
<div class="container py-2">
    <h1>หมวดหมู่นิยาย</h1>
    <hr>
    <div class="container cards-wrapper d-flex gx-5 my-5" >
    <div class="row gy-3">
        <div class="col-md-3">
        <div class="card">
            <img src="/img/love.jpg" class="card-img-top " style="width: 200px; height: 200px;">
            <div class="card-body">
            <h5 class="card-title">ความรัก</h5>
            <p class="card-text">นิยายหมวดหมู่ความรัก</p>
            <a href="" class="btn btn-primary mt-3">เลือกชม  </a>
            </div>
        </div>  
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="/img/funny.jpeg" class="card-img-top w-200 h-200" alt="...">
                <div class="card-body">
                <h5 class="card-title">ตลก</h5>
                <p class="card-text">นิยายหมวดหมู่ตลก</p>
                <a href="" class="btn btn-primary mt-3">เลือกชม</a>
                </div>
            </div>  
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="/img/love.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">สืบสวน</h5>
                <p class="card-text">นิยายหมวดหมู่สืบสวน</p>
                <a href="" class="btn btn-primary mt-3">เลือกชม</a>
                </div>
            </div>  
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="/img/love.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">แฟนตาซี</h5>
                <p class="card-text">นิยายหมวดหมู่แฟนตาซี</p>
                <a href="" class="btn btn-primary mt-3">เลือกชม</a>
                </div>
            </div>  
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="/img/love.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">สยองขวัญ</h5>
                <p class="card-text">นิยายหมวดหมู่สยองขวัญ</p>
                <a href="" class="btn btn-primary mt-3">เลือกชม</a>
                </div>
            </div>  
        </div>
        
    </div>  
    </div>
</div>
@endsection