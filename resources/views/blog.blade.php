@extends('layouts.app')
@section('title')
    All Novel
@endsection
@section('content')
@if (count($novel)>0)
<div class="container py-2 mt-3 my-5">
    <h1>นิยายทั้งหมด</h1>
    <table class="table table-hover table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">หน้าปก</th>
            <th scope="col">เรื่อง</th>
            <th scope="col">หมวดหมู่</th>
            <th scope="col">สถานะ</th>
            <th scope="col">เมนู</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($novel as $item)
            <tr>
                <td class="col-3"><img src="{{$item->img}}" class="rounded mx-auto d-block w-50" alt="..."></td>
                <th class="align-middle col-2" scope="row">{{$item->title}}</th>
                
                <td class="align-middle col-1">{{$item->category}}</td>
                @if ($item->status==true)
                    <td class="text text-success align-middle col-1">เผยแพร่แล้ว</td>
                @else
                    <td class="text text-danger align-middle col-1">ฉบับร่าง</td>
                @endif
                <td class="align-middle col-5">
                    <a href="{{route('delete',$item->id)}}" class="btn btn-danger w-25"
                    onclick="return confirm('คุณต้องการลบนิยาย {{$item->title}} หรือไม่ ?')"    
                    >ลบ</a>
                    <a href="{{route('edit',$item->id)}}" class="btn btn-warning w-25">แก้ไข</a>
                    <a href="{{route('change',$item->id)}}" class="btn btn-success w-25">เปลี่ยนสถานะ</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
      {{$novel->links()}}
      <div class="text-center">
        <hr>
      </div>
</div>
@else
    <h1>ไม่มีนิยายในระบบ</h1>  
@endif


@endsection
    