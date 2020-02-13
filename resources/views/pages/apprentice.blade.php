@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="content">
        <h2>ฝึกงาน</h2>
      <div class="row">
      @foreach($apprentices as $apprentice)
      <div class="col-md-4">
        <div class="card-wrapper">
          <div class="thumbnail-container">
            <a href="#">
              <img src="{{ asset('images/'.$apprentice->image) }}" class="card-img-top">
            </a>
          </div>
          <div class="card-desc-wrapper">
            <div class="card-desc-container">
              <div class="card-desc-cont">
                  <div class="card-desc-header">{{ $apprentice->name }}</div>
                  
                  <c class="fa fa-print"></c>  <a href="files/{{ $apprentice->file }}" download="{{ $apprentice->file }}">
                    {{ $apprentice->file }} </a>
                    <div class="card-desc-desc"><p>{!! $apprentice->text !!}</p></div>
              </div>
                  <div class="card-desc-tag">ฝึกงาน</div>
            </div>
            </div>
        </div>
      </div>
      @endforeach
 
  
{!! $apprentices->render() !!}
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



