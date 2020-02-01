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
                <a href="{{ route('bcooperative.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลสหกิจศึกษา</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อ</th>
                            <th>เนื้อหา</th>
                            <th>รูปภาพ</th>
                            <th>ไฟล์</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($cooperatives as $cooperative)
                        <tr>
                            <td>{{ $cooperative->name }}</td>
                            <td>{{ $cooperative->text }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $cooperative->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                            <a href="files/{{ $cooperative->file }}" download="{{ $cooperative->file }}">
                            <button type="button" class="btn btn-primary">ดาวน์โหลดไฟล์</button>
                            </a>
                            </td>
                            <td>
                                <a href="{{ route('bcooperative.edit' , $cooperative->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bcooperative.destroy', $cooperative->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $cooperatives->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
