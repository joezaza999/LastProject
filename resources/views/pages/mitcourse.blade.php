@extends('layouts.master')

@section('content')
<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">สถานประกอบการ</a>
</div>


<div class="content">
@foreach ($mitcourses as $mitcourse)
        <p>{!! $mitcourse->text !!}</p>  
    @endforeach
</div>
</div>
@endsection