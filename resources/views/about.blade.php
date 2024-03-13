@extends('layouts.app')
@section('title')
    About
@endsection
@section('content')
<div class="container py-2">
    <h1>เกี่ยวกับเรา</h1>
    <p>ผู้พัฒนาระบบ : {{$name}}</p>
    <p>วันที่พัฒนา : {{$date}}</p>
</div>
@endsection