@extends('layouts.master')

@section('content')
    <div class="body">
      <br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">ความสำเร็จของศิษย์เก่า</a>
</div>
      <div class="content">
        <div class="jumpbotron">
        <img src="{{ URL::to('/') }}/images/{{ $success->image }}" class="img-thumbnail" />
        <h5>{{ $success->name }}</h5><br><br>
        <h6>{{ $success->text }}</h6>
        </div>
    </div>
</div>

@endsection
