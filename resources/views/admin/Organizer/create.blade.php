@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">เพิ่ม-ผู้จัดทำ</h5>
        <div class="card-body">
          <div>
            <label for="defaultFormControlInput" class="form-label">ชื่อ</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">นามสกุล</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">เบอร์โทร</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">หน้าที่</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <a href="" class="btn btn-primary mt-3">บันทึก</a>
            <a href="{{ route('Organizer.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection