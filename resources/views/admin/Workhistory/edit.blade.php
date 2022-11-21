@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">แก้ไข-ประวัติการทำงาน</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('admin.Workhistory.update', request('id')) }}" method="POST" enctype="multipart/form-data">
              @csrf
            <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="name"
              value="{{ $workhistory->name}}"
            />
            <label for="defaultFormControlInput" class="form-label">history</label>
            <input
              type="text"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกข้อมูล"
              aria-describedby="defaultFormControlHelp"
              name="history"
              value="{{ $workhistory->history}}"
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
            <img src="{{ asset('/back-end/upload/Workhistory/'.$workhistory->history_image) }}"
                  width="150px" height="150px" alt="">
                  <br><br>
            <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
            <a href="{{ route('Workhistory.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
