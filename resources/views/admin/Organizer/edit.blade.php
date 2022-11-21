@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">แก้ไข-ผู้จัดทำ</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('admin.Organizer.update', request('id')) }}" method="post" enctype="multipart/form-data">
              @csrf
            <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="name"
              value="{{ $organizers->name}}"
            />
            <label for="defaultFormControlInput" class="form-label">username</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="username"
              value="{{ $organizers->username}}"
            />
            <label for="defaultFormControlInput" class="form-label">phone</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="phone"
              value="{{ $organizers->phone}}"
            />
            <label for="defaultFormControlInput" class="form-label">role</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="role"
              value="{{ $organizers->role}}"
            />
            <label for="defaultFormControlInput" class="form-label">organizer_image</label>
            <input
              type="file"
              class="form-control"
              id="inputGroupFile02"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="organizer_image"
            />
            <img src="{{ asset('/back-end/upload/Organizers/'.$organizers->organizer_image) }}"
                  width="150px" height="150px" alt="">
                  <br><br>
            <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
            <a href="{{ route('Organizer.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
