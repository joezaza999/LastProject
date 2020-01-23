@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
        <li class="breadcrumb-item active" aria-current="page">กิจกรรม</li>
      </ol>
      <div class="content">
    @foreach($activities as $activitie)
    <div class="wrapper">
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img src="{{ asset('images/'.$activitie->image) }}" class="card-img-top">
            <div class="card__overlay">
              <div class="card__overlay-content">
                <ul class="card__meta">
                  <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                  <li><a href="#0"><i class="fa fa-clock-o"></i>{{ $activitie->updated_at }}</a></li>
                </ul>
    
                <h5><a href="#0" class="card__title">{{ $activitie->title }}</a></h5>
                <h6><a href="#0" class="card__title">{{ $activitie->content }}</a></h6>
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
{!! $activities->render() !!}
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
@endsection
