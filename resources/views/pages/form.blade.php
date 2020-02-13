@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
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