@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
      <h2>แบบฟอร์ม</h2>
      <div class="row">
    <div class="leftcolumn1">
    @foreach($forms as $form)
                <a href="files/{{ $form->file }}" download="{{ $form->file }}">
                {{ $form->name }} </a><br>
    @endforeach
    <div>
      <img class="img-fluid" src="<?php echo asset('assets/img/w.png'); ?>" width="250px" height="" alt=""/>
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