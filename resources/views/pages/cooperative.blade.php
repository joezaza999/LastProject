@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="content">
        <h2>สหกิจศึกษา</h2>
      <div class="row">
      @foreach($cooperatives as $cooperative)
      <div class="col-md-4">
        <div class="card-wrapper">
          <div class="thumbnail-container">
            <a href="#">
              <img src="{{ asset('images/'.$cooperative->image) }}" class="card-img-top">
            </a>
          </div>
          <div class="card-desc-wrapper">
            <div class="card-desc-container">
              <div class="card-desc-cont">
                  <div class="card-desc-header">{{ $cooperative->name }}</div>
                  
                  <c class="fa fa-print"></c>  <a href="files/{{ $cooperative->file }}" download="{{ $cooperative->file }}">
                    {{ $cooperative->file }} </a>
                    <div class="card-desc-desc"><p>{!! $cooperative->text !!}</p></div><br>
              </div>
                  <div class="card-desc-tag">สหกิจศึกษา</div>
            </div>
            </div>
        </div>
      </div>
      @endforeach
 
  
{!! $cooperatives->render() !!}
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



