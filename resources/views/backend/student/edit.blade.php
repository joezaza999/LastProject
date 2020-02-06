@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('bstudent') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลนักศึกษา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bstudent.update' , $student->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-left">รหัสนักศึกษา</label>
                            <div class="col-md-8">
                                <input type="text" name="studentcode" value="{{ $student->studentcode }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $student->name }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">รุ่น</label>
                            <div class="col-md-8">
                            <select class="form-control" name="generation_id">
                                @foreach ($generations as $generation)
                                    <option value="{{ $generation->id }}">{{ $generation->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $student->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $student->image }}" />
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
