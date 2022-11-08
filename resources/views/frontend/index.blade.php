@extends('frontend.layout.app')

@section('content')
@include('frontend.layout.slider')



<!--Feature Two Start-->
<section class="feature-two">
    <div class="container">
        <div class="feature-two__inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Feature Two Single-->
                    <div class="feature-two__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__img">
                            <img src="front/assets/images/resources/feature-2-1.jpg" alt="">
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="about.html">More <br> Charity <br>
                                        Better Lives</a></h3>
                                <a href="about.html" class="feature-two__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Feature Two Single-->
                    <div class="feature-two__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__img feature-two__img-2">
                            <img src="front/assets/images/resources/feature-2-2.jpg" alt="">
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="become-volunteer.html">How to <br>
                                        Bceome <br> Volunteer</a></h3>
                                <a href="become-volunteer.html" class="feature-two__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Feature Two Single-->
                    <div class="feature-two__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__img feature-two__img-3">
                            <img src="front/assets/images/resources/feature-2-3.jpg" alt="">
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="about.html">Give <br> Children <br>
                                        Educations</a></h3>
                                <a href="about.html" class="feature-two__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="feature-two__bottom">
                        <p class="feature-two__bottom-text">Small Donations make Bigger Impact on Someone’s
                            Life. <a href="about.html">Act today!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feature Two End-->

<!--About One Start-->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <h2 class="section-title__title">INFRASTRUCTURE FOR RESILIENT ISLAND STATES (IRIS)</h2>
            </div>
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="front/assets/images/resources/about-one-img-1.png" alt="">
                        <div class="about-one__badge">
                            <img src="front/assets/images/resources/about-one-badge.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="about-one-shape float-bob-y"><img src="front/assets/images/shapes/about-one-shape.png"
                            alt=""></div>
                    <div class="section-title text-left">


                    </div>
                    <div class="about-one__content">

                        <p class="about-two__content-text">Small Island Developing States (SIDS) are a distinct group of 58 island states that face unique social, economic and environmental vulnerabilities owing to their geophysical and structural constraints. Most of these countries are prone to the disastrous effects of climate change. Resilient, sustainable, and inclusive infrastructure plays a key role in mitigating these challenges. More investment and improved institutional capacity for infrastructure systems is urgently needed if SIDS are to maintain their sustainability and effectiveness in service delivery momentum and respond to disaster and climate change risks effectively..</p>
                    </div>

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
<!--About One End-->

<!--Fundraising Start-->
<section class="fundraishing">
    <div class="fundraishing-bg-box">
        <div class="fundraishing-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(front/assets/images/backgrounds/fundraishing-bg.jpg);"></div>
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

<!--Cause Two End-->
<section class="causes-one causes-two">
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">Help the people</span>
            <h2 class="section-title__title">Popular Causes</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="causes-one__carousel owl-theme owl-carousel">
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-1.jpg" alt="">
                            <div class="causes-one__category">
                                <span>education</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="give-them-education.html">Give African Child a Good Education</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress causes-one__progress-2">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-2.jpg" alt="">
                            <div class="causes-one__category">
                                <span>medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="start-a-fundraising.html">A Little Help can Heal their Pains</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-3.jpg" alt="">
                            <div class="causes-one__category">
                                <span>Food</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="clean-pure-water.html">Raise Fund for Clean & Healthy Food</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-1.jpg" alt="">
                            <div class="causes-one__category">
                                <span>education</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="give-them-education.html">Give African Child a Good Education</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress causes-one__progress-2">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-2.jpg" alt="">
                            <div class="causes-one__category">
                                <span>medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="start-a-fundraising.html">A Little Help can Heal their Pains</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-3.jpg" alt="">
                            <div class="causes-one__category">
                                <span>Food</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="clean-pure-water.html">Raise Fund for Clean & Healthy Food</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-1.jpg" alt="">
                            <div class="causes-one__category">
                                <span>education</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="give-them-education.html">Give African Child a Good Education</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress causes-one__progress-2">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-2.jpg" alt="">
                            <div class="causes-one__category">
                                <span>medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="start-a-fundraising.html">A Little Help can Heal their Pains</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-3.jpg" alt="">
                            <div class="causes-one__category">
                                <span>Food</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="clean-pure-water.html">Raise Fund for Clean & Healthy Food</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-1.jpg" alt="">
                            <div class="causes-one__category">
                                <span>education</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="give-them-education.html">Give African Child a Good Education</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress causes-one__progress-2">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-2.jpg" alt="">
                            <div class="causes-one__category">
                                <span>medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="start-a-fundraising.html">A Little Help can Heal their Pains</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-3.jpg" alt="">
                            <div class="causes-one__category">
                                <span>Food</span>
                            </div>
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="clean-pure-water.html">Raise Fund for Clean & Healthy Food</a>
                                </h3>
                                <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                    efficitur...</p>
                            </div>
                            <div class="causes-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cause Two End-->

