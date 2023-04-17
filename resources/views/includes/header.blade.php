<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li><a  href="tel:{{config('infor.number_phone_zalo')}}"><b class="color-red-main font-size-17"><i class="la la-phone mr-1"></i>{{config('infor.number_phone_zalo')}}</b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="d-flex mr-5">
                                <img src="images/safe.png" alt="" class="image-header">
                                <div class="text-left">
                                    <div><b>An Toàn</b></div>
                                    <p class="font-size-14">
                                        Đội ngũ lái xe chuyên nghiệp, an toàn.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <img src="images/tron-goi.png" alt="" class="image-header">
                                <div class="text-left">
                                    <div><b>Nhanh Chóng</b></div>
                                    <p class="font-size-14">
                                        Đặt xe nhanh chóng, dễ dàng và linh hoạt.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a class="toSession" href="#priceLst">Bảng giá</a>
                                    </li>
                                    <li>
                                        <a  class="toSession" href="#guide">Hướng dẫn đặt xe</a>
                                    </li>
                                    <li>
                                        <a href="{{route('introduce')}}">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->
