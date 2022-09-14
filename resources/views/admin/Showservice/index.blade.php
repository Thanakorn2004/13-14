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
                <th>Profile</th>
                <th>VatNo.</th>
                <th>Created</th>
                <th>Status</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>Jacob</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-danger">Pending</label></td>
                  <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                  <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
                </tr>
                <tr>
                  <td>Messsy</td>
                  <td>53275532</td>
                  <td>15 May 2017</td>
                  <td><label class="badge badge-warning">In progress</label></td>
                  <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                  <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>53275533</td>
                  <td>14 May 2017</td>
                  <td><label class="badge badge-info">Fixed</label></td>
                  <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                  <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>53275534</td>
                  <td>16 May 2017</td>
                  <td><label class="badge badge-success">Completed</label></td>
                  <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                  <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
                </tr>
                <tr>
                  <td>Dave</td>
                  <td>53275535</td>
                  <td>20 May 2017</td>
                  <td><label class="badge badge-warning">In progress</label></td>
                  <td> <a href="edit_table.php" class="btn btn-warning btn-fw">แก้ไข</a>  </td>
                  <td> <a href="type_productdelete.php" class="btn btn-danger btn-fw">ลบ</a>  </td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
</div>
@endsection