@extends('frontend.layout.app')

@section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Page Start-->
        <section class="about-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-page__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-page__img">
                                <img src="assets/images/resources/about-page-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-page__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">get to know us</span>
                                <h2 class="section-title__title">We Make Difference in their Life</h2>
                            </div>
                            <p class="about-page__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit
                                sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm
                                andhn.</p>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-confirmation"></span>
                                    </div>
                                    <div class="text">
                                        <p>Join our Team</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-confirmation"></span>
                                    </div>
                                    <div class="text">
                                        <p>Quick Fundraising</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="about-one__points-content list-unstyled">
                                <li>
                                    <p class="about-one__points-text">Lorem ipsum dolor sit ame ed consectetur nod.</p>
                                </li>
                                <li>
                                    <p class="about-one__points-text">Lorem ipsum dolor sit ame ed consectetur nod.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Page End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Fundraising Start-->
        <section class="fundraishing">
            <div class="fundraishing-bg-box">
                <div class="fundraishing-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/fundraishing-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="fundraishing__inner">
                            <p class="fundraishing__sub-title">We’re Here to Support Them</p>
                            <h2 class="fundraishing__title">Fundraising for the <span>People</span> and <br> Causes you
                                Care About</h2>
                            <div class="fundraishing__btn-box">
                                <a href="donate-now.html" class="thm-btn fundraishing__btn">Start Donating now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fundraising End-->

        <!--Testimonial Three Start-->
        <section class="testimonial-two testimonial-three">
            <div class="testimonial-two-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-two-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">our testimonials</span>
                                <h2 class="section-title__title">What They’re Talking About Company?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-two__right">
                            <div class="testimonial-two__carousel owl-carousel owl-theme">
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content">
                                        <div class="testimonial-two__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet,
                                            consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="assets/images/testimonial/testimonials-2-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h5 class="testimonial-two__client-name">Kevin Martin</h5>
                                            <p class="testimonial-two__client-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content">
                                        <div class="testimonial-two__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet,
                                            consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="assets/images/testimonial/testimonials-2-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h5 class="testimonial-two__client-name">Sarah Albert</h5>
                                            <p class="testimonial-two__client-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content">
                                        <div class="testimonial-two__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet,
                                            consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="assets/images/testimonial/testimonials-2-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h5 class="testimonial-two__client-name">Kevin Martin</h5>
                                            <p class="testimonial-two__client-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content">
                                        <div class="testimonial-two__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet,
                                            consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="assets/images/testimonial/testimonials-2-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h5 class="testimonial-two__client-name">Sarah Albert</h5>
                                            <p class="testimonial-two__client-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content">
                                        <div class="testimonial-two__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet,
                                            consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="assets/images/testimonial/testimonials-2-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h5 class="testimonial-two__client-name">Kevin Martin</h5>
                                            <p class="testimonial-two__client-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Two Single-->
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content">
                                        <div class="testimonial-two__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet,
                                            consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <div class="testimonial-two__client-img">
                                            <img src="assets/images/testimonial/testimonials-2-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-two__client-details">
                                            <h5 class="testimonial-two__client-name">Sarah Albert</h5>
                                            <p class="testimonial-two__client-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

        <!--Volunteers One Start-->
        <section class="volunteers-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Ready to help you</span>
                    <h2 class="section-title__title">Happy Volunteers</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Volunteers One Single-->
                        <div class="volunteers-one__single">
                            <div class="volunteers-one__img">
                                <img src="assets/images/team/volunteers-1-1.jpg" alt="">
                                <div class="volunteers-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="volunteers-one__content">
                                <h4 class="volunteers-one__name">Sarah Albert</h4>
                                <p class="volunteers-one__title">Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Volunteers One Single-->
                        <div class="volunteers-one__single">
                            <div class="volunteers-one__img">
                                <img src="assets/images/team/volunteers-1-2.jpg" alt="">
                                <div class="volunteers-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="volunteers-one__content">
                                <h4 class="volunteers-one__name">Kevin Martin</h4>
                                <p class="volunteers-one__title">Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Volunteers One Single-->
                        <div class="volunteers-one__single">
                            <div class="volunteers-one__img">
                                <img src="assets/images/team/volunteers-1-3.jpg" alt="">
                                <div class="volunteers-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="volunteers-one__content">
                                <h4 class="volunteers-one__name">Jeesica Brown</h4>
                                <p class="volunteers-one__title">Volunteers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Volunteers One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="cta-one-shape" style="background-image: url(assets/images/shapes/cta-one-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <div class="cta-one__icon">
                                    <span class="icon-support"></span>
                                </div>
                                <h2 class="cta-one__title">Let’s Make a Difference in <br> the Lives of Others</h2>
                            </div>
                            <div class="cta-one__right">
                                <a href="become-volunteer.html" class="thm-btn cta-one__btn">become a volunteer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->



@endsection