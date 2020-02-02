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
                <a href="{{ route('bmembers.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลบุคลากร</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr  >
                            <th>ชื่อบุคลากร</th>
                            <th>ตำแหน่ง</th>
                            <th>รูปภาพ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>อีเมลล์</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->position->name }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $member->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>{{ $member->tel }}</td>
                            <td>{{ $member->email }}</td>
                            <td>
                                <a href="{{ route('bmembers.edit' , $member->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bmembers.destroy', $member->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $members->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
