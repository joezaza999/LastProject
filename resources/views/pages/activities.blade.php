@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">กิจกรรม</li>
    </ol>
  </nav>

<div class="content">
<div class="">
        <h3>กิจกรรม</h3>
    </div>
    <hr>

      <div class="content">
      <div class="row">
      @foreach($activities as $activitie)
      <div class="col-md-4">
        <div class="card-wrapper">
          <div class="thumbnail-container">
            <a href="#">
              <img src="{{ asset('images/'.$activitie->image) }}" class="card-img-top">
            </a>
          </div>
          <div class="card-desc-wrapper">
            <div class="card-desc-container">
              <div class="card-desc-cont">
                  <div class="card-desc-header">{{ $activitie->title }}</div>
                  <div class="card-desc-desc"><p>{!! $activitie->content !!}</p></div>
              </div>
              <div class="card-desc-link"><a href="{{ url('/activities/show/'.$activitie->id)  }}">ดูเพิ่มเติม</a></div>
                  <div class="card-desc-tag">กิจกรรม</div>
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
