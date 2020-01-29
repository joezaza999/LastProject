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
                <a href="{{ route('bcourse') }}" class="btn btn-default">กลับ</a>
            </div>
            <br><br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลหลักสูตร</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bcourse.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 text-right">ชื่อสาขา(ไทย)</label>
                            <div class="col-md-8">
                                <input type="text" name="namethai" class="form-control input-lg" placeholder="กรุณากรอกชื่อกิจกรรม"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">ชื่อสาขา(อังกฤษ)</label>
                            <div class="col-md-8">
                                <input type="text" name="nameeng" class="form-control input-lg" placeholder="กรุณากรอกชื่อกิจกรรม"/>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">กลุ่มวิชา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="group" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">จำนวนหน่วยกิต</label>
                            <div class="col-md-8">
                                <input type="text" name="credit" class="form-control input-lg" placeholder="กรุณากรอกชื่อกิจกรรม"/>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">รูปแบบหลักสูตร</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="format" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">คุณสมบัติผู้เข้าศึกษา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="property" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">แนวทางการประกอบอาชีพ</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="job" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
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
