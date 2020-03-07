@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">สถานที่ฝึกประสบการณ์</li>
    </ol>
  </nav>
<div class="content">
      <div class="">
        <h3>สถานที่ฝึกประสบการณ์</h3>
      </div>
    <hr>

<!-- <div class="row">
<h2>สถานประกอบการฝึกงาน</h2>
    <div class="leftcolumn1">
    @foreach($apprentices as $appretice)
    <p>{!!$appretice->location!!}</p><br>
    @endforeach
    </div>
</div> -->
</div>
</div>
</div>
@endsection