@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">เพิ่ม-ผู้จัดทำ</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('Organizer.insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <label for="defaultFormControlInput" class="form-label">ชื่อ</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
              name="name"
            />
            <label for="defaultFormControlInput" class="form-label">นามสกุล</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
              name="username"
            />
            <label for="defaultFormControlInput" class="form-label">เบอร์โทร</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
              name="phone"
            />
            <label for="defaultFormControlInput" class="form-label">หน้าที่</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
              name="role"
            />
            <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
            <input
                type="file"
                class="form-control"
                id="inputGroupFile02"
                name="organizer_image"
            />
            <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
            <a href="{{ route('Organizer.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection