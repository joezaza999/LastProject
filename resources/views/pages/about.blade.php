@extends('layouts.master')

@section('content')
<div class="body">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
      <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับสาขา</li>
    </ol>
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
        <img src="{{ asset('images/'.$member->image) }}" style="width:180px"><br>
        {{ $member->name }}<br>
        {{ $member->position->name }}<br><br><br>
    </div>
    @endforeach
</div>
    

</div>
</div>
</div>
@endsection
