@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bactivities/create', $title = 'เพิ่มข้อมูลกิจกรรม', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>หัวข้อ</th>
                            <th>เนื้อหา</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($activitiess as $activities)
                        <tr>
                            <td>{{ $activities->title }}</td> 
                            <td>{{ $activities->content }}</td>
                            <td>
                                <a href="{{ asset('images/'.$activities->image)}}">
                                <img src="{{ asset('images/resize/'.$activities->image) }}" style="width:100px"></a>
                            </td>
                            <td>
                                <a href="{{ url('/bactivities/'.$activities->id.'/edit') }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bactivities/' . $activities->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn btn-danger">ลบ</button>
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
