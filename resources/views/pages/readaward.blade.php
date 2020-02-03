@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">รางวัล</a>
</div>
      <div class="content">
        <div class="jumpbotron">
        <img src="{{ URL::to('/') }}/images/{{ $award->image }}" class="img-thumbnail" />
        <h5>{{ $award->title }}</h5><br><br>
        <h6>{{ $award->content }}</h6>
        </div>
    </div>
</div>

@endsection