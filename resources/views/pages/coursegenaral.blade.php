@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
@foreach ($coursegenarals as $coursegenaral)
    <div class="indent2">
        <p>{!! $coursegenaral->text !!}</p>  
    </div>
    @endforeach
  
</div>
</div>
@endsection