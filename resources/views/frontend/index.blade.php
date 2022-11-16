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
                                <h3 class="feature-two__title"><a href="{{route('page.detail','improved-resilience-sids-infrastructure')}}">Improved Resilience of SIDS infrastructure to Climate Change and Disaster Risks
                                     </a></h3>
                                <a href="{{route('page.detail','improved-resilience-sids-infrastructure')}}" class="feature-two__arrow"><span
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
                                <h3 class="feature-two__title"><a href="{{route('page.detail','strengthened-knowledge-and-Partnerships-sids-infrastructure')}}">Strengthened Knowledge and Partnerships for Intergrating Resilience in SIDS Infrastructure</a></h3>
                                <a href="{{route('page.detail','strengthened-knowledge-and-Partnerships-sids-infrastructure')}}" class="feature-two__arrow"><span
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
                        <h3 class="feature-two__title"><a href="{{route('page.detail','gender-equality-and-disability-sids-infrastructure')}}">Gender Equality and Disability Inclusion Promoted through Resilient SIDS Infrastructure</a></h3>
                                <a href="{{route('page.detail','gender-equality-and-disability-sids-infrastructure')}}" class="feature-two__arrow"><span
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
                        <button class="btn btn-primary btn-sm" onclick="myFunction()" id="myBtn">Read more</button >
                            
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
            @foreach($events as $ekey => $event)
            <div class="col-xl-6 col-lg-6 wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                <!--Feature One Single-->
                <div class="feature-one__single">
                  
                        <img src="{{asset($event->image)}}" alt="" style="height:160px;">
                
                    <div class="feature-one__content">
                        <h4 class="feature-one__title">{{$event->title}}</h4>
                        {{-- <i class="fa fa-calendar one__text" aria-hidden="true"> </i> --}}

                        <p class="feature-one__text">{{$event->subtitle}}</p>
                    </div>
                    <a href="{{$event->slug}}" class="feature-one__btn">More</a>
                </div>
            </div>
           
            @endforeach
            
        </div>

        <div class="row">
            <div class="col-xl-12 text-center wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
            <div class="fundraishing__btn-box1">

                <a href="{{route('iris.events')}}" class="thm-btn fundraishing__btn">View All</a>
    
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
