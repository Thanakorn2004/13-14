@extends('layouts.promote')
@section('content')

<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-xl-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                    <h1>เว็บไซต์บริการ</h1>
                        <h2>รับซ่อมบริษัทท่อตันภูเก็ต จำกัด</h2>
                        <p>รับแก้ไขปัญหาท่อน้ำอุดตันทุกชนิด ไม่ว่าจะเป็น
ท่อเมนอุดตัน ท่อน้ำทิ้งอุดตัน โถปัสสาวะอุดตัน
อ่างล้างหน้าอุดตัน อ่างล้างจานอุดตัน
เราแก้ไขได้ทุกปัญหา โดยไม่ต้องทุบ ไม่ต้องรื้อ</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner_img">
                    <img src="  {{ asset('promote/img/banner.jpg') }} " alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

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
                    <div class="banner_item">
                        <div class="single_item">
                            <img src="  {{ asset('promote/img/icon/banner_1.svg') }} " alt="">
                            <h5>ล้างท่อเมน</h5>
                        </div>
                        <div class="single_item">
                            <img src="  {{ asset('promote/img/icon/banner_2.svg') }} " alt="">
                            <h5>ล้างบ่อไขมัน</h5>
                        </div>
                        <div class="single_item">
                            <img src="  {{ asset('promote/img/icon/banner_3.svg') }} " alt="">
                            <h5>Qualfied</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us part end-->

<!-- feature_part start-->
<section class="feature_part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Our services</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 col-sm-12">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{ asset('promote/img/icon/feature_1.svg') }} " alt=""></span>
                        <h4>Better Future</h4>
                        <p>Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.</p>
                    </div>
                </div>
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{ asset('promote/img/icon/feature_2.svg') }} " alt=""></span>
                        <h4>Better Future</h4>
                        <p>Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_img">
                        <img src="{{ asset('promote/img/service.png') }} " alt="">
                    </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{ asset('promote/img/icon/feature_1.svg') }} " alt=""></span>
                        <h4>Better Future</h4>
                        <p>Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.</p>
                    </div>
                </div>
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{ asset('promote/img/icon/feature_2.svg') }} " alt=""></span>
                        <h4>Better Future</h4>
                        <p>Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                        <span class="our_depertment_icon"><img src="{{ asset('promote/img/icon/feature_2.svg') }} "
                                                alt=""></span>
                                        <h4>1.แก้ไขปัญหาตรงจุด</h4>
                                        <p>จัดการจบได้ทุกปัญหาท่ออุดตัน ท่อน้ำทุกชนิด<br>และทุกขนาด อุดตันด้วยทุกสาเหตุ</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="{{ asset('promote/img/icon/feature_2.svg') }} "
                                                alt=""></span>
                                        <h4>2.ช่างที่มากประสบการณ</h4>
                                        <p>ผ่านการอบรมอย่างมืออาชีพความชำนาญ<br>ในการแก้ไขปัญหาท่ออุดตันโดยเฉพาะ</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="{{ asset('promote/img/icon/feature_2.svg') }} "
                                                alt=""></span>
                                        <h4>3.เครื่องมือคุณภาพ</h4>
                                        <p>ใช้อุปกรณ์พิเศษที่ทันสมัย<br>นำเข้าจากประเทศสหรัฐอเมริกาโดยตรง</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_our_depertment">
                                        <span class="our_depertment_icon"><img src="{{ asset('promote/img/icon/feature_2.svg') }} "
                                                alt=""></span>
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
            <div class="col-sm-6 col-lg-3">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('promote/img/organizer/organizer_1.png') }} " alt="doctor">
                    </div>
                    <div class="single_text">
                        <div class="single_blog_text">
                            <h3> นายจรรญพร  ประเสริฐกุล</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('promote/img/organizer/organizer_2.jpg') }} " alt="doctor">
                    </div>
                    <div class="single_text">
                        <div class="single_blog_text">
                            <h3> นายธนากร  วัฒนปฤดา</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('promote/img/organizer/organizer_3.jpg') }} " alt="doctor">
                    </div>
                    <div class="single_text">
                        <div class="single_blog_text">
                            <h3> นายกฤษดาวัลย์ ปานทอง</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('promote/img/organizer/organizer_4.png') }} " alt="doctor">
                    </div>
                    <div class="single_text">
                        <div class="single_blog_text">
                            <h3> นายสหภัส อินจันทร์</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::doctor_part end::-->

<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{ asset('promote/img/blog/blog_2.png') }} " class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="blog.html">
                                <h5 class="card-title">First cattle which earth unto let health for
                                    can get and see what you </h5>
                            </a>
                            <ul>
                                <li> <span class="ti-user"></span>Jhon mike</li>
                                <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{ asset('promote/img/blog/blog_3.png') }} " class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="blog.html">
                                <h5 class="card-title">First cattle which earth unto let health for
                                    can get and see what you </h5>
                            </a>
                            <ul>
                                <li> <span class="ti-user"></span>Jhon mike</li>
                                <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection