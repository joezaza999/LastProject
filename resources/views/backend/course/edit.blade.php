@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('bcourse') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลหลักสูตร</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bcourse.update' , $course->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อสาขา(ไทย)</label>
                            <div class="col-md-8">
                                <input type="text" name="namethai" value="{{ $course->namethai }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อสาขา(ไทย)</label>
                            <div class="col-md-8">
                                <input type="text" name="nameeng" value="{{ $course->nameeng }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">กลุ่มวิชา</label>
                            <div class="col-md-8">
                                <textarea name="group" rows="10" cols="80" value="" class="form-control input-lg">{{ $course->group }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">จำนวนหน่วยกิต</label>
                            <div class="col-md-8">
                                <input type="text" name="credit" value="{{ $course->credit }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">รูปแบบหลักสูตร</label>
                            <div class="col-md-8">
                                <textarea name="format" rows="10" cols="80" value="" class="form-control input-lg">{{ $course->format }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">คุณสมบัติผู้เข้าศึกษา</label>
                            <div class="col-md-8">
                                <textarea name="property" rows="10" cols="80" value="" class="form-control input-lg">{{ $course->property }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">แนวทางการประกอบอาชีพ</label>
                            <div class="col-md-8">
                                <textarea name="job" rows="10" cols="80" value="" class="form-control input-lg">{{ $course->job }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-10">
                                <input type="submit" name="submit" class="btn btn-primary input-lg" value="แก้ไข" />
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
