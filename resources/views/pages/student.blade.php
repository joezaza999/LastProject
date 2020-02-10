@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="content">
      <h2>รายชื่อนักศีกษา</h2>
<div class="row">
    <div class="leftcolumn1">
    @foreach ($students as $student)  
    <table class="w3-table">
    <tr>
      <td><img class="" src="{{ asset('images/'.$student->image) }}" style="width:150px"></td>
      <td>{{ $student->id }}</td>
      <td>{{ $student->studentyear->name }}</td>
      <td>{{ $student->name }}</td>
    </tr>
  </table> 
 


     @endforeach

</div>
</div>
</div>
</div>

@endsection