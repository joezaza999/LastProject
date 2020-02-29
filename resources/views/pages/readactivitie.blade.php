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
  <a href="" class="">กิจกรรม</a>
</div>
    <div class="content">
        <div class="jumpbotron">
            <img src="{{ URL::to('/') }}/images/{{ $activities->image }}" class="img-thumbnail" />
            <h5>{{ $activities->title }}</h5><br><br>
            <h6>{!! $activities->content !!}</h6>

            @foreach ($activitieImage as $image)
            <img src="{{ URL::to('/') }}/images/activitie/{{ $image->activitie_id }}/{{ $image->image_path }}" width="230px" height="200px" style="margin: 10px"/>
            @endforeach
        </div>
    </div>
</div>
    </div>
@endsection
