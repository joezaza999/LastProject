@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="home">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">ข้อมูลหลักสูตร</li>
    </ol>
  </nav>
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
</div>
@endsection
