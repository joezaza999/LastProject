@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bposition/create', $title = 'เพิ่มข้อมูลบุคลากร', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ตำแหน่ง</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($positions as $position)
                        <tr>
                            <td>{{$position->id}}</td>
                            <td>{{$position->name}}</td>
                            <td><a href="{{ url('/position/destroy'.$position->id) }}">ลบ</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
