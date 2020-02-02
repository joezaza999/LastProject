@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
                <a href="{{ route('bform') }}" class="btn btn-default">กลับ</a>
            </div>
            <div class="card">

                <div class="card-header">แก้ไขข้อมูลแบบฟอร์ม</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bform.update' , $forms->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-right">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $forms->name }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เลือกไฟล์</label>
                            <div class="col-md-8">
                                <input type="file" name="file" />
                                <input type="hidden" name="hidden_file" value="{{ $forms->file }}" />
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
