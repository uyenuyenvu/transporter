@extends('layouts.master')

@section('title')
    XeNoiBai29
@endsection

@section('content')

    <!-- ================================
    START SUBMIT ORDER AREA
================================= -->
    <section class="hero-wrapper" id="from">
        <div class="hero-box hero-bg">
            <span class="line-bg line-bg1"></span>
            <span class="line-bg line-bg2"></span>
            <span class="line-bg line-bg3"></span>
            <span class="line-bg line-bg4"></span>
            <span class="line-bg line-bg5"></span>
            <span class="line-bg line-bg6"></span>
            <div class="container">
                <div class="row">
                    <div class="col-9 responsive--column-l">
                        <div class="hero-content pb-5">
                            <div class="section-heading">
                                <h2 class="sec__title cd-headline zoom">
                                 <span class="cd-words-wrapper">
                                <b class="is-visible">Chuyến Xe</b>
                                <b>Quãng Đường</b>
                                </span>
                                    tuyệt vời đang chờ bạn
                                </h2>
                            </div>
                        </div><!-- end hero-content -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 responsive--column-l">
                        <div class="section-tab text-center pl-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="flight-tab"
                                       data-toggle="tab" href="#flight" role="tab" aria-controls="flight"
                                       aria-selected="true">
                                        <i class="la la-plane mr-1"></i>Sân Bay
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="hotel-tab" data-toggle="tab"
                                       href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                        <i class="la la-hotel mr-1"></i>Đường Dài
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel"
                                 aria-labelledby="flight-tab">
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                         aria-labelledby="one-way-tab">
                                        <div class="contact-form-action">
                                            <form  class="row align-items-center">
                                                {{ csrf_field() }}
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Điểm Đón</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text" id="startTab1"
                                                                   placeholder="Nhập điểm đón">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Điểm Đến</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text" id="endTab1" placeholder="Nhập điểm đến"
                                                                   value="Sân bay nội bài" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <div class="button-orange text-center" id="reverseTab1">
                                                        <span class="la la-random"></span>
                                                        Đảo Chiều
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Họ và Tên</label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input class="form-control" type="text" id="nameTab1"
                                                                   placeholder="Nhập họ và tên">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Số Điện Thoại</label>
                                                        <div class="form-group">
                                                            <span class="la la-phone form-icon"></span>
                                                            <input class="form-control" type="text" id="numberPhoneTab1"
                                                                   placeholder="Nhập số điện thoại">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-12">
                                                    <div id="submitTab1"
                                                       class="theme-btn w-100 text-center margin-top-20px">Đặt Xe</div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="contact-form-action">
                                    <form class="row align-items-center">
                                        {{ csrf_field() }}
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Điểm Đón</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input id="startTab2" class="form-control" type="text" placeholder="Nhập điểm đón">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Điểm Đến</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input id="endTab2" class="form-control" type="text" placeholder="Nhập điểm đến">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex">
                                            <div class="button-orange text-center" id="reverseTab2">
                                                <span class="la la-random"></span>
                                                Đảo chiều
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Họ và Tên</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" id="nameTab2"
                                                           placeholder="Nhập họ và tên">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Số Điện Thoại</label>
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input class="form-control" type="text" id="numberPhoneTab2"
                                                           placeholder="Nhập số điện thoại">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-12">
                                            <div id="submitTab2"
                                               class="theme-btn w-100 text-center margin-top-20px">Đặt Xe
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end tab-pane -->
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>
        </div>
    </section><!-- end hero-wrapper -->
    <!-- ================================
        END SUBMIT ORDER AREA
    ================================= -->

    <!-- ================================
        START INFO AREA
    ================================= -->
    <section class="info-area info-bg padding-top-50px padding-bottom-50px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-shield"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">An Toàn</h4>
                            <p class="info__desc">
                                Đội ngũ lái xe chuyên nghiệp, an toàn là người bạn đồng hành đáng tin cậy.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box margin-top-50px">
                        <div class="info-icon">
                            <i class="la la-shipping-fast"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Nhanh Chóng</h4>
                            <p class="info__desc">
                                Cam kết sẽ luôn đúng giờ, tốc độ để không ảnh hưởng tới công việc của bạn.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-piggy-bank"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Tiết Kiệm</h4>
                            <p class="info__desc">
                                Tiết kiệm được từ 30% đến 50% chi phí so với bắt xe dọc đường
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
        END INFO AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START PRICE LIST
    ================================= -->
    <section id="priceLst" class="cta-area padding-top-100px padding-bottom-180px text-center">
        <div class="video-bg">
            <video autoplay loop style="height: 100%">
                <source src="video/video-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <div class="row padding-bottom-50px">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55 text-white">Bảng Giá Đặt Xe</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title"><p><span class="la la-plane"></span> BẢNG GIÁ CƯỚC XE ĐƯA ĐÓN SÂN BAY NỘI
                                    BÀI</p></h3>
                        </div>
                        <div class="form-content">
                            <div class="table-form table-responsive">
                                <table class="table-price">
                                    <thead>
                                    <tr>
                                        <th scope="col">LOẠI XE</th>
                                        <th scope="col">HÀ NỘI – NỘI BÀI</th>
                                        <th scope="col">NỘI BÀI – HÀ NỘI</th>
                                        <th scope="col">KHỨ HỒI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-bottom-gray">
                                        <td>
                                            <img src="images/4slot.png" alt="" class="car">
                                        </td>
                                        <td>200k – 250k</td>
                                        <td>250k – 300k</td>
                                        <td>450,000đ</td>
                                    </tr>
                                    <tr class="border-bottom-gray">
                                        <td>
                                            <img src="images/7slot.png" alt="" class="car">
                                        </td>
                                        <td>200k – 250k</td>
                                        <td>250k – 300k</td>
                                        <td>450,000đ</td>
                                    </tr>
                                    <tr class="border-bottom-gray">
                                        <td>
                                            <img src="images/16slot.png" alt="" class="car">
                                        </td>
                                        <td>200k – 250k</td>
                                        <td>250k – 300k</td>
                                        <td>450,000đ</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="4" class="padding-top-20px"><i>* Giá trên đã bao gồm phụ phí ra vào
                                                sân bay</i></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title"><p><span class="la la-road"></span> BẢNG GIÁ CƯỚC ĐƯỜNG DÀI</p></h3>
                        </div>
                        <div class="form-content">
                            <div class="table-form table-responsive">
                                <table class="table-price">
                                    <thead>
                                    <tr>
                                        <th scope="col">LOẠI XE</th>
                                        <th scope="col">ĐẶT XE 1 CHIỀU</th>
                                        <th scope="col">ĐẶT XE 1 CHIỀU</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-bottom-gray">
                                        <td>
                                            <img src="images/4slot.png" alt="" class="car">
                                        </td>
                                        <td>10K/KM</td>
                                        <td>12K/KM</td>
                                    </tr>
                                    <tr class="border-bottom-gray">
                                        <td>
                                            <img src="images/7slot.png" alt="" class="car">
                                        </td>
                                        <td>6K/KM</td>
                                        <td>8K/KM</td>
                                    </tr>
                                    <tr class="border-bottom-gray">
                                        <td>
                                            <img src="images/16slot.png" alt="" class="car">
                                        </td>
                                        <td>14K/KM</td>
                                        <td>10K/KM</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center padding-top-20px"><i>* Giá trên chưa bao gồm
                                                phí cầu đường</i></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="cta-svg-2" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </section>
    <!-- ================================
        START PRICE LIST
    ================================= -->

    <!-- ================================
        START TAXI PRICE AREA
    ================================= -->
    <section id="priceLst2" class=" section-bg round-trip-flight section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Bảng Giá Taxi Nội Bài - Hà Nội</h2>
                        <p class="sec__desc pt-3">Bảng giá phía dưới chỉ mang tính chất tham khảo. Để nhận giá chính xác nhất quý khách vui lòng liên hệ trực tiếp để được tư vấn</p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="flight-filter-tab text-center">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs justify-content-center" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="slot5-tab" data-toggle="tab" href="#slot5" role="tab"
                                       aria-controls="slot5" aria-selected="false">
                                        Xe 5 Chỗ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="slot7-tab" data-toggle="tab" href="#slot7" role="tab"
                                       aria-controls="slot7" aria-selected="false">
                                        Xe 7 Chỗ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="slot16-tab" data-toggle="tab" href="#slot16" role="tab"
                                       aria-controls="slot16" aria-selected="false">
                                        Xe 16 Chỗ
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                    </div><!-- end flight-filter-tab -->
                    <div class="popular-round-trip-wrap padding-top-40px">
                        <div class="tab-content" id="myTabContent4">
                            <div class="tab-pane fade show active" id="slot5" role="tabpanel" aria-labelledby="slot5">
                                <div class="table-form table-responsive">
                                    <table class="table-price text-center">
                                        <thead class="bg-red-main">
                                        <tr>
                                            <th scope="col">TUYẾN ĐƯỜNG</th>
                                            <th scope="col">GIÁ</th>
                                            <th scope="col">TUYẾN ĐƯỜNG</th>
                                            <th scope="col">GIÁ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="border-bottom-red">
                                            <td class="text-black">Tây Hồ – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Tây Hồ</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red bg-red-opacity">
                                            <td class="text-black">Cầu Giấy – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Cầu Giấy</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red">
                                            <td class="text-black">Hoàn Kiếm – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Hoàn Kiếm</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red bg-red-opacity">
                                            <td class="text-black">Bắc Từ Liêm– Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Bắc Từ Liêm</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red">
                                            <td class="text-black"> Ba Đình – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Ba Đình</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red bg-red-opacity">
                                            <td class="text-black">Nam Từ Liêm – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Nam Từ Liêm</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red ">
                                            <td class="text-black">Đống Đa – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Đống Đa</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red bg-red-opacity">
                                            <td class="text-black">Thanh Xuân – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Thanh Xuân</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red">
                                            <td class="text-black">Long Biên – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Long Biên</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red bg-red-opacity">
                                            <td class="text-black">Hai Bà Trưng – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Hai Bà Trưng</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red">
                                            <td class="text-black">Hoàng Mai – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Hoàng Mai</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr class="border-bottom-red bg-red-opacity">
                                            <td class="text-black">Thanh Trì – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Thanh Trì</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        <tr>
                                            <td class="text-black"> Hà Đông – Nội Bài</td>
                                            <td>200k – 250k</td>
                                            <td class="text-black"> Nội Bài - Hà Đông</td>
                                            <td>200k – 250k</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="slot7" role="tabpanel" aria-labelledby="slot7">
                                <table class="table-price text-center">
                                    <thead class="bg-red-main">
                                    <tr>
                                        <th scope="col">TUYẾN ĐƯỜNG</th>
                                        <th scope="col">GIÁ</th>
                                        <th scope="col">TUYẾN ĐƯỜNG</th>
                                        <th scope="col">GIÁ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Tây Hồ – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Tây Hồ</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Cầu Giấy – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Cầu Giấy</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Hoàn Kiếm – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hoàn Kiếm</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Bắc Từ Liêm– Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Bắc Từ Liêm</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black"> Ba Đình – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Ba Đình</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Nam Từ Liêm – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Nam Từ Liêm</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red ">
                                        <td class="text-black">Đống Đa – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Đống Đa</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Thanh Xuân – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Thanh Xuân</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Long Biên – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Long Biên</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Hai Bà Trưng – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hai Bà Trưng</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Hoàng Mai – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hoàng Mai</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Thanh Trì – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Thanh Trì</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black"> Hà Đông – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hà Đông</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="slot16" role="tabpanel" aria-labelledby="slot16">
                                <table class="table-price text-center">
                                    <thead class="bg-red-main">
                                    <tr>
                                        <th scope="col">TUYẾN ĐƯỜNG</th>
                                        <th scope="col">GIÁ</th>
                                        <th scope="col">TUYẾN ĐƯỜNG</th>
                                        <th scope="col">GIÁ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Tây Hồ – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Tây Hồ</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Cầu Giấy – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Cầu Giấy</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Hoàn Kiếm – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hoàn Kiếm</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Bắc Từ Liêm– Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Bắc Từ Liêm</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black"> Ba Đình – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Ba Đình</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Nam Từ Liêm – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Nam Từ Liêm</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red ">
                                        <td class="text-black">Đống Đa – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Đống Đa</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Thanh Xuân – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Thanh Xuân</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Long Biên – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Long Biên</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Hai Bà Trưng – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hai Bà Trưng</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red">
                                        <td class="text-black">Hoàng Mai – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hoàng Mai</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr class="border-bottom-red bg-red-opacity">
                                        <td class="text-black">Thanh Trì – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Thanh Trì</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black"> Hà Đông – Nội Bài</td>
                                        <td>200k – 250k</td>
                                        <td class="text-black"> Nội Bài - Hà Đông</td>
                                        <td>200k – 250k</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- ================================
        END TAXI PRICE AREA
    ================================= -->

    <!-- ================================
        START NOTE AREA
    ================================= -->
    <section id="note" class="info-area info-bg info-area2 section-padding">
        <div class="container">
            <div class="row padding-bottom-50px">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Những lưu ý</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row space-evenly">
                <div class="col-lg-5 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-1">
                            <i class="las la-radiation"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <p class="info__desc">
                                Giá xe đi sân bay Nội Bài đã bao gồm phí ra vào sân bay. Hãy liên hệ hotline để có giá
                                tốt nhất.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-5 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-3">
                            <i class="las la-money-bill-wave"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <p class="info__desc">
                                Có thể thêm phụ phí từ 10,000-30,000đ khi đi khung giờ sáng sớm hoặc đêm muộn
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-5 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-4">
                            <i class="las la-clock"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <p class="info__desc">
                                Giá xe taxi đi Nội Bài được áp dụng trong khung giờ 8h00 – 22h00, chưa bao gồm thuế
                                GTGT.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-5 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-5">
                            <i class="las la-holly-berry"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <p class="info__desc">
                                Bảng giá taxi Nội Bài không áp dụng cho các ngày lễ tết.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- ================================
        END NOTE AREA
    ================================= -->


    <!-- ================================
        START GUIDE AREA
    ================================= -->
    <section id="guide" class="recom-area position-relative section-bg padding-top-100px padding-bottom-140px">
        <div class="container">
            <div class="row padding-bottom-50px">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Hướng Dẫn Đặt Xe</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="cruise-heading">
                        <h2 class="title">CÁCH 1: ĐẶT XE BẰNG FROM</h2>
                    </div>
                    <div class="timeline">
                        <ul>
                            <li>
                                <div class="right_content">
                                    <h3>Bước 1: Nhập Thông Tin</h3>
                                    <p>
                                        Vui lòng nhấn <a href="#">Vào đây</a>, và điền đầy đủ thông tin sau đó nhấn "Đặt Xe".
                                       </p>
                                </div>
                            </li>
                            <li>
                                <div class="right_content">
                                    <h3>Bước 2: Chờ Tổng Đài Liên Hệ</h3>
                                    <p>
                                       Tổng đài sẽ liên hệ lại cho bạn trong vòng 15 phút.</p>
                                </div>
                            </li>
                            <div style="clear:both;"></div>
                        </ul>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="cruise-heading">
                        <h2 class="title">CÁCH 2: LIÊN HỆ TỔNG ĐÀI</h2>
                    </div>
                    <div class="timeline">
                        <ul>
                            <li>
                                <div class="right_content">
                                    <h3>Bước 1: Gọi Vào Hotline</h3>
                                    <p>
                                        Gọi vào số hotline: <a href="tel:{{config('infor.number_phone_zalo')}}" class="color-red-main"><b>{{config('infor.number_phone_zalo')}}</b></a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="right_content">
                                    <h3>Bước 2: Tổng Đài Xác Nhận</h3>
                                    <p>
                                        Tổng đài sẽ xác nhận thông tin đặt xe của bạn </p>
                                </div>
                            </li>
                            <div style="clear:both;"></div>
                        </ul>
                    </div>

                </div><!-- end col-lg-6 -->
            </div><!-- end row -->

        </div><!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M-103.55,167.27 C150.39,-132.72 134.59,237.33 517.77,30.09 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    </section>
    <!-- ================================
        END GUIDE AREA
    ================================= -->

    <!-- ================================
        START RATE LIST
    ================================= -->
    <section id="rate" class="trending-area position-relative section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title"> PHẢN HỒI CỦA KHÁCH HÀNG</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-2 carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Tôi là một khách hàng đã sử dụng dịch vụ của Xe Nội Bài 29.
                                    Tôi và gia đình có thuê 1 xe 16 chỗ bên công ty để về quê.
                                    Lái xe chuyên nghiệp mà thân thiện và nói chuyện với khách rất vui vẻ,
                                    xe rất sạch sẽ.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/user1.PNG" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Lương Anh Tú</h4>
                                    <span class="author__meta">Ba Đình</span>
                                    <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Đội ngũ tài xế chuyên nghiệp và hệ thống xe mới, tiện nghi.
                                    Bắt xe vào bất cứ khung giờ nào ở sân bay Nội Bài một cách nhanh chóng với mức giá
                                    tương đối hợp lý.
                                    Tôi rất hài lòng
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/user5.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Phương Linh</h4>
                                    <span class="author__meta">Ba Đình</span>
                                    <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Tôi và các đồng nghiệp trong công ty thường xuyên sử dụng dịch vụ taxi sân bay của
                                    Xe Nội Bài 29.
                                    Chúng tôi cảm thấy hài lòng về thái độ, sự chuyên nghiệp của lái xe và chất lượng
                                    xe.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/user3.PNG" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">
                                        Phùng Xuân Thực
                                    </h4>
                                    <span class="author__meta">Gia Lâm</span>
                                    <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Tôi đặt chuyến trước 20 ngày nhưng tổng đài luôn gọi điện báo trước lịch cho tôi vì
                                    sợ tôi quên lịch.
                                    Lái xe trước khi đến còn cẩn thận gọi điện thoại cho tôi và đến rất đúng giờ.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/user2.PNG" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Phan Thùy</h4>
                                    <span class="author__meta">Hai Bà Trưng</span>
                                    <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Đội ngũ tài xế chuyên nghiệp và hệ thống xe mới, tiện nghi.
                                    Bắt xe vào bất cứ khung giờ nào ở sân bay Nội Bài một cách nhanh chóng với mức giá
                                    tương đối hợp lý.
                                    Tôi rất hài lòng
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/user4.PNG" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Phạm Hùng</h4>
                                    <span class="author__meta">Mỹ Đình</span>
                                    <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                    </div><!-- end testimonial-carousel -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="cta-svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
            <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
        </svg>
    </section>
    <!-- ================================
        END RATE LIST
    ================================= -->

    <!-- ================================
        START EXPERIENCE AREA
    ================================= -->
    <section id="question" class="faq-area section--padding">
        <div class="container">
            <div class="row padding-bottom-50px">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Những Kinh Nghiệm Đặt Xe Đi Sân Bay</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-7">
                    <div class="accordion accordion-item" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="faqHeadingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseOne"
                                            aria-expanded="true" aria-controls="faqCollapseOne">
                                        <span>1.Tham khảo giá cả</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Có rất nhiều hãng taxi khác nhau.
                                        Bạn có thể dễ dàng tìm được một chiếc xe để đi ra sân bay mà không tốn nhiều thời gian. Giá cước di chuyển giữa các hãng taxi khác nhau có sự khác biệt lớn.
                                        Quý khách cần tham khảo kỹ càng để tiết kiệm chi phí đi lại một cách hiệu quả nhất
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="faqHeadingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseTwo"
                                            aria-expanded="false" aria-controls="faqCollapseTwo">
                                        <span>2. Ghi nhớ tên lái xe và biển số xe</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Đi taxi chúng ta vẫn luôn sợ hãi với các vụ cướp, giết, các tệ nạn… Đây là điều khiến khách hàng cân nhắc, cẩn trọng hơn để bảo vệ mình và tài sản của mình.
                                        Thời gian qua, rất nhiều vụ giết, cướp xảy ra khi đi xe taxi. Điều này khiến chúng ta cân nhắc, cẩn trọng hơn trong việc bảo toàn mạng sống</p>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="faqHeadingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseThree"
                                            aria-expanded="false" aria-controls="faqCollapseThree">
                                        <span>3. Lựa chọn kích thước xe</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Hiện tại, thị trường phổ biến dòng taxi từ 4 đến 16 chỗ. Khách hàng hãy tính toán kỹ càng số người đi cùng số hành lý mang theo.
                                        Từ đó, quyết định lựa chọn chiếc xe phù hợp nhất với nhu cầu
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="faqHeadingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseFour"
                                            aria-expanded="false" aria-controls="faqCollapseFour">
                                        <span>4.Đặt taxi trước</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Vào một số thời điểm trong ngày, việc đặt được taxi là cực kỳ khó khăn; nhất là vào các khung giờ cao điểm.
                                        Do đó, bạn nên đặt xe trước, bên công ty cung cấp xe sẽ tính toán để đảm bảo thời gian di chuyển là tối ưu.
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="faqHeadingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseFive"
                                            aria-expanded="false" aria-controls="faqCollapseFour">
                                        <span>5.Yêu cầu đúng giờ</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Chỉ cần chậm một phút, có thể khách hàng sẽ không lên được chuyến bay đặt trước.
                                        Do đó, hãy thông báo giờ bay và số hiệu chuyến bay với hãng xe. Yêu cầu họ đến đón đúng giờ để đảm bảo lịch trình của mình.
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="faqHeadingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseSix"
                                            aria-expanded="false" aria-controls="faqCollapseSix">
                                        <span>6.Không gọi hay vẫy xe dọc đường</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Quanh các khu vực đông người di chuyển như Nội Bài, nhu cầu thuê taxi rất cao. Kéo theo đó, lượng taxi dù tăng lên. Để không vướng vào những cái bẫy vô hình này thì các bạn tuyệt đối không được vẫy hay bắt xe dọc đường.
                                        Một cách uy tín nhất vẫn là dành thời gian đặt xe trên các website uy tín, từ các tổng đài nó sẽ giúp bạn có những chuyến đi hoàn hảo. </p>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <div class="accordion-help-text pt-2">
                        <p class="font-size-14 font-weight-regular">
                            Hy vọng với những thông tin chúng tôi đã chia sẻ đã mang đến cho quý khách những điều hữu
                            ích.
                            Để được tư vấn đặt xe taxi Nội Bài Hà Nội, quý khách để lại thông tin để được tư vấn miễn
                            phí.
                            Chúc các bạn luôn an toàn trên mọi cung đường.
                        </p>
                    </div>
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <img src="images/bg2.jpg" alt="" class="bg2">
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end faq-area -->

    <!-- ================================
        END EXPERIENCE AREA
    ================================= -->
<!--    input number phone -->
    <input type="text" value="{{config('infor.number_phone_zalo')}}" style="display:none;" id="systemPhone">
@endsection
