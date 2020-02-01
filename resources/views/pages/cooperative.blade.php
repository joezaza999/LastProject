@extends('layouts.master')

@section('content')
<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">สหกิจศึกษา</a>
</div>
      <div class="content">
      <div class="container">

    @foreach($cooperatives as $cooperative)
    <div class="wrapper">
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img src="{{ asset('images/'.$cooperative->image) }}" class="card-img-top">
            <div class="card__overlay">
              <div class="card__overlay-content">
                <ul class="card__meta">
                  <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                  <li><a href="#0"><i class="fa fa-clock-o"></i>{{ $cooperative->updated_at }}</a></li>
                </ul>

                <p><a href="#0" class="card__title">{{ $cooperative->name }}</a></p>
                <p><a href="#0" class="card__title1">{{ $cooperative->text }}</a></p><br>
                <a href="files/{{ $cooperative->file }}" download="{{ $cooperative->file }}">
                    <button type="button" class="btn btn-primary">ดาวน์โหลดไฟล์</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div>
      <img class="img-fluid" src="<?php echo asset('assets/img/w.png'); ?>" width="500px" height="" alt=""/>
    </div>
{!! $cooperatives->render() !!}
<script>
  (function() {
  var $grid = $('.grid').imagesLoaded(function() {
    $('.site__wrapper').masonry({
      itemSelector: '.grid'
    });
  });
})();
</script>
</div>
</div>
</div>
@endsection
