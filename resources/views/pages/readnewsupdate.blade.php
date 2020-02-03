@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br>
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

@endsection
