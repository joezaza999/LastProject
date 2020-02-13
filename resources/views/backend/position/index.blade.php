@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bposition/create', $title = 'เพิ่มข้อมูลตำแหน่ง', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ตำแหน่ง</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($positions as $position)
                        <tr>
                            <td>{{$position->name}}</td>
                            <td>
                                <a href="{{ url('/bposition/'.$position->id.'/edit') }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                            <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');"><?= Form::open(array('url' => 'bposition/' . $position->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn btn-danger">ลบ</button>
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
