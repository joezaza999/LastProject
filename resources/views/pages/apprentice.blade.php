@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
      <h2>ฝึกงาน</h2>
      <div class="row">
    <div class="leftcolumn1">
    @foreach($apprentices as $apprentice)
    <div class="wrapper">
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img src="{{ asset('images/'.$apprentice->image) }}" class="card-img-top">
            <div class="card__overlay">
              <div class="card__overlay-content">
                <ul class="card__meta">
                  <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                  <li><a href="#0"><i class="fa fa-clock-o"></i>{{ $apprentice->updated_at }}</a></li>
                </ul>
                <p class="card__title">{{ $apprentice->name }}</p>
                <p class="card__title1">{!! $apprentice->text !!}</p><br>
                <c class="fa fa-print"></c><a href="files/{{ $apprentice->file }}" download="{{ $apprentice->file }}">
                  {{ $apprentice->file }} </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

{!! $apprentices->render() !!}
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