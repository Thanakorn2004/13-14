@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">แก้ไข-ผู้ใช้งาน</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('admin.User.update', request('id')) }}" method="post">
              @csrf
              <label for="defaultFormControlInput" class="form-label">ชื่อ</label>
            <input
              type="text"
              value="{{ $user->name}}"
              name="name"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">ชื่อผู้ใช้</label>
            <input
              type="text"
              value="{{ $user->username}}"
              name="username"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">เบอร์โทร</label>
            <input
              type="text"
              value="{{ $user->phone}}"
              name="phone"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">ที่อยู่</label>
            <input
              type="text"
              value="{{ $user->address}}"
              name="address"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">E-mail</label>
            <input
              type="text"
              value="{{ $user->email}}"
              name="email"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
            <a href="{{ route('User.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
