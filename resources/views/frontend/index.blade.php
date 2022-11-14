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
                                <h3 class="feature-two__title"><a href="about.html">Improved resilience<br>    of SIDS infrastructure <br>to climate change and disaster Risk
                                     </a></h3>
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
                            <img src="front/assets/images/resources/feature-2-1.jpg" alt="">
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="become-volunteer.html">Strengthened knowledge and Partnerships for intergrating resilience <br>
                                        in SIDS  <br> infrastructure</a></h3>
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
                            <img src="front/assets/images/resources/feature-2-1.jpg" alt="">
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="about.html">Gender <br> equality <br>
                                        and disability inclusion promoted through resilient SIDS infrastructure</a></h3>
                                <a href="about.html" class="feature-two__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
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
            <h3 class="donation-details__title">{{$iris->title}}</h3>
            </div>
            <div class="col-xl-5">
               
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/tu-uRxqrAp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen 
                    style="margin-top:17px;"></iframe>
               
            </div>
            <div class="col-xl-7">
                <div class="about-one__right">
                    <div class="about-one-shape float-bob-y"><img src="front/assets/images/shapes/about-one-shape.png"
                            alt=""></div>
                    <div class="section-title text-left">


                    </div>
                    <div class="about-one__content">

                        <p class="about-two__content-text">{{$iris->subtitle}}


                        </p>
                       
                            
                    </div>

               
                    <div class="fundraishing__btn-box text-center">
                        <a href="#" class="thm-btn fundraishing__btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--Fundraising Start-->

<!--Fundraising End-->

<!--Cause Two End-->
<section class="causes-one causes-two">
    
    <div class="container">
        <div class="section-title text-left">
            <h3 class="donation-details__title">GALLERY</h3>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="causes-one__carousel owl-theme owl-carousel">
                    <!--Cause One Single-->
                    @foreach($galleries as $gkey => $gallery)
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{asset($gallery->image)}}" alt="">
                            <div class="causes-one__category">
                               
                            </div>
                        </div>
                   
                    </div> 
                    @endforeach
                   
                    
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cause Two End-->

<!--Gallery One Start-->

<!--Gallery One End-->



<!--We Change Start-->
<section class="we-change">
    <div class="we-change-bg-box">
        <div class="we-change-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(front/assets/images/backgrounds/iris-cop.jpg);"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="we-change__left">
                    <div class="we-change__video-link">
                        <a href="https://www.youtube.com/watch?v=hVI0n0Hu5xE" class="video-popup">
                            <div class="we-change__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <p class="we-change__sub-title">Watch the Launch</p>
                    <h3 class="we-change__title"> Launch of 'Infrastructure for Resilient Island States' (IRIS) at COP26 </h3>
                </div>
            </div>
     
        </div>
    </div>
</section>
<!--We Change End-->

<!--Brand Two Start-->

<!--Brand Two End-->

<!--Blog Two Start-->
<section class="blog-one blog-two">
    <div class="container">
        <div class="section-title">
         <h3 class="donation-details__title">EVENTS</h3>
        </div>
        <div class="row">
            @foreach($agendas as $key => $agenda)
            @php
            $date='';
            $time='';
            $stime='';
            $etime='';
            $date=\Carbon\Carbon::parse($agenda->startdate)->format('M j, Y');
            $hdate=\Carbon\Carbon::parse($agenda->startdate)->format('j M, Y');
            $stime=\Carbon\Carbon::parse($agenda->startdate)->format('g:i A');
            $etime=\Carbon\Carbon::parse($agenda->enddate)->format('g:i A');
            $time=$stime.' - '.$etime;
           @endphp 
          
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Blog One single-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="{{asset($agenda->image)}}" alt="">
                        <div class="blog-one__date">
                            <p>{{$hdate}}</p>
                        </div>
                        <a href="{{asset($agenda->slugurl)}}">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="blog-one__content">
                        {{-- <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp; {{$date}}</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                             <br/><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; {{$time}}&nbsp;{{'EET'}}<br/>

                 
                            <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{$agenda->venue}} 
                        </ul> --}}

                <div class="post-prev-info">
                    {{-- 17<sup>TH</sup> NOVEMBER 2022 | 02:00 - 03:00 | {{$agenda->venue}} --}}
                    {{-- <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp; {{$date}} <br/> --}}
                    <i class="fa fa-clock" aria-hidden="true"></i>&nbsp; {{$time}}&nbsp;{{'EET'}}<br/>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{$agenda->venue}} 
                      
                  </div>
                        <h3 class="blog-one__title">
                            <a href="blog-details.html">{{$agenda->title}}</a>
                        </h3>
                        <p class="blog-one__text" style="text-align:left">{{$agenda->subtitle}}
                        </p>
                        <div class="blog-one__bottom">
                            <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            <a href="blog-details.html" class="blog-one__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
</section>
<!--Blog Two End-->

<!--Help People Start-->

<!--Help People End-->


        @endsection
