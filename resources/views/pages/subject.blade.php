@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
<p>{{ $subgroup->name }} {{ $subgroup->credit }}</p>

@foreach ($subjects as $subject)
    <a href="{{ url('/subject/show/'.$subject->id) }}">{{ $subject->subcode }}</a> 
    &nbsp; {{ $subject->name }} &nbsp; {{ $subject->credit }}<br>
@endforeach
</div>
</div>
@endsection