@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
                <a href="{{ route('bcategory') }}" class="btn btn-default">กลับ</a>
            </div>
            <div class="card">

                <div class="card-header">แก้ไขข้อมูลหมวดวิชา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bcategory.update' , $category->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อหมวด</label>
                            <div class="col-md-8">
                                <textarea name="name" rows="10" cols="80" value="" class="form-control input-lg">{{ $category->name }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">จำนวนหน่วยกิต</label>
                            <div class="col-md-8">
                                <input type="text" name="credit" value="{{ $category->credit }}" class="form-control input-lg"/>
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
