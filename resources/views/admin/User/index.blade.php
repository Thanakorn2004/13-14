@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">ผู้ใช้งาน</h5>
        <div class="table-responsive text-nowrap">
          <br>

          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No.</th>
                <th>ชื่อ</th>
                <th>ชื่อผู้ใช้</th>
                <th>เบอร์โทร</th>
                <th>ที่อยู่</th>
                <th>E-mail</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
            <tbody class="table--borderbottom-0">
              @foreach ($user as $users)
              <tr>
                <td>{{ $users-> id}}</td>
                <td>{{ $users-> name}}</td>
                <td>{{ $users-> username}}</td>
                <td>{{ $users-> phone}}</td>
                <td>{{ $users-> address}}</td>
                <td>{{ $users-> email}}</td>
                <td>
                    <a href="{{ route('admin.User.edit', $users-> id) }}" class="btn btn-warning btn-fw">แก้ไข</a>
                </td>
                <td>
                    <a href="{{ route('admin.User.delete', $users-> id) }}" class="btn btn-danger btn-fw">ลบ</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
