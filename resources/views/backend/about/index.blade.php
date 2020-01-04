@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('babout/create', $title = 'เพิ่มข้อมูลเกี่ยวกับเรา', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>เนื้อหา</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($abouts as $about)
                        <tr>
                            <td>{{$about->text}}</td>
                            <td>
                                <a href="{{ url('/babout/'.$about->id.'/edit') }}">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'babout/' . $about->id, 'method' => 'delete')) ?>
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
