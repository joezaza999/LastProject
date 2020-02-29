@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">แบบฟอร์มงานทะเบียน</li>
    </ol>
  </nav>
<div class="content">
      <div class="row">
    <div class="leftcolumn1">
      <h3><c class="fa fa-cloud-download"></c> แบบฟอร์มงานทะเบียน</h3><br>
    @foreach($forms as $form)
 <a href="{{ asset('files/'.$form->file)}}" download="{{ $form->file }}">
  
                <h5>  <c class="fa fa-print"></c> {{ $form->name }}</h5> </a><br>
    @endforeach
    <div>
      <img class="img-fluid" src="<?php echo asset('assets/img/w.png'); ?>" width="500px" height="" alt=""/>
    </div> 
    </div>
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