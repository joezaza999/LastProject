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
                <div class="card-header">เพิ่มข้อมูลหลักสูตร</div>

                <div class="card-body">
                    {!! Form::open(array('url'=>'bcourse','files'=>true)) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('namethai','ชื่อสาขา(ไทย)'); ?>
                            <?= Form::text('namethai', null,['class'=>'form-control','placeholder'=>'ระบุสาขาไทย']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('nameeng','ชื่อสาขา(อังกฤษ)'); ?>
                            <?= Form::text('nameeng', null,['class'=>'form-control','placeholder'=>'ระบุสาขาอังกฤษ']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('group','กลุ่มวิชา'); ?>
                            <?= Form::text('group', null,['class'=>'form-control','placeholder'=>'ระบุกลุ่มวิชา']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('credit','จำนวนหน่วยกิต'); ?>
                            <?= Form::text('credit', null,['class'=>'form-control','placeholder'=>'ระบุหน่วยกิต']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('format','รูปแบบหลักสูตร'); ?>
                            <?= Form::text('format', null,['class'=>'form-control','placeholder'=>'ระบุหลักสูตร']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('property','คุณสมบัติผู้เข้าศึกษา'); ?>
                            <?= Form::textarea('property', null,['class'=>'form-control','placeholder'=>'ระบุคุณสมบัติ']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('job','แนวทางการประกอบอาชีพ'); ?>
                            <?= Form::textarea('job', null,['class'=>'form-control','placeholder'=>'ระบุแนวทาง']); ?>
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
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
