@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">กิจกรรม</a>
</div>
      <div class="content">
        <div class="jumpbotron">
        <img src="{{ URL::to('/') }}/images/{{ $activities->image }}" class="img-thumbnail" />
        <h5>{{ $activities->title }}</h5><br><br>
        <h6>{{ $activities->content }}</h6>
        </div>
    </div>
</div>

@endsection
