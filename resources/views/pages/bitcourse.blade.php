@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">หลักสูตรเทคโนโลยีสารสนเทศ-การพัฒนาซอฟต์แวร์</li>
    </ol>
  </nav>

<div class="content">
<div class="">
        <h3>หลักสูตรวิชาเทคโนโลยีสารสนเทศ-การพัฒนาซอฟต์แวร์</h3>
    </div>
    <hr>
@foreach ($bitcourses as $bitcourse)
        <p>{!! $bitcourse->text !!}</p>  
    @endforeach
</div>
</div>
</div>
</div>
@endsection