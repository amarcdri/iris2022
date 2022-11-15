<div class="stricky-header stricked-menu main-menu main-menu-one">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Main Slider Two Start-->
<section class="main-slider main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
"effect": "fade",
"pagination": {
"el": "#main-slider-pagination",
"type": "bullets",
"clickable": true
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
},
"autoplay": {
"delay": 5000
}}'>
        <div class="swiper-wrapper">
     
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(front/assets/images/backgrounds/slider01.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2>Call For Proposals 2022-23</h2>
                                <p>Submit Expression of Interest application by 15 February 2023</p>
                                <a href="#" class="thm-btn">Call for Proposals</a>
                                {{-- <div class="main-slider-two-map">
                                    <img src="front/assets/images/shapes/main-slider-two-map.png" alt="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav-two">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-angle-right angle-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</section>
<!--Main Slider Two End-->
