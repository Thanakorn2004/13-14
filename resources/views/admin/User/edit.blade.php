@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">แก้ไข-ผู้ใช้งาน</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('User.update',$user->id) }}" method="post">
              @csrf
              <label for="defaultFormControlInput" class="form-label">ชื่อ</label>
            <input
              type="text"
              value="{{ $user->name}}"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">ชื่อผู้ใช้</label>
            <input
              type="text"
              value="{{ $user->username}}"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">เบอร์โทร</label>
            <input
              type="text"
              value="{{ $user->phone}}"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">ที่อยู่</label>
            <input
              type="text"
              value="{{ $user->address}}"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <label for="defaultFormControlInput" class="form-label">E-mail</label>
            <input
              type="text"
              value="{{ $user->email}}"
              class="form-control"
              id="defaultFormControlInput"
              aria-describedby="defaultFormControlHelp"
            />
            <input class="btn btn-primary mt-3 mx-2" type="submit" value="อัปเดต">
            <a href="{{ route('User.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection