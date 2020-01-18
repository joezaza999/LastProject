@extends('layouts.master')

@section('content')
<div class="body">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">กิจกรรม</li>
  </ol>


<div class="content">


    @foreach ($activities as $activitie)
    <div class="row">
        <div class="leftcolumn col-4">
          <div class="card">
        <img src="{{ asset('images/'.$activitie->image) }}" style="width:300px; height:250px">
    </div>
        </div>
    <div class="rightcolumn col-6">
        <div class="card">
        {{ $activitie->title }}<br>
        {{ date('d/m/Y', strtotime($activitie->updated_at)) }}<br>
        {{ $activitie->content }}
    </div>
    </div>
    @endforeach
</div>
</div>
</div>
@endsection
