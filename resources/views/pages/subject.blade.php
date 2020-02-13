@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
<p>{{ $subgroup->name }} {{ $subgroup->credit }}</p>
@foreach ($subjects as $subject)
<div class="accrodion">
    <div class="header">
     <a>{{ $subject->subcode }}
        &nbsp; {{ $subject->name }} &nbsp; {{ $subject->credit }}<br></a>    
    </div>    
       <div class="body">
        {!! $subject->text !!}
        </div>
    </div>
    @endforeach


    

</div>
</div>
<script>
    $(function(){
   $(".header").click(function(){
      $(this).toggleClass("active");
      $(this).siblings(".body").slideToggle(400);
   }); 
});
</script>
@endsection