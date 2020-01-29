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
                <a href="{{ route('bcourse.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลหลักสูตร</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อสาขา(ไทย)</th>
                            <th>ชื่อสาขา(อังกฤษ)</th>
                            <th>กลุ่มวิชา</th>
                            <th>จำนวนหน่วยกิต</th>
                            <th>รูปแบบหลักสูตร</th>
                            <th>คุณสมบัติผู้เข้าศึกษา</th>
                            <th>แนวทางการประกอบอาชีพ</th>
                            <th>แก้ไข</th>
                        </tr>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->namethai }}</td>
                            <td>{{ $course->nameeng }}</td>
                            <td>{{ $course->group }}</td>
                            <td>{{ $course->credit }}</td>
                            <td>{{ $course->format }}</td>
                            <td>{{ $course->property }}</td>
                            <td>{{ $course->job }}</td>
                            <td>
                                <a href="{{ route('bcourse.edit' , $course->id) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bcourse.destroy', $course->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $courses->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
