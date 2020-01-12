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
                <div class="card-header">เพิ่มข้อมูลสหกิจ</div>

                <div class="card-body">
                    {!! Form::open(array('url'=>'bactivities','files'=>true)) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('title','หัวข้อ'); ?>
                            <?= Form::text('title', null,['class'=>'form-control','placeholder'=>'ระบุหัวข้อ']); ?>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('image','รูปภาพ'); !!}<br>
                            <?= Form::file('image',null,['class'=>'form-control']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('content','เนื้อหา'); ?>
                            <?= Form::textarea('content', null,['class'=>'form-control','placeholder'=>'ระบุเนื้อหา']); ?>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10">
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