@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
            <br>
            <div aligh="right">
                <a href="{{ route('bcoursegenaral.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลหลักสูตรทั่วไป</a>
            </div>
            <br>
        <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>เนื้อหา</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
               
                  </tr>
                  </thead>
                  @foreach ($coursegenarals as $coursegenaral)
                  <tbody>
                  <tr>
                    <td>{!! $coursegenaral->text !!}</td>
                            <td>
                                <a href="{{ route('bcoursegenaral.edit' , $coursegenaral->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bcoursegenaral.destroy', $coursegenaral->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                            </td>
                  </tr>
                  </tbody>
                  @endforeach
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
@endsection
