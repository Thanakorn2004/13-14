@extends('layouts.promote')
@section('content')

<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_img">
                    <img src="{{ asset('promote/img/banner.jpg') }} " width="650px" height="400px" alt="logo">
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                    <h1>เว็บไซต์บริการ</h1>
                        <h2>รับซ่อมบริษัทท่อตันภูเก็ต จำกัด</h2>
                        <h3>รับแก้ไขปัญหาท่อน้ำอุดตันทุกชนิดไม่ว่าจะเป็น<br>
                            ท่อเมนอุดตัน ท่อน้ำทิ้งอุดตัน โถปัสสาวะอุดตัน<br>
                            อ่างล้างมือล้างจานอุดตัน เราแก้ไขได้ทุกปัญหา<br>
                            โดยไม่ต้องทุบ!!!ไม่ต้องรื้อ!!!</h3>
                            <br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- banner part start-->

<!-- about us part start-->
<section class="about_us single_about_padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="about_us_img">
                    <img src="  {{ asset('promote/img/top_service.jpg') }} " width="800px" height="350px" alt="">
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
</section>
<!-- about us part end-->

<!-- feature_part start-->

<!-- feature_part start-->

<!-- our depertment part start-->
<section class="our_depertment section_padding">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-12">
                <div class="depertment_content">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <h2>"ทำไมต้องใช้บริการกับเรา"</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">

                                        <h4>1.แก้ไขปัญหาตรงจุด</h4>
                                        <p>จัดการจบได้ทุกปัญหาท่ออุดตัน ท่อน้ำทุกชนิด<br>และทุกขนาด อุดตันด้วยทุกสาเหตุ</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">

                                        <h4>2.ช่างที่มากประสบการณ</h4>
                                        <p>ผ่านการอบรมอย่างมืออาชีพความชำนาญ<br>ในการแก้ไขปัญหาท่ออุดตันโดยเฉพาะ</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">

                                        <h4>3.เครื่องมือคุณภาพ</h4>
                                        <p>ใช้อุปกรณ์พิเศษที่ทันสมัย<br>นำเข้าจากประเทศสหรัฐอเมริกาโดยตรง</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">

                                        <h4>4.บริการตลอด 24 ชั่วโมง</h4>
                                        <p>มีปัญหาปรึกษาฟรี เปิดบริการตลอด 24 ชั่วโมง<br>ไม่เว้นวันหยุด</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- our depertment part end-->

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
                        <div class="single_blog_text">
                            <h3>{{ $rows-> name}}  {{ $rows-> username}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--::doctor_part end::-->
@endsection
