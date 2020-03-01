@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">รางวัล</li>
    </ol>
  </nav>
      <div class="content">
      <div class="">
        <h3>ผลงานฝึกงาน</h3>
      </div>
    <hr>
      <div class="row">
      @foreach($awards as $award)
      <div class="col-md-4">
        <div class="card-wrapper">
          <div class="thumbnail-container">
            <a href="#">
              <img src="{{ asset('images/'.$award->image) }}" class="card-img-top">
            </a>
          </div>
          <div class="card-desc-wrapper">
            <div class="card-desc-container">
              <div class="card-desc-cont">
                  <div class="card-desc-header">{{ $award->title }}</div>
                  <div class="card-desc-desc"><p>{!! $award->content !!}</p></div>
              </div>
              <div class="card-desc-link"><a href="{{ url('/awards/show/'.$award->id)  }}">ดูเพิ่มเติม</a></div>
                  <div class="card-desc-tag">รางวัล</div>
            </div>
            </div>
        </div>
      </div>
      @endforeach
 
  
{!! $awards->render() !!}
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
