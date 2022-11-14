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
                    <div class="about">
                   
                        <p class="about-two__content-text">{{$iris->subtitle}}</p>
                        <div id="more">
                            {!!$iris->description!!} 
                        </div>
                        <button class="btn btn-primary btn-sm" onclick="myFunction()" id="myBtn">Read More</button >
                            
                    </div>

               
                    <div class="fundraishing__btn-box text-center">
                      
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
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris2.png')}}" alt="">
                            <div class="causes-one__category">
                               
                            </div>
                        </div>
                   
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris3.png')}}" alt="">
                            <div class="causes-one__category">
               
                            </div>
                        </div>
                  
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris4.png')}}" alt="">
                            <div class="causes-one__category">
                          
                            </div>
                        </div>
                
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris5.png')}}" alt="">
                            <div class="causes-one__category">
                  
                            </div>
                        </div>
                   
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris1.png')}}" alt="">
                            <div class="causes-one__category">
                       
                            </div>
                        </div>
                    
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris6.png')}}" alt="">
                            <div class="causes-one__category">
                      
                            </div>
                        </div>
                    
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris7.png')}}" alt="">
                            <div class="causes-one__category">
                        
                            </div>
                        </div>
                 
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="{{asset('front/assets/gallery/iris8.png')}}" alt="">
                            <div class="causes-one__category">
                           
                            </div>
                        </div>
                   
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-3">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-3.jpg" alt="">
                            <div class="causes-one__category">
                     
                            </div>
                        </div>
                 
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-1.jpg" alt="">
                            <div class="causes-one__category">
                  
                            </div>
                        </div>
                    
                    </div>
                    <!--Cause One Single-->
                    <div class="causes-one__single causes-one__single-2">
                        <div class="causes-one__img">
                            <img src="front/assets/images/causes/causes-1-2.jpg" alt="">
                            <div class="causes-one__category">
                    
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
                 
                    </div>
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
        {{-- <div class="row">
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
                            <li><a href="#"><i class="far fa-user-circle"></i> <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp; {{$date}}</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                             <br/><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; {{$time}}&nbsp;{{'EET'}}<br/>

                 
                            <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{$agenda->venue}} 
                        </ul> --}}

                {{-- <div class="post-prev-info">
                    {{-- 17<sup>TH</sup> NOVEMBER 2022 | 02:00 - 03:00 | {{$agenda->venue}} --}}
                    {{-- <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp; {{$date}} <br/> --}}
                    {{-- <i class="fa fa-clock" aria-hidden="true"></i>&nbsp; {{$time}}&nbsp;{{'EET'}}<br/>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{$agenda->venue}}  --}}
{{--                       
                  </div>
                        <h3 class="blog-one__title">
                            <a href="#">{{$agenda->title}}</a>
                        </h3>
                        <p class="blog-one__text" style="text-align:left">{{$agenda->subtitle}}
                        </p>
                        <div class="blog-one__bottom">
                            <a href="#" class="blog-one__btn">Read More</a>
                            <a href="#" class="blog-one__arrow"><span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
            @endforeach
           --}}
          

        {{-- </div> --}}


        <div class="row">
            <div class="col-xl-6 col-lg-6 wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                <!--Feature One Single-->
                <div class="feature-one__single">
                  
                        <img src="assets/images/resources/donation-details-content-img-1.jpg" alt="">
                
                    <div class="feature-one__content">
                        <h4 class="feature-one__title">Sponsor an Entire Project</h4>
                        <i class="fa fa-calendar one__text" aria-hidden="true"> </i>

                        <p class="feature-one__text">There are many variations of available but the majority
                            have suffered alteration.</p>
                    </div>
                    <a href="#" class="feature-one__btn">More</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                <!--Feature One Single-->
                <div class="feature-one__single feature-one__single-2">
                    <div class="feature-one__icon">
                        <img src="front/assets/images/causes/causes-1-3.jpg" alt="" style="height:200px;">
                    </div>
                    <div class="feature-one__content">
                        <h4 class="feature-one__title">Look at the Popular Causes</h4>
                        <i class="fa fa-calendar one__text" aria-hidden="true"> </i>

                        <p class="feature-one__text">There are many variations of available but the majority
                            have suffered alteration.</p>
                    </div>
                    <a href="#" class="feature-one__btn">More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Two End-->

<!--Help People Start-->

<!--Help People End-->
@yield('js')
<script>
    function myFunction() {
      
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        
        if (btnText.innerHTML === "Read more") {
            moreText.style.display = "inline";
            btnText.innerHTML = "Read less"; 
        } else {
            moreText.style.display = "none";
            btnText.innerHTML = "Read more"; 
        }
    }
    </script>

    @yield('css')
    <style>
#more {display: none;}
</style>
        @endsection
