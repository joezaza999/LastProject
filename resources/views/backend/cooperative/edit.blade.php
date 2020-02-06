@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('bcooperative') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลสหกิจ</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bcooperative.update' , $cooperatives->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $cooperatives->name }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">ผลงาน</label>
                            <div class="col-md-8">
                                <textarea name="text" rows="10" cols="80" value="" class="form-control input-lg">{{ $cooperatives->text }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $cooperatives->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $cooperatives->image }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เลือกไฟล์</label>
                            <div class="col-md-8">
                                <input type="file" name="file" />
                                <input type="hidden" name="hidden_file" value="{{ $cooperatives->file }}" />
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
