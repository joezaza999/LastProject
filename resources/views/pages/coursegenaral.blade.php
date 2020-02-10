@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">

@foreach ($coursegenarals as $coursegenaral)

        <p>{!! $coursegenaral->text !!}</p>  
    @endforeach
  
</div>
</div>
@endsection