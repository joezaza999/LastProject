@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">

    <div class="">
        @foreach ($categorys as $category)      
                <p>{{ $category->name }}
                {{ $category->credit }}</p>
        @endforeach
        @foreach ($subgroups as $subgroup)    
                <p>{{ $subgroup->name }}
                {{ $subgroup->credit }}</p>
 
    @endforeach
    </div>
    </div>
</div>
</div>
@endsection
