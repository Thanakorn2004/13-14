@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">เพิ่ม-ประวัติการทำงาน</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('Workhistory.insert') }}" method="POST" enctype="multipart/form-data">
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
            <label for="defaultFormControlInput" class="form-label">history</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="history"
            />
            <label for="defaultFormControlInput" class="form-label">history_image</label>
            <input
              type="file"
              class="form-control"
              id="inputGroupFile02"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="history_image"
            />
            <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
            <a href="{{ route('Workhistory.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection