@extends('layouts.master')

@section('content')
<div class="body">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">กิจกรรม</li>
  </ol>


   <div class="content">
@foreach($activities as $activitie)
<div class="col l8 s12">
  <div class="w3-card-4 w3-margin w3-white">
    <img src="{{ asset('images/'.$activitie->image) }}" style="width:100px">
    <div class="w3-container">
      <h3><b>{{ $activitie->title }}</b></h3>
      <h5>Title description, <span class="w3-opacity">{{ $activitie->updated_at }}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{ $activitie->content }}</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>
@endforeach
{!! $activities->render() !!}

</div>
</div>
@endsection
