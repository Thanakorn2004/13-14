@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">ผู้จัดทำ</h5>
        <div class="table-responsive text-nowrap">
          <br>
            <a href="{{ route('Organizer.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>ลำดับ</th>
                <th>รหัสผู้จัดทำ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เบอร์โทร</th>
                <th>หน้าที่</th>
                <th>รูปภาพ</th>
                <th>เพิ่มวันที่</th>
                <th>แก้ไขล่าสุด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($organizers as $key => $rows)
              <tr>
                <td>
                    {{ $key + 1 }}
                </td>
                <td>
                    {{ $rows-> organizer_id}}
                </td>
                <td>
                    {{ $rows-> name}}
                </td>
                <td>
                    {{ $rows-> username}}
                </td>
                <td>
                    {{ $rows-> phone}}
                </td>
                <td>
                    {{ $rows-> role}}
                </td>
                <td>
                  <img src="{{ asset('/back-end/upload/Organizers/'.$rows->organizer_image) }}"
                  width="150px" height="150px" alt="">
                </td>
                <td>{{ $rows-> created_at}}</td>
                <td>{{ $rows-> updated_at}}</td>
                <td>
                    <a href="{{ route('admin.Organizer.edit', $rows->organizer_id) }}" class="btn btn-warning btn-fw">แก้ไข</a>
                </td>
                <td>
                    <a href="{{ route('admin.Organizer.delete', $rows->organizer_id) }}" class="btn btn-danger btn-fw">ลบ</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
