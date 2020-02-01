@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
                <a href="{{ route('bcooperative') }}" class="btn btn-default">กลับ</a>
            </div>
            <br><br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลสหกิจศึกษา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bcooperative.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 text-right">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกชื่อสหกิจศึกษา"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="text" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เลือกไฟล์</label>
                            <div class="col-md-8">
                                <input type="file" name="file" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-primary input-lg" value="เพิ่มข้อมูล" />
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection
