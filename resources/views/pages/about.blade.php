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
    <div class="projectsContainer">
        @foreach ($members as $member)   
    <div class="projectsChild">
            <div class="projectsGrandchild">
            <div class="row">
              <div class="col-md-6"><img class="" src="{{ asset('images/'.$member->image) }}" style="width:140px"></div>
              <div class="col-md-6"><br><p>{{ $member->name }}</p>
                <p>{{ $member->position->name }}</p>
                <p>Tel : {{ $member->tel }}</p>
                <p>Email : {{ $member->email }}</p><hr></div>
                </div>
            </div>
    </div>
    @endforeach
    </div>
</div>
</div>
</div>
@endsection
