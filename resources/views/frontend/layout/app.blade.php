<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IRIS</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="front/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="front/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="front/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="front/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Pifoxen HTML Template For Donation" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Fredoka+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="front/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="front/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="front/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="front/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="front/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/pifoxen-icons/style.css">
    <link rel="stylesheet" href="front/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="front/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="front/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="front/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="front/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="front/assets/css/pifoxen.css" />
    <link rel="stylesheet" href="front/assets/css/pifoxen-responsive.css" />
</head>

<body>
    {{-- <div class="preloader">
        <img class="preloader__image" width="60" src="front/assets/images/loader.png" alt="" />
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('frontend.layout.header')



        @yield('content')




        @include('frontend.layout.footer')

            <!--Site Footer End-->
        </div><!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="front/assets/images/resources/logo-2.png" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@packageName__.com">needhelp@pifoxen.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


        <script src="front/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
        <script src="front/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="front/assets/vendors/jarallax/jarallax.min.js"></script>
        <script src="front/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
        <script src="front/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
        <script src="front/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
        <script src="front/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="front/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
        <script src="front/assets/vendors/nouislider/nouislider.min.js"></script>
        <script src="front/assets/vendors/odometer/odometer.min.js"></script>
        <script src="front/assets/vendors/swiper/swiper.min.js"></script>
        <script src="front/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
        <script src="front/assets/vendors/wnumb/wNumb.min.js"></script>
        <script src="front/assets/vendors/wow/wow.js"></script>
        <script src="front/assets/vendors/isotope/isotope.js"></script>
        <script src="front/assets/vendors/countdown/countdown.min.js"></script>
        <script src="front/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="front/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
        <script src="front/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="front/assets/vendors/vegas/vegas.min.js"></script>
        <script src="front/assets/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="front/assets/vendors/timepicker/timePicker.js"></script>




        <!-- template js -->
        <script src="front/assets/js/pifoxen.js"></script>
    </body>

    </html>