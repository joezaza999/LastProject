@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
    <div class="">
        <h2>คณาจารย์สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</h2>
    </div>
    <hr>
    <div class="projectsContainer">
        @foreach ($members as $member)   
    <div class="projectsChild">
        <img class="" src="{{ asset('images/'.$member->image) }}" style="width:150px">
            <div class="projectsGrandchild">
                
                <p>{{ $member->name }}</p>
                <p>{{ $member->position->name }}</p>
                <p>Tel : {{ $member->tel }}</p>
                <p>Email : {{ $member->email }}</p>
                
            </div>
    </div>
    @endforeach
    </div>
</div>
</div>
@endsection
