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
                <a href="{{ route('bsubject') }}" class="btn btn-default">กลับ</a>
            </div>
            <br><br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลวิชา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bsubject.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 text-left">รหัสวิชา</label>
                            <div class="col-md-8">
                                <input type="text" name="subcode" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อวิชา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="name" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">จำนวนหน่วยกิต</label>
                            <div class="col-md-8">
                                <input type="text" name="credit" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">รายละเอียด</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="text" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-10">
                                <input type="submit" name="submit" class="btn btn-primary input-lg" value="เพิ่มข้อมูล" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection