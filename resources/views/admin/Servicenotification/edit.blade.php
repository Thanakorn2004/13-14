@extends('layouts.back-end.master')
@section('content')

  <div class="row">
      <div class="col-md-12">
        <div class="card mb-9">
          <h5 class="card-header">แก้ไข-แจ้งบริการ</h5>
          <div class="card-body">
            <div>
              <form action="{{ route('admin.Servicenotification.update', request('id')) }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="defaultFormControlInput" class="form-label">name</label>
              <input
                type="text"
                value="{{ $servicenotification->name}}"
                name="name"
                class="form-control"
                id="defaultFormControlInput"
                aria-describedby="defaultFormControlHelp"
              />
              <label for="defaultFormControlInput" class="form-label">phone</label>
              <input
                type="text"
                value="{{ $servicenotification->phone}}"
                name="phone"
                class="form-control"
                id="defaultFormControlInput"
                aria-describedby="defaultFormControlHelp"
              />
              <label for="defaultFormControlInput" class="form-label">date</label>
              <input
                type="text"
                value="{{ $servicenotification->date}}"
                name="date"
                class="form-control"
                id="defaultFormControlInput"
                aria-describedby="defaultFormControlHelp"
              />
            <label for="defaultFormControlInput" class="form-label">image</label>
                <input
                type="file"
                class="form-control"
                id="inputGroupFile02"
                placeholder="กรุณากรอกข้อมูล"
                aria-describedby="defaultFormControlHelp"
                name="image"
            />
            <img src="{{ asset('/back-end/upload/Servicenotification/'.$servicenotification->image) }}"
                  width="150px" height="150px" alt="">
                  <br><br>
              <label for="defaultFormControlInput" class="form-label">details</label>
              <input
                type="text"
                value="{{ $servicenotification->details}}"
                name="details"
                class="form-control"
                id="defaultFormControlInput"
                aria-describedby="defaultFormControlHelp"
              />

              <input class="btn btn-primary mt-3 mx-2" type="submit" value="อัปเดต">
              <a href="{{ route('Servicenotification.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>

@endsection
