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
                <a href="{{ route('bnewsupdate') }}" class="btn btn-default">กลับ</a>
            </div>
            <br><br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลประชาสัมพันธ์</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bnewsupdate.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 text-right">หัวข้อ</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control input-lg" placeholder="กรุณากรอกชื่อสหกิจศึกษา"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="content" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-right">ปฏิทิน</label>
                            <input type="date" data-date="" name="date" data-date-format="DD MMMM YYYY" value="" min="2015-01-01" max="3000-12-01">
                            
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-primary input-lg" value="เพิ่มข้อมูล" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
</div>
@endsection
