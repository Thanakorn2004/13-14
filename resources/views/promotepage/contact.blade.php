@extends('layouts.promote')
@section('content')

<section class="breadcrumb_part breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>ผู้จัดทำ</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

<!--::doctor_part start::-->
<section class="doctor_part single_page_doctor_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>ผู้จัดทำเว็บไซต์</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($organizers as $rows)
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('/back-end/upload/Organizers/'.$rows->organizer_image) }} " width="300px" height="300px" alt="doctor">
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text align-items-center">
                                <h3>{{ $rows-> name}}  {{ $rows-> username}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
