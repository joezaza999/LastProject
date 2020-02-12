@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">

@foreach ($categorys as $category)
<p>{{ $category->name }}
          {{ $category->credit }}</p>

        @foreach ($subgroups as $subgroup)   
            @if($subgroup->category_id == $category->id)

            <a href="{{ url('/category/show/'.$subgroup->id)  }}">
             <p>{{ $subgroup->name }}
                {{ $subgroup->credit }}</p></a>
            
            @endif
        @endforeach

@endforeach


    </div>
</div>
@endsection
