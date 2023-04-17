<section id="footer" class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a  href="{{route('home')}}" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Hãy liên hệ ngay qua đường dây nóng với chúng tôi để có ưu đãi và dịch vụ tốt nhất.</p>
                    <ul class="list-items pt-3">
                        <li>Địa chỉ: HH2 Dương Nội - Hà Đông - Hà Nội</li>
                        <li>Hotline: <a href="tel:{{config('infor.number_phone_zalo')}}">{{config('infor.number_phone_zalo')}}</a></li>
                        <li>Email: {{config('infor.email')}}</li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Giới Thiệu</h4>
                    <ul class="list-items list--items">
                        <li><a >Trang Chủ</a></li>
                        <li><a class="toSession" href="#priceLst">Bảng Giá</a></li>
                        <li><a  class="toSession" href="#guide">Hướng Dẫn Đặt Xe</a></li>
                        <li><a href="{{route('introduce')}}">Giới Thiệu</a></li>
                        <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Dịch Vụ</h4>
                    <ul class="list-items list--items">
                        <li><a href="{{route('home')}}">Taxi Sân Bay</a></li>
                        <li><a href="{{route('home')}}">Taxi Đường Dài</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
</section>
