@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bnewupdate/create', $title = 'เพิ่มข้อมูลประชาสัมพันธ์', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>หัวข้อ</th>
                            <th>รูปภาพ</th>
                            <th>เนื้อหา</th>
                        </tr>
                        @foreach ($newupdates as $newupdate)
                        <tr>
                            <td>{{ $newupdate->title }}</td> 
                            <td>{{ $newupdate->content }}</td>
                            <td>
                                <a href="{{ asset('images/'.$newupdate->image)}}">
                                <img src="{{ asset('images/resize/'.$newupdate->image) }}" style="width:100px"></a>
                            </td>
                            <td>
                                <a href="{{ url('/bnewupdate/'.$newupdate->id.'/edit') }}">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bnewupdate/' . $newsupdate->id, 'method' => 'delete')) ?>
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
