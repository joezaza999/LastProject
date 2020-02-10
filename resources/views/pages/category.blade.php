@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">




@foreach ($categorys as $category)   

<p>{{ $category->name }}
{{ $category->credit }}</p>

     @endforeach

   
    </div>
</div>
@endsection
