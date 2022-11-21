@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">แสดงบริการ</h5>
        <div class="table-responsive text-nowrap">
          <br>
            <a href="{{ route('Showservice.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>ลำดับ.</th>
                <th>รหัสบริการ</th>
                <th>หัวข้อ</th>
                <th>รายระเอียด</th>
                <th>เพิ่มวันที่</th>
                <th>แก้ไขล่าสุด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($showservice as $key => $rows)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $rows->id }}
                        </td>
                        <td>
                            {{ $rows->name }}
                        </td>
                        <td class="text-break text-wrap" style="width: 15rem;">
                            {{ $rows->details }}
                        </td>
                        <td>
                            {{ $rows->created_at }}
                        </td>
                        <td>
                            {{ $rows->updated_at }}
                        </td>
                        <td>
                            <a
                                href="{{ route('admin.showservice.edit', $rows->id) }}"
                                class="btn btn-warning btn-fw"
                            >
                                แก้ไข
                            </a>
                        </td>
                        <td>
                            <a
                                href="{{ route('admin.showservice.delete', $rows->id) }}"
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
