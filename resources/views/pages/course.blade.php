@extends('layouts.master')

@section('content')
<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">หลักสูตรและการสอน</a>
</div>

<div class="content">
    <div class="container">
      
    @foreach ($courses as $course)
    <h4>ชื่อภาษาไทย</h4>
      <div>{{ $course->namethai }}</div><br>
      <h4>ชื่อภาษาอังกฤษ</h4>
      <div>{{ $course->nameeng }}</div><br>
      <h4>กลุ่มวิชา</h4>
      <div>{{ $course->group }}</div><br>
      <h4>จำนวนหน่วยกิตที่เรียนทั้งหมด</h4>
      <div>{{ $course->credit }}</div><br>
      <h4>รูปแบบหลักสูตร</h4>
      <div>{{ $course->format }}</div><br>
      <h4>คุณสมบัติผู้เข้าศึกษา</h4>
      <div>{{ $course->property }}</div><br>
      <h4>แนวทางการประกอบอาชีพ</h4>
      <div>{{ $course->job }}</div>
    @endforeach
    <div>
      <img class="img-fluid" src="<?php echo asset('assets/img/w.png'); ?>" width="500px" height="" alt=""/>
    </div> 
    </div>
</div>
</div>
@endsection