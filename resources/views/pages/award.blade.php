@extends('layouts.master')

    @section('content')
    <div class="body">
    <br><br><br><br><br>
<div class="content">
      <h2>รางวัล</h2>
      <div class="row">
    <div class="leftcolumn1">
    @foreach($awards as $award)
    <div class="wrapper">
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img src="{{ asset('images/'.$award->image) }}" class="card-img-top">
            <div class="card__overlay">
              <div class="card__overlay-content">
                <ul class="card__meta">
                  <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                  <li><a href="#0"><i class="fa fa-clock-o"></i>{{ $award->updated_at }}</a></li>
                </ul>
                <h6 class="card__title">{{ $award->title }}</h6>
                  <p class="card__title1">{{ $award->content }}</p><br>
                  <a href="{{ url('/award/show/'.$award->id)  }}">ดูรายละเอียด</a>
              </div>
            </div>
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