@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bnewsupdate/create', $title = 'เพิ่มข้อมูลประชาสัมพันธ์', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>หัวข้อ</th>
                            <th>รูปภาพ</th>
                            <th>เนื้อหา</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($newsupdates as $newsupdate)
                        <tr>
                            <td>{{ $newsupdate->title }}</td> 
                            <td>
                                <a href="{{ asset('images/'.$newsupdate->image)}}">
                                <img src="{{ asset('images/resize/'.$newsupdate->image) }}" style="width:100px"></a>
                            </td>
                            <td>{{ $newsupdate->content }}</td>
                            <td>
                                <a href= "{{ url('/bnewsupdate/'.$newsupdate->id.'/edit') }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bnewsupdate/' . $newsupdate->id, 'method' => 'delete')) ?>
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
