@extends('layouts.master')

@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">หลักสูตรและการสอน</li>
  </ol>

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
    </div>
</div>
@endsection