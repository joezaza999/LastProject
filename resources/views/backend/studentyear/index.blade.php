@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bstudentyear/create', $title = 'เพิ่มข้อมูลรุ่น', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รุ่น</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($studentyears as $studentyear)
                        <tr>
                            <td>{{$studentyear->name}}</td>
                            <td>
                                <a href="{{ url('/bstudentyear/'.$studentyear->id.'/edit') }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bstudentyear/' . $studentyear->id, 'method' => 'delete')) ?>
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