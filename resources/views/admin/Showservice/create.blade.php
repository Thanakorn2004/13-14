@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">เพิ่ม-แสดงบริการ</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('Showservice.insert') }}" method="POST">
              @csrf
            <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="name"
            />
            <label for="defaultFormControlInput" class="form-label">details</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="details"
            />
            <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
            <a href="{{ route('Showservice.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection