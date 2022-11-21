@extends('layouts.promote')
@section('content')


<section class="breadcrumb_part breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>แจ้งบริการ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::regervation_part start::-->
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row align-items-center regervation_content">
            <div class="col-lg-7">
                <div class="regervation_part_iner">
                    <form class="user" method="POST" action="{{route('promotepage.insert')}}" enctype="multipart/form-data">
                        @csrf
                        <h2>แจ้งบริการ</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                name="name"
                                placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                name="phone"
                                placeholder="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <input
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                name="date"
                                placeholder="date">
                            </div>
                            <div class="form-group time_icon col-md-6">
                                <input
                                type="file"
                                class="form-control"
                                id="inputGroupFile02"
                                name="image"
                                placeholder="image">
                            </div>
                            <div class="form-group col-md-12">
                                <input
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                name="details"
                                placeholder="details"></textarea>
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="btn btn-primary mt-3">ส่ง</button>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="reservation_img">
                    <img src="img/reservation.png" alt="" class="reservation_img_iner">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
