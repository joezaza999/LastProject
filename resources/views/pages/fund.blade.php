@extends('layouts.master')

@section('content')

<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">ทุนการศึกษา</a>
</div>


<div class="content">
<div class="container">
@foreach($funds as $fund)
<div class="col l8 s12">
  <div class="w3-card-4 w3-margin w3-white">
    <img src="{{ asset('images/'.$fund->image) }}" style="width:100px">
    <div class="w3-container">
      <h3><b>{{ $fund->title }}</b></h3>
      <h5>Title description, <span class="w3-opacity">{{ $fund->updated_at }}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{ $fund->content }}</p>
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
{!! $funds->render() !!}
</div>
</div>
</div>

@endsection