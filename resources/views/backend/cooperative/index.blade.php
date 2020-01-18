@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bcooperative/create', $title = 'เพิ่มข้อมูลสหกิจศึกษา', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อ</th>
                            <th>รูปภาพ</th>
                            <th>เนื้อหา</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($cooperatives as $cooperative)
                        <tr>
                        <td>
                                <a href="{{ asset('images/'.$cooperative->image)}}">
                                <img src="{{ asset('images/resize/'.$cooperative->image) }}" style="width:100px"></a>
                            </td>
                            <td>{{$cooperative->name}}</td>
                            <td>{{$cooperative->text}}</td>
                            <td>
                                <a href="{{ url('/bcooperative/'.$cooperative->id.'/edit') }}">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bcooperative/' . $cooperative->id, 'method' => 'delete')) ?>
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
