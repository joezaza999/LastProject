@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">

<h5>ข้อมูลวิชา {{ $subjects->name }}</h5>
<br><br>

{!! $subjects->text !!}


</div>
</div>
@endsection