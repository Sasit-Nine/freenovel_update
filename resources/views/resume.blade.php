@extends('layouts.app')
@section('head')
@endsection
@section('title')
    Resume
@endsection
@section('content')
<div class="container">
    <section class="hero">
        
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 mt-3 ms-5">
                <img src="/img/profile.jpeg" class="w-100 rounded" alt="">
            </div>
                
            <div class="col-5 ms-3">
                <div class="copy">
                <div class="text-label">
                    พัฒนาโดย
                </div>
                <div class="text-hero-bold">
                    SASIT SUANSADANG    
                </div>
                <p class="text-hero-regular-black">
                    ข้อมูลทั่วไป
                    <p class="text-hero-regular">
                        ชื่อ : นายศศิศ สวนแสดง<br>
                        ชื่อเล่น : นาย<br>
                        อายุ : 18 ปี<br>
                        เชื้อชาติ : ไทย   สัญชาติ : ไทย<br>
                        สถานศึกษา : วิทยาลัยเทคนิคหาดใหญ่<br>
                        เกรดเฉลี่ยรวม : 4.00<br>
                        โทรศัพท์ : 083-324-9595
                    </p>
                </p>
                </div>
            </div>
            <div class="col justify-content-center ">
                <div class="row mt-5">
                    <a href="https://www.facebook.com/profile.php?id=100022905822548" target="_blank">
                        <i class='bx bxl-facebook-square my-5 bx-tada-hover bx-lg' style="color: #3184f4"></i>
                    </a>    
                    <a href="https://www.instagram.com/nine_ns1/" target="_blank">                  
                        <i class='bx bxl-instagram-alt my-5 bx-tada-hover bx-lg' style="color: #e55257;" href=""></i>
                    </a>
                    <a href="https://github.com/Sasit-Nine/free_novel_system" target="_blank">
                        <i class='bx bxl-github my-5 bx-tada-hover bx-lg' style="color: #f05a42;" href=""></i>
                    </a>
            </div>
            </div>
        </div>
        <hr>
        
      </div>
      
    </section>
</div>
@endsection