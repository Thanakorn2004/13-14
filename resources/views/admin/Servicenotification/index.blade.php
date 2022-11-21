@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">แจ้งบริการ</h5>
        <div class="table-responsive text-nowrap">
          <br>

          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No.</th>
                <th>ชื่อ-นามสกุล</th>
                <th>เบอร์โทร</th>
                <th>วันที่</th>
                <th>รูป</th>
                <th>รายละเอียด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
            <tbody class="table--borderbottom-0">
              @foreach ($servicenotification as $users)
              <tr>
                <td>{{ $users-> id}}</td>
                <td>{{ $users-> name}}</td>
                <td>{{ $users-> phone}}</td>
                <td>{{ $users-> date}}</td>
                <td>
                    <img src="{{ asset('/back-end/upload/Servicenotification/'.$users->image) }}"
                    width="150px" height="150px" alt="">
                </td>
                <td>{{ $users-> details}}</td>
                <td> <a href="{{ route('admin.Servicenotification.edit', $users->id) }}" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                <td> <a href="{{ route('admin.Servicenotification.delete', $users->id) }}" class="btn btn-danger btn-fw">ลบ</a>  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
