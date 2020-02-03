@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">กิจกรรม</a>
</div>
      <div class="content">
      <div class="row">
    <div class="leftcolumn1">
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
                <h6 class="card__title">{{ $activitie->title }}</h6>
                  <p class="card__title1">{{ $activitie->content }}</p><br>
                  <a href="{{ url('/activities/show/'.$activitie->id)  }}">ดูรายละเอียด</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  
{!! $activities->render() !!}
</div>
</div>
      </div>
    </div>
<script>
  (function() {
  var $grid = $('.grid').imagesLoaded(function() {
    $('.site__wrapper').masonry({
      itemSelector: '.grid'
    });
  });
})();
</script>
@endsection
