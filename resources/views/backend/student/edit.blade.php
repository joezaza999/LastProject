@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
                <a href="{{ route('bstudent') }}" class="btn btn-default">กลับ</a>
            </div>
            <div class="card">

                <div class="card-header">แก้ไขข้อมูลนักศึกษา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bstudent.update' , $students->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-right">รหัสนักศึกษา</label>
                            <div class="col-md-8">
                                <input type="text" name="studentcode" value="{{ $students->studentcode }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $students->name }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">รุ่น</label>
                            <div class="col-md-8">
                                <input type="text" name="generation" value="{{ $students->generation }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $students->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $students->image }}" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-primary input-lg" value="แก้ไข" />
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection
