@extends('layouts.master')

@section('content')
<div class="body">
<br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">เกี่ยวกับสาขา</a>
</div>
<div class="content">
    <div class="container">

    @foreach ($abouts as $about)
    <div>
        {{ $about->text }}
    </div>
    @endforeach

<br><br>

<div class="row">
    @foreach ($members as $member)
    <div class="col-4">
        <img src="{{ asset('images/'.$member->image) }}" style="width:180px"><br><br>
        {{ $member->name }}<br>
        <b>{{ $member->position->name }}</b><br><br><br>
    </div>
    @endforeach
</div>
    

</div>
</div>
</div>
@endsection