<!--Gallery One Start-->
<section class="gallery-one">
    <div class="gallery-one__container">
        <ul class="gallery-one__content list-unstyled">
            <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                <div class="gallery-one__img-box">
                    <div class="gallery-one__img-inner">
                        <img src="front/assets/images/gallery/gallery-1-1.jpg" alt="">
                    </div>
                    <div class="gallery-one__img-overly">
                        <div class="gallery-one__icon-bg">
                            <img src="front/assets/images/shapes/gallery-shape.png" alt="">
                        </div>
                        <a class="img-popup" href="front/assets/images/gallery/gallery-1-1.jpg">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </li>
            <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                <div class="gallery-one__img-box">
                    <div class="gallery-one__img-inner">
                        <img src="front/assets/images/gallery/gallery-1-2.jpg" alt="">
                    </div>
                    <div class="gallery-one__img-overly">
                        <div class="gallery-one__icon-bg">
                            <img src="front/assets/images/shapes/gallery-shape.png" alt="">
                        </div>
                        <a class="img-popup" href="front/assets/images/gallery/gallery-1-2.jpg">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </li>
            <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                <div class="gallery-one__img-box">
                    <div class="gallery-one__img-inner">
                        <img src="front/assets/images/gallery/gallery-1-3.jpg" alt="">
                    </div>
                    <div class="gallery-one__img-overly">
                        <div class="gallery-one__icon-bg">
                            <img src="front/assets/images/shapes/gallery-shape.png" alt="">
                        </div>
                        <a class="img-popup" href="front/assets/images/gallery/gallery-1-3.jpg">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </li>
            <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                <div class="gallery-one__img-box">
                    <div class="gallery-one__img-inner">
                        <img src="front/assets/images/gallery/gallery-1-4.jpg" alt="">
                    </div>
                    <div class="gallery-one__img-overly">
                        <div class="gallery-one__icon-bg">
                            <img src="front/assets/images/shapes/gallery-shape.png" alt="">
                        </div>
                        <a class="img-popup" href="front/assets/images/gallery/gallery-1-4.jpg">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </li>
            <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                <div class="gallery-one__img-box">
                    <div class="gallery-one__img-inner">
                        <img src="front/assets/images/gallery/gallery-1-5.jpg" alt="">
                    </div>
                    <div class="gallery-one__img-overly">
                        <div class="gallery-one__icon-bg">
                            <img src="front/assets/images/shapes/gallery-shape.png" alt="">
                        </div>
                        <a class="img-popup" href="front/assets/images/gallery/gallery-1-5.jpg">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--Gallery One End-->



<!--We Change Start-->
<section class="we-change">
    <div class="we-change-bg-box">
        <div class="we-change-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(front/assets/images/backgrounds/we-change-bg.jpg);"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="we-change__left">
                    <div class="we-change__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="we-change__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <p class="we-change__sub-title">We Change Your Life & World</p>
                    <h3 class="we-change__title">We’ve Been Tackling Poverty in Communities to Build a Better
                        Lives</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="we-change__right">
                    <ul class="we-change__counter list-unstyled">
                        <li class="we-change__counter-single wow fadeInUp" data-wow-delay="100ms">
                            <div class="we-change__counter-icon">
                                <span class="icon-campaign"></span>
                            </div>
                            <div class="we-change__counter-content">
                                <h3 class="odometer" data-count="4850">00</h3>
                                <p class="we-change__counter-text">Total Campaigns</p>
                            </div>
                        </li>
                        <li class="we-change__counter-single wow fadeInUp" data-wow-delay="200ms">
                            <div class="we-change__counter-icon we-change__counter-icon-clr-extra">
                                <span class="icon-social-campaign"></span>
                            </div>
                            <div class="we-change__counter-content">
                                <h3 class="odometer" data-count="480">00</h3>
                                <p class="we-change__counter-text">Satisfied Donors</p>
                            </div>
                        </li>
                        <li class="we-change__counter-single wow fadeInUp" data-wow-delay="300ms">
                            <div class="we-change__counter-icon we-change__counter-icon-clr-secondary">
                                <span class="icon-help"></span>
                            </div>
                            <div class="we-change__counter-content">
                                <h3 class="odometer" data-count="2060">00</h3>
                                <p class="we-change__counter-text">Happy Volunteers</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Change End-->

<!--Brand Two Start-->
<section class="brand-two">
    <div class="container">
        <div class="brand-two__inner">
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
                        <img src="front/assets/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="front/assets/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand Two End-->

<!--Blog Two Start-->
<section class="blog-one blog-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">From the Blog</span>
            <h2 class="section-title__title">News & Articles</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Blog One single-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="front/assets/images/blog/blog-1-1.jpg" alt="">
                        <div class="blog-one__date">
                            <p>26 oct</p>
                        </div>
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="blog-details.html">Start a Fundraiser for
                                Yourself</a>
                        </h3>
                        <p class="blog-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur...
                        </p>
                        <div class="blog-one__bottom">
                            <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            <a href="blog-details.html" class="blog-one__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Blog One single-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="front/assets/images/blog/blog-1-2.jpg" alt="">
                        <div class="blog-one__date">
                            <p>26 oct</p>
                        </div>
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="blog-details.html">School Counseling for Children</a>
                        </h3>
                        <p class="blog-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur...
                        </p>
                        <div class="blog-one__bottom">
                            <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            <a href="blog-details.html" class="blog-one__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Blog One single-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="front/assets/images/blog/blog-1-3.jpg" alt="">
                        <div class="blog-one__date">
                            <p>26 oct</p>
                        </div>
                        <a href="blog-details.html">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="blog-details.html">Growing Up children in Charity Care</a>
                        </h3>
                        <p class="blog-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur...
                        </p>
                        <div class="blog-one__bottom">
                            <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            <a href="blog-details.html" class="blog-one__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Two End-->

<!--Help People Start-->
<section class="help-people">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="help-people__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Help the people</span>
                        <h2 class="section-title__title">Volunteers Around the World.</h2>
                    </div>
                    <div class="help-people__content">
                        <p class="help-people__text">Lorem ipsum dolor sit amet, consectetur nod adipisicing
                            elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <a href="become-volunteer.html" class="thm-btn help-people__btn">join us now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="help-people__right">
                    <div class="help-people__map-box">
                        <div class="help-people__map"
                            style="background-image: url(front/assets/images/shapes/help-people-map.png);"></div>
                        <div class="help-people__img">
                            <img src="front/assets/images/resources/help-people-img-1.jpg" class="zoom-fade" alt="">
                        </div>
                        <div class="help-people__img help-people__img-2">
                            <img src="front/assets/images/resources/help-people-img-2.jpg" class="zoom-fade" alt="">
                        </div>
                        <div class="help-people__img help-people__img-3">
                            <img src="front/assets/images/resources/help-people-img-3.jpg" class="zoom-fade" alt="">
                        </div>
                        <div class="help-people__img help-people__img-4">
                            <img src="front/assets/images/resources/help-people-img-4.jpg" class="zoom-fade" alt="">
                        </div>
                        <div class="help-people__img help-people__img-5">
                            <img src="front/assets/images/resources/help-people-img-5.jpg" class="zoom-fade" alt="">
                        </div>
                        <div class="help-people__icon-1">
                            <img src="front/assets/images/icon/help-people-icon-1.png" alt="">
                        </div>
                        <div class="help-people__icon-2">
                            <img src="front/assets/images/icon/help-people-icon-2.png" alt="">
                        </div>
                        <div class="help-people__icon-3">
                            <img src="front/assets/images/icon/help-people-icon-3.png" alt="">
                        </div>
                        <div class="help-people__icon-4">
                            <img src="front/assets/images/icon/help-people-icon-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Help People End-->


        @endsection
