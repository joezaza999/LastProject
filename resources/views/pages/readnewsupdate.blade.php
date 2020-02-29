@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="#">Home</a>
      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
      <li class="breadcrumb-item"><a class="black-text" href="#">Library</a>
      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
<div class="topnav" id="myTopnav">
  <a href="" class="">ประชาสัมพันธ์</a>
</div>
      <div class="content">
        <div class="jumpbotron">
        <img src="{{ URL::to('/') }}/images/{{ $newsupdate->image }}" class="img-thumbnail" />
        <h5>{{ $newsupdate->title }}</h5><br><br>
        <h6>{{ $newsupdate->content }}</h6>
        </div>
    </div>
</div>
    </div>
@endsection
