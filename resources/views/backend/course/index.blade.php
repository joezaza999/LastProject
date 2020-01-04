@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bcourse/create', $title = 'เพิ่มข้อมูลหลักสูตร', ['class' => 'btn btn-primary'], $secure = null); ?>
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

                        </tr>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->namethai}}</td>
                            <td>{{$course->nameeng}}</td>
                            <td>{{$course->group}}</td>
                            <td>{{$course->credit}}</td>
                            <td>{{$course->format}}</td>
                            <td>{{$course->property}}</td>
                            <td>{{$course->job}}</td>
                            <td>
                                <a href="{{ url('/bcourse/'.$course->id.'/edit') }}">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bcourse/' . $course->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn">ลบ</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
