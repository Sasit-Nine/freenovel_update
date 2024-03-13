@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card bg-white">
                <div class="card-header">ยินดีต้อนรับ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    เข้าสู่ระบบสำเร็จ
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
