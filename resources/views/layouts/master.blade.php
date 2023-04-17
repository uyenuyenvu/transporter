<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xe nội bài 29</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <title>@yield('title')</title>

</head>
<body>
<!-- navbar -->
@include('includes.header')
<!-- Main Content -->
@yield('content')
<!-- General JS Scripts -->
@include('includes.footer')
<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<div class="fix_tel">
    <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="bottom: -12px;">
        <div class="ring-alo-ph-circle"></div>
        <div class="ring-alo-ph-circle-fill"></div>
        <div class="ring-alo-ph-img-circle">

            <a href="tel:{{config('infor.number_phone_zalo')}}">
                <img class="lazy"
                     src="https://xenoibai365.com/wp-content/plugins/easy-call-now/public/images/phone-ring.png">
                <noscript>&amp;lt;img
                    src="https://xenoibai365.com/wp-content/plugins/easy-call-now/public/images/phone-ring.png" alt=""&amp;gt;
                </noscript>
            </a>
        </div>
    </div>
    <div class="tel"><a href="tel:{{config('infor.number_phone_zalo')}}">
            <p class="fone">{{config('infor.number_phone_zalo')}}</p></a>
    </div>
</div>
<a href="https://chat.zalo.me/?phone={{config('infor.number_phone_zalo')}}" id="linkzalo" target="_blank" rel="noopener noreferrer">
    <div id="fcta-zalo-tracking" class="fcta-zalo-mess">
        <span id="fcta-zalo-tracking">Chat hỗ trợ</span></div>
    <div class="fcta-zalo-vi-tri-nut">
        <div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut">
            <div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6">
                    <path fill="currentColor" class="st0"
                          d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path>
                </svg>
            </div>
            <div id="fcta-zalo-tracking" class="fcta-zalo-text">Chat ngay</div>
        </div>
    </div>
</a>

<script>
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    document.getElementById("linkzalo").href = "https://zalo.me/{{config('infor.number_phone_zalo')}}";
  }
</script>

<!--Code nút Zalo từ LucidGen.com, anh em tracking Google Tag Manager bằng Click ID chứa fcta-zalo-tracking nhé-->
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/quantity-input.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.expander.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/map.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/home.js"></script>
<script>
  $(document).ready(function () {
    // Add smooth scrolling to all links
    $(".toSession").on('click', function (event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;
        console.log($('#priceLst'))

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1000, function () {

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.demo-1').expander();
    $('.demo-2').expander({
      slicePoint: 50
    });
    $('.demo-3').expander({
      showWordCount: true,
    });
    $('.demo-4').expander({
      expandEffect: 'fadeIn',
      collapseEffect: 'fadeOut',
    });

  });
</script>
<!-- Page Specific JS File -->
</body>
</html>
