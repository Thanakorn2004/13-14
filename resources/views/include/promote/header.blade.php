    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="{{ asset('promote/img/logo1.jpg') }} " alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">หน้าแรก</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">แสดงบริการ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/doctor">แจ้งบริการ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog">ประวัติการทำงาน</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">ผู้จัดทำ</a>
                                </li>
                                
                                <li class="nav-item">
                                <a class="btn_2 d-none d-lg-block" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                                </li>
                              
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->