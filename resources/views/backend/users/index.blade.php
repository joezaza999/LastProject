@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
        <!-- Main content -->
      <section class="content">
      <div aligh="right">
                <a href="{{ route('register') }}" class="btn btn-success btn-sm">เพิ่มผู้ใช้งาน</a>
            </div>
        <div class="row">
          
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ข้อมูลผู้ใช้งาน</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ชื่อ</th>
                    <th>อีเมล์</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                                <a href="{{ route('busers.edit' , $user->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('busers.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');">
                                    <button type="submit" class="btn btn-danger">ลบ</button></a>
                                </form>
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
@endsection
