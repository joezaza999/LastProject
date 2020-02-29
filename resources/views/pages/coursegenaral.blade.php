@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>

<div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">หลักสูตรทั่วไป</li>
    </ol>
  </nav>

<div class="content">

@foreach ($coursegenarals as $coursegenaral)

        <p>{!! $coursegenaral->text !!}</p>  
    @endforeach
  
</div>
</div>
</div>
@endsection