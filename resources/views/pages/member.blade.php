@extends('layouts.master')


@section('content')


     
<div class="content">
<!-- Header -->
<header class="bg-primary text-center py-5 mb-4">
    <div class="container">
      <h1 class="font-weight-light text-white">Meet the Team</h1>
    </div>
  </header>
  
  <!-- Page Content -->
  <div class="container">
    <div class="row justify-content-md-center">
      <!-- Team Member 1 -->  
      <div class="col-xl-3 col-md-2 mb-2">
        <div class="card border-0 ">
          <img class="card-img-top" src="<?php echo asset('assets/img/60.png'); ?>" width="100%" height="100%" alt=""></a>
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
    </div>
      <!-- Team Member 2 -->
      <div class="row justify-content-md-center">
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
            <img class="card-img-top" src="<?php echo asset('assets/img/61.png'); ?>" width="100%" height="100%" alt=""></a>
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
            <img class="card-img-top" src="<?php echo asset('assets/img/62.png'); ?>" width="100%" height="100%" alt=""></a>
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      
      <!-- Team Member 4 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
            <img class="card-img-top" src="<?php echo asset('assets/img/63.png'); ?>" width="100%" height="100%" alt=""></a>
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
     <!-- Team Member 5 -->
     <div class="row justify-content-md-center">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
              <img class="card-img-top" src="<?php echo asset('assets/img/64.png'); ?>" width="100%" height="100%" alt=""></a>
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Team Member</h5>
              <div class="card-text text-black-50">Web Developer</div>
            </div>
          </div>
        </div>
        <!-- Team Member 6 -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
              <img class="card-img-top" src="<?php echo asset('assets/img/65.png'); ?>" width="100%" height="100%" alt=""></a>
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Team Member</h5>
              <div class="card-text text-black-50">Web Developer</div>
            </div>
          </div>
        </div>
        
        <!-- Team Member 7 -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
              <img class="card-img-top" src="<?php echo asset('assets/img/66.png'); ?>" width="100%" height="100%" alt=""></a>
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Team Member</h5>
              <div class="card-text text-black-50">Web Developer</div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
       <!-- Team Member 8 -->
       <div class="row justify-content-md-center">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img class="card-img-top" src="<?php echo asset('assets/img/67.png'); ?>" width="100%" height="100%" alt=""></a>
              <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
              </div>
            </div>
          </div>
          <!-- Team Member 9 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img class="card-img-top" src="<?php echo asset('assets/img/68.png'); ?>" width="100%" height="100%" alt=""></a>
              <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
              </div>
            </div>
          </div>
          
          
        </div>
        <!-- /.row -->
  
  </div>
  <!-- /.container -->
</div>





  <script>
    $('.breadcrumbs li a').each(function(){

var breadWidth = $(this).width();

if($(this).parent('li').hasClass('active') || $(this).parent('li').hasClass('first')){



} else {

    $(this).css('width', 75 + 'px');

    $(this).mouseover(function(){
        $(this).css('width', breadWidth + 'px');
    });

    $(this).mouseout(function(){
        $(this).css('width', 75 + 'px');
    });
}

    
});
    </script>

@endsection