@extends('layouts.app')
@section('title')
    Welcome
@endsection
@section('content')
<div class="container py-2">
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="copy">
            <div class="text-label">
              ตัวอย่างผลงานการยื่นคำร้องขอฝึกงาน
            </div>
            <div class="text-hero-bold">
              Welcome to Free Novels 
            </div>
            <div class="text-hero-regular">
              ผลงานนี้เป็นการฝึกใช้ Laravel Framework ครั้งแรกของผม โดยใช้เวลาในการเรียนรู้และลงมือทำเป็นเวลา 3 วันครับ 
              หากมีข้อผิดพลาดประการใดต้องขออภัยมา ณ ที่นี้ด้วยครับ <br/>
              <br/>สิทธิ์การใช้งานในระดับนักเขียน
              <br/>1.การเขียนนิยายใหม่
              <br/>2.การกำหนดสถานะการมองเห็นของนิยาย
              <br/>3.การแก้ไขนิยาย
              <br/>4.การลบนิยาย
              <br/>5.การเข้าถึงนิยายทั้งหมด
              <br/><br/>สิทธิ์การใช้งานในระดับผู้ใช้  **ไม่ได้ทำการเข้าสู่ระบบ**
              <br/>1.การอ่านนิยาย
              <br/>2.การเข้าถึงและมองเห็นนิยายที่มีสถานะเผยแพร่
              <br/><br/>บัญชี Admin
              <br/>อีเมลล์ : admin@gmail.com
              <br/>รหัสผ่าน : 12345678


            </div>
            <div class="cta">
              <a href="{{ route('login') }}" class="btn btn-primary shadow-none">เข้าสู่ระบบ Admin</a>
              <a href="{{ route('resume') }}" class="btn btn-secondary shadow-none ms-3">เกี่ยวกับผู้พัฒนา</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="/img/story.png" class="w-100" alt="">
        </div>
      </div>
    </div>
  </section>

    <h1>นิยายล่าสุด</h1>
      <hr>
    <div class="container cards-wrapper d-flex gx-5 my-5">
        <div class="row gy-3">
        @foreach ($novel as $item)
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
    