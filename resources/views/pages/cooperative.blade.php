@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
      <h2>สหกิจศึกษา</h2>
      <div class="row">
    <div class="leftcolumn1">
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
                <p class="card__title">{{ $cooperative->name }}</p>
                <p class="card__title1">{{ $cooperative->text }}</p><br>
                <c class="fa fa-print"></c>  <a href="files/{{ $cooperative->file }}" download="{{ $cooperative->file }}">
                  {{ $cooperative->file }} </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

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
</div>
@endsection
