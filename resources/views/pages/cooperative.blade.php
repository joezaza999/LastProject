@extends('layouts.master')

@section('content')
<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">สหกิจศึกษา</a>
</div>
<<<<<<< Updated upstream
      <div class="content">
      <div class="container">
      
=======


<div class="content">
      <div class="container">
>>>>>>> Stashed changes
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
                <p><a href="#0" class="card__title1">{{ $cooperative->text }}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach  
    <div>
<<<<<<< Updated upstream
      <img class="img-fluid" src="<?php echo asset('assets/img/w.png'); ?>" width="100px" height="" alt=""/>
=======
      <img class="img-fluid" src="<?php echo asset('assets/img/1.jpg'); ?>" width="100%" height="" alt=""/>
>>>>>>> Stashed changes
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