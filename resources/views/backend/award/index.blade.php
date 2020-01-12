@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('baward/create', $title = 'เพิ่มข้อมูลรางวัล', ['class' => 'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>หัวข้อ</th>
                            <th>รูปภาพ</th>
                            <th>เนื้อหา</th>
                        </tr>
                        @foreach ($awards as $award)
                        <tr>
                            <td>{{ $award->title }}</td> 
                            <td>{{ $award->content }}</td>
                            <td>
                                <a href="{{ asset('images/'.$award->image)}}">
                                <img src="{{ asset('images/resize/'.$award->image) }}" style="width:100px"></a>
                            </td>
                            <td>
                                <a href="{{ url('/baward/'.$award->id.'/edit') }}">แก้ไข</a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'baward/' . $award->id, 'method' => 'delete')) ?>
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
