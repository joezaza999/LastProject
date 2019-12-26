@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bmembers/create', $title = 'เพิ่มข้อมูลบุคลากร', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อบุคลากร</th>
                            <th>ตำแหน่ง</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->position->name }}</td>
                            <td>
                                <a href="{{ asset('images/'.$member->image)
                     }}"><img src="{{ asset('images/'.$member->image) }}" style="width:100px"></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $members->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
