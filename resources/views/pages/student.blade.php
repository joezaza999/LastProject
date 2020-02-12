@extends('layouts.master')

@section('content')
<div class="body">
<br><br><br><br><br>
<div class="container">

      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">รายชื่อนักศึกษา</h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>รหัสนักศึกษา</th>
                  <th>ชื่อ</th>
                  <th>ปีที่เข้าการศึกษา</th>
                  <th>รูปภาพ</th>
               
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($students as $student)
                  <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->studentyear->name }}</td>
                            <td>
                            <a href="{{ asset('images/'.$student->image)}}">
                            <img src="{{ URL::to('/') }}/images/{{ $student->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
</div>
</div>
@endsection


