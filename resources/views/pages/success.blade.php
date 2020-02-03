@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
      <h2>ความสำเร็จของศิษย์เก่า</h2>
<div class="row">
    <div class="leftcolumn1">
    @foreach($success as $success)
    <div class="wrapper">
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img src="{{ asset('images/'.$success->image) }}" class="card-img-top" style="width:355px";>
            <div class="card__overlay">
              <div class="card__overlay-content">
                <ul class="card__meta">
                  <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                  <li><a href="#0"><i class="fa fa-clock-o"></i>{{ $success->updated_at }}</a></li>
                </ul>
                <h6 class="card__title">{{ $success->name }}</h6>
                  <p class="card__title1">{{ $success->text }}</p><br>
                <a href="{{ url('/success/show/'.$success->id)  }}">ดูรายละเอียด</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach  
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
</div>

@endsection