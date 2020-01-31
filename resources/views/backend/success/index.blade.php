@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>

            <div aligh="right">
                <a href="{{ route('bsuccess.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลศิษย์เก่า</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อ</th>
                            <th>เนื้อหา</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($successs as $success)
                        <tr>
                            <td>{{ $success->name }}</td>
                            <td>{{ $success->text }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $success->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                                <a href="{{ route('bsuccess.edit' , $success->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bsuccess.destroy', $success->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $successs->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
