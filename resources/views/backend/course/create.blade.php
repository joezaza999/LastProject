@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="card">
            <div class="card-header">เพิ่มข้อมูลหลักสูตร</div>

                <div class="card-body">
                    {!! Form::open(array('url'=>'bposition','files'=>true)) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','ชื่อสาขา(ไทย)'); ?>
                            <?= Form::text('name', null,['class'=>'form-control','placeholder'=>'ระบุสาขาไทย']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','ชื่อสาขา(อังกฤษ)'); ?>
                            <?= Form::text('name', null,['class'=>'form-control','placeholder'=>'ระบุสาขาอังกฤษ']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','กลุ่มวิชา'); ?>
                            <?= Form::text('name', null,['class'=>'form-control','placeholder'=>'ระบุกลุ่มวิชา']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','จำนวนหน่วยกิต'); ?>
                            <?= Form::text('name', null,['class'=>'form-control','placeholder'=>'ระบุหน่วยกิต']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','รูปแบบหลักสูตร'); ?>
                            <?= Form::text('name', null,['class'=>'form-control','placeholder'=>'ระบุหลักสูตร']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','คุณสมบัติผู้เข้าศึกษา'); ?>
                            <?= Form::textarea('name', null,['class'=>'form-control','placeholder'=>'ระบุคุณสมบัติ']); ?>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="form-group">
                            <?= Form::label('name','แนวทางการประกอบอาชีพ'); ?>
                            <?= Form::textarea('name', null,['class'=>'form-control','placeholder'=>'ระบุแนวทาง']); ?>
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
