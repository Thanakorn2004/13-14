@extends('layouts.promote')
@section('content')


    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>บริการ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about us part start-->
    <section class="about_us single_about_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="  {{ asset('promote/img/top_service.jpg') }} " alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>"ท่อตัน"</h2>
                        <p>ปัญหาที่ทุกคนฟังแล้วก็คงส่ายหน้า
                            เพราะแทบทุกบ้าน ทุกคอนโดฯ
                            คงจะได้เจอะเจอกันอย่างแน่นอน
                            ..ปัญหานี้เป็นปัญหาที่ดูเหมือนเล็กเพราะมีวิธีแก้ไขมากมาย
                            แต่ก็เป็นปัญหาที่เกิดขึ้นอยู่บ่อยๆ
                            และถ้าไม่แก้ก็สามารถลามไปเป็นปัญหาใหญ่อย่างน้ำท่วมห้องได้ด้วยเช่นกัน
                            ทำให้ปัญหาระบบน้ำในอาคารนั้น
                            เป็นเรื่องที่ไม่อาจที่จะมองข้ามไปได้เลยทีเดียว</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>ตัวอย่างบริการ</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                @foreach ($showservice as $rows)
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"></span>
                            <h3>{{ $rows-> name}}</h3>
                            <p>{{ $rows-> details}}</p>
                            <br><br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- about us part end-->


@endsection
