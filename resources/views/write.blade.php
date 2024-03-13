@extends('layouts.app')
@section('title')
    Write
@endsection
@section('content')
    <div class="container mt-3 my-5">
        <h1>เขียนนิยายใหม่</h1>
        <form action="/author/insert" class="form-control p-5 " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">อัปโหลดปกนิยาย</label>
                <input class="form-control" type="file" name="img" id="formFile">
            </div>
            <div class="form-group">
                <label for="title">ชื่อเรื่อง</label>
                <input type="text" name="title" class="form-control">
            </div>
            @error('title')
                <div class="my-2">
                    <span class="text text-danger">{{$message}}</span>
                </div>
            @enderror
            <div class="form-group mt-2 ">
                <label for="category">หมวดหมู่</label>
                <select name="category" id="" class="form-control">
                    <option value="นิยายรัก">นิยายรัก</option>
                    <option value="แฟนตาซี">แฟนตาซี</option>
                    <option value="ตลก">ตลก</option>
                    <option value="สืบสวน">สืบสวน</option>
                    <option value="สยองขวัญ">สยองขวัญ</option>
                </select>
            </div>
            <div class="form-group mt-2 ">
                <label for="status">อนุญาตการเข้าถึง</label>
                <select name="status" id="" class="form-control">
                    <option value="1">เผยแพร่</option>
                    <option value="0">ฉบับร่าง</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="content">เนื้อหา</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            @error('content')
                <div class="my-2">
                    <span class="text text-danger">{{$message}}</span>
                </div>
            @enderror
            <input type="submit" value="บันทึก" class="btn btn-success mt-3">
            <a href="/blog" class="btn btn-warning mt-3">นิยายทั้งหมด</a>
        </form>
        <script>
            ClassicEditor
                .create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        
    </div>
    
@endsection