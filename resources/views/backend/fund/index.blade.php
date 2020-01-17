@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bfund/create', $title = 'เพิ่มข้อมูลทุนการศึกษา', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รูปภาพ</th>
                            <th>ชื่อ</th>
                            <th>เนื้อหา</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($funds as $fund)
                        <tr>
                        <td>
                                <a href="{{ asset('images/'.$fund->image)}}">
                                <img src="{{ asset('images/resize/'.$fund->image) }}" style="width:100px"></a>
                            </td>
                            <td>{{$fund->title}}</td>
                            <td>{{$fund->content}}</td>
                            <td>
                                <a href="{{ url('/bfund/'.$fund->id.'/edit') }}">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bfund/' . $fund->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn">ลบ</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
