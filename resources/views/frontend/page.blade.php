@extends('frontend.layout.app')
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">

        <div class="container">
            <div class="page-header__inner">
                {{-- <h4>{{$pages->title}}</h4> --}}
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li> {{$pages->title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    @if($pages->detailedimage!='NULL')
    <section class="blog-one blog-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="donation-details__left">

                        <div class="donation-details__content">
                            <img src="{{asset($pages->detailedimage)}}" class="iris-img" style="width:100%; height:500px;">
                        </div>


                    </div>
                </div>
            </div>
        </div>
        
    </section>
    @endif

    <!--Donations Details Start-->
    <section class="donations-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="donation-details__left">

                        <div class="donation-details__content">
                            <h3 class="donation-details__title">{{$pages->title}}</h3>
                            {{-- <p class="donation-details__text-1">{{$pages->subtitle}}</p> --}}
                            <p class="donation-details__text-1">{!!$pages->description!!}</p>
                        </div>


                    </div>
                </div>

              
            </div>
           
            {{-- <div class="row">
                
                <div class="col-xl-3 col-lg-2">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle cfp-details">Call for Proposals</h4>
                        <p class="contact-info__customtext"><ul>
                            <li class="clfpi"><a href="" class="cfpa">English</a></li>
                            <li class="clfpi"><a href="" class="cfpa">French</a></li>
                            <li class="clfpi"><a href="" class="cfpa">Spanish</a></li>
                        </ul></p>
                    </div>
                </div>


               
                <div class="col-xl-3 col-lg-2">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle cfp-details">Faqs</h4>
                        <p class="contact-info__customtext"><ul>
                            <li class="clfpi"><a href="" class="cfpa">English</a></li>
                            <li class="clfpi"><a href="" class="cfpa">French</a></li>
                            <li class="clfpi"><a href="" class="cfpa">Spanish</a></li>
                        </ul></p>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-2">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle cfp-details">Templates</h4>
                        <p class="contact-info__customtext">
                            <ul>
                                <li class="clfpi"><a href="" class="cfpa">English</a></li>
                                <li class="clfpi"><a href="" class="cfpa">French</a></li>
                                <li class="clfpi"><a href="" class="cfpa">Spanish</a></li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-2">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle cfp-details">Apply Online</h4>
                        <p class="contact-info__customtext">
                            <ul>
                                <li><a href="" class="cfpa"></a></li>
                                <li><a href="" class="cfpa"></a></li>
                                <li><a href="" class="cfpa"></a></li>
                            </ul>
                           
                        </p>
                    </div>
                </div>

                
            
            </div> --}}

        </div>
        
    </section>

                @endsection
