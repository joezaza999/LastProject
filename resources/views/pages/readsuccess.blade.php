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
    </div>
@endsection
