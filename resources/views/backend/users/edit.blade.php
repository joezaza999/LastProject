@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('busers') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลผู้ใช้ </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('busers.update' , $user->id) }}" enctype="multipart/form-data">

                        @csrf
                       {{ method_field('PUT')}}
                       @foreach($roles as $role)
                       <div class="form-check">
                           <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                           <label>{{ $role->name }}</label>
                       </div>
                       @endforeach
                    <button type="submit" class="btn btn-primary">

                
                    </button>
                       
                    </form>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection
