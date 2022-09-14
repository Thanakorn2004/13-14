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
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เบอร์โทร</th>
                <th>หน้าที่</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>นายธนากร</td>
                <td>วัฒนปฤดา</td>
                <td>096.........</td>
                <td><label class="badge badge-info">Front_End</label></td>
                <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
              </tr>
              <tr>
                <td>นายจรรญพร</td>
                <td>ประเสริฐกุล</td>
                <td>..........</td>
                <td><label class="badge badge-success">Back_End</label></td>
                <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
              </tr>
              <tr>
                <td>นายกฤษดาวัลย์</td>
                <td>ปานทอง</td>
                <td>..........</td>
                <td><label class="badge badge-danger">Testter</label></td>
                <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
              </tr>
              <tr>
                <td>นายสหภัส</td>
                <td>อินจันทร์</td>
                <td>..........</td>
                <td><label class="badge badge-danger">Testter</label></td>
                <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection