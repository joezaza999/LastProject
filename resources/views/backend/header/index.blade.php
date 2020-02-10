@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('bheader/create', $title = 'เพิ่มรูปภาพ', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รูปภาพ</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($headers as $header)
                        <tr>
                            <td>
                                <a href="{{ asset('images/'.$header->image)}}">
                                <img src="{{ asset('images/resize/'.$header->image) }}" style="width:100px"></a>
                            </td>
                            <td>
                                <?= Form::open(array('url' => 'bheader/' . $header->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn btn-danger">ลบ</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
