@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
<div class="row">
    <div class="leftcolumn1">
<h2>คณาจารย์สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</h2><br>
<div class="row">
    @foreach ($members as $member)
    <div class="col-4">
        <img src="{{ asset('images/'.$member->image) }}" style="width:150px"><br><br>
        <p>{{ $member->name }}</p>
        <b>{{ $member->position->name }}</b>
        <b>{{ $member->tel }}</b><br>
        <b>{{ $member->email }}</b><br><br><br>
    </div>
    @endforeach
</div>
    
    </div>
    </div>
</div>
</div>
@endsection
