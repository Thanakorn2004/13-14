@extends('layouts.promote')
@section('content')

<section class="breadcrumb_part breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>ประวัติการทำงาน</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


<!--================Blog Area =================-->



<!-- about us part end-->

<section class="about_us single_about_padding">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-12">
                <div class="section_tittle text-center">
                    <h2>ตัวอย่างประวัติการทำงาน</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @foreach ($workhistory as $rows)
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="about_us_img">
                    <img src="{{ asset('/back-end/upload/Workhistory/'.$rows->history_image) }}" width="300px" height="300px" alt="">
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="section_tittle text-left">
                    <br><br><br>
                    <h2>{{ $rows-> name}}</h2><br>
                    <h3>{{ $rows-> history}}</h3>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</section>
@endsection
