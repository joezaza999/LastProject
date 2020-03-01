@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">คณาจารย์</li>
    </ol>
  </nav>
  
<div class="content">
    <div class="">
        <h3>คณาจารย์สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</h3>
    </div>
    <hr>
    <!-- <div class="projectsContainer"> -->
    <div class="row">
        @foreach ($members as $member)   
    <!-- <div class="projectsChild"> -->
            <!-- <div class="projectsGrandchild"> -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                      <img class="" src="{{ asset('images/'.$member->image) }}">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8"><br><p>{{ $member->name }}</p>
                      <p><b>{{ $member->position->name }}</b></p>
                      <p>Tel : {{ $member->tel }}</p>
                      <p>Email : {{ $member->email }}</p><hr width="100%  size="20" color="#f77f3b">
                    </div>        
                  </div>          
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  
                </div> -->
             
            <!-- </div> -->
    <!-- </div> -->
    @endforeach
</div>
    </div>
</div>
<!-- </div> -->
</div>
@endsection
