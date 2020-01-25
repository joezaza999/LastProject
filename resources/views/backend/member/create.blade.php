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
                <a href="{{ route('bmembers') }}" class="btn btn-default">กลับ</a>
            </div>
            <br><br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลบุคลากร</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bmembers.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 text-right">ชื่อบุคลากร</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกชื่อบุคลากร"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">ตำแหน่ง</label>
                            <select class="form-control" name="position_id">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            </select>
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
    </div>
</div>
@endsection
