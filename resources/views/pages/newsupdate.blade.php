@extends('layouts.master')

@section('content')
<div class="body">
<<<<<<< Updated upstream
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">ประชาสัมพันธ์</a>
</div>
=======
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ประชาสัมพันธ์</li>
  </ol>
>>>>>>> Stashed changes


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
<<<<<<< Updated upstream
                <h6><a href="#0" class="card__title1">{{ $newsupdate->content }}</a></h6>
=======
                <h6><a href="#0" class="card__title">{{ $newsupdate->content }}</a></h6>
>>>>>>> Stashed changes
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach  
    <div>
<<<<<<< Updated upstream
      <img class="img-fluid" src="<?php echo asset('assets/img/w.png'); ?>" width="500px" height="" alt=""/>
    </div> 
=======
      <img class="img-fluid" src="<?php echo asset('assets/img/1.jpg'); ?>" width="100%" height="" alt=""/>
    </div>
>>>>>>> Stashed changes
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
