@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            @if (count($errors) > 0)
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             @endif
            <div class="card">
                <div class="card-header">เพิ่มรูปภาพ</div>

                <div class="card-body">
                {!! Form::open(array('url'=>'bslideshow','files'=>true)) !!}
                <div class="col-md-8">
                    <div class="form-group">
                        {!! Form::label('image','รูปภาพ'); !!}<br>
                        <?= Form::file('image',null,['class'=>'form-control']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-10">
                        <?= Form::submit('บันทึก',['class'=>'btn btn-primary']); ?>
                    </div>
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
