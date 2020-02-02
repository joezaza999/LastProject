@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="topnav" id="myTopnav">
  <a href="" class="">คณาจารย์</a>
</div>
<div class="content">
    <div class="container">
<h1>คณาจารย์สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</h1><br>
<div class="row">
    @foreach ($members as $member)
    <div class="col-4">
        <img src="{{ asset('images/'.$member->image) }}" style="width:150px"><br><br>
        {{ $member->name }}<br>
        <b>{{ $member->position->name }}</b><br><br><br>
    </div>
    @endforeach
</div>
    

</div>
</div>
</div>
@endsection
