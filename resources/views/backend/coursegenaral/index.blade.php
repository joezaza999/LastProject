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
                <a href="{{ route('bcoursegenaral.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลหลักสูตรทั่วไป</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>เนื้อหา</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($coursegenarals as $coursegenaral)
                        <tr>
                            <td>{{ $coursegenaral->text }}</td>
                            <td>
                                <a href="{{ route('bcoursegenaral.edit' , $coursegenaral->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('bcoursegenaral.destroy', $coursegenaral->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $coursegenarals->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
