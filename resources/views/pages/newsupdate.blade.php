@extends('layouts.master')

@section('content')
<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">ประชาสัมพันธ์</a>
</div>


<div class="content">
<div class="container">
    @foreach($newsupdates as $newsupdate)
    <div class="wrapper">
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img src="{{ asset('images/'.$newsupdate->image) }}" class="card-img-top" style="width:355px";>
            <div class="card__overlay">
              <div class="card__overlay-content">
                <ul class="card__meta">
                  <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                  <li><a href="#0"><i class="fa fa-clock-o"></i>{{ $newsupdate->updated_at }}</a></li>
                </ul>
    
                <h5><a href="#0" class="card__title">{{ $newsupdate->title }}</a></h5>
                <h6><a href="#0" class="card__title1">{{ $newsupdate->content }}</a></h6>
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
{!! $newsupdates->render() !!}
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
