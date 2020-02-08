@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>

            <div aligh="right">
                <a href="{{ route('bstudent.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลนักศึกษา</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัสนักศึกษา</th>
                            <th>ชื่อ</th>
                            <th>รุ่น</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->studentid }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->studentyear->name }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $student->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                                <a href="{{ route('bstudent.edit' , $student->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bstudent.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $students->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
