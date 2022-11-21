@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">ประวัติการทำงาน</h5>
        <div class="table-responsive text-nowrap">
          <br>
            <a href="{{ route('Workhistory.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>ลำดับ</th>
                <th>รหัสประวัติ</th>
                <th>หัวข้อ</th>
                <th>ประวัติ</th>
                <th>รูปประวัติ</th>
                <th>เพิ่มวันที่</th>
                <th>แก้ไขล่าสุด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($workhistory as $key => $rows)
              <tr>
                <td>
                    {{ $key + 1 }}
                </td>
                <td>
                    {{ $rows->id }}
                </td>
                <td class="text-break text-wrap" style="width: 25rem;">
                    {{ $rows->name }}
                </td>
                <td class="text-break text-wrap" style="width: 55rem;">
                    {{ $rows->history }}
                </td>
                <td>
                    <img
                        src="{{ asset('/back-end/upload/Workhistory/'.$rows->history_image) }}"
                        width="150px"
                        height="150px"
                        alt="รูปภาพ"
                    >
                </td>
                <td>
                    {{ $rows->created_at->thaidate(); }}
                </td>
                <td>
                    {{ $rows->updated_at->thaidate(); }}
                </td>
                <td>
                    <a
                        href="{{ route('admin.Workhistory.edit', $rows->id) }}"
                        class="btn btn-warning btn-fw"
                    >
                        แก้ไข
                    </a>
                </td>
                <td>
                    <a
                        href="{{ route('admin.Workhistory.update', $rows->id) }}"
                        class="btn btn-danger btn-fw"
                    >
                        ลบ
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
