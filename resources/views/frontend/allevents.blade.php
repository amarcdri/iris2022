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
                    <li> {{'Events'}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    
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
                            <a href="{{asset($agenda->slug)}}">
                                <span class="news-one__plus"></span>
                            </a>
                        </div>
                        <div class="blog-one__content">
                            {{-- <ul class="list-unstyled blog-one__meta">
                                <li><a href="#">
                                   
                                    <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp; {{$date}}</a></li><br/>
                              
                                 <br/><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; {{$time}}&nbsp;{{'EET'}}<br/>
    
                     
                                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{$agenda->venue}} 
                            </ul> --}}
    
                    {{-- <div class="post-prev-info">
                        <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp; {{$date}} <br/>
                        <i class="fa fa-clock" aria-hidden="true"></i>&nbsp; {{$time}}&nbsp;{{'EET'}}<br/>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{$agenda->venue}} 
                       
                      </div> --}}
                            <h3 class="blog-one__title">
                                <a href="{{asset($agenda->slug)}}">{{$agenda->title}}</a>
                            </h3>
                            <p class="blog-one__text" style="text-align:left">{{$agenda->subtitle}}
                            </p>
                            <div class="blog-one__bottom">
                                <a href="{{asset($agenda->slug)}}" class="blog-one__btn">Read More</a>
                                <a href="{{asset($agenda->slug)}}" class="blog-one__arrow"><span
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

                @endsection
