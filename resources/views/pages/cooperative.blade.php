@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">ผลงานสหกิจศึกษา</li>
    </ol>
  </nav>
      <div class="content">
      <div class="">
        <h3>ผลงานสหกิจศึกษา</h3>
      </div>
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



