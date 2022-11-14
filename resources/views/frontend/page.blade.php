@extends('frontend.layout.app')
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">

        <div class="container">
            <div class="page-header__inner">
                <h4>{{$pages->title}}</h4>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li> {{$pages->title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Donations Details Start-->
    <section class="donations-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="donation-details__left">

                        <div class="donation-details__content">
                            <h3 class="donation-details__title">{{$pages->title}}</h3>
                            <p class="donation-details__text-1">{{$pages->subtitle}}</p>
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

    <section class="paq-page">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                    STRATEGIC INTERVENTION: RISK-INFORMED POLICY AND PLANNING
                            </button>
                        </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           The priority will be to strengthen institutional and regulatory frameworks for policy, planning, execution, operation, regulation, and maintenance to increase the resilience of infrastructure against the disaster and climate-induced risks in SIDS. This will include providing technical support to develop risk and resilience policies and strategies, infrastructure standards and building codes, disaster risk reduction and climate adaptation plans for infrastructure development, undertaking risk and resilience assessments and post-disaster assessments of critical infrastructure sectors to support recovery and reconstruction. Technical support will be provided through facilitating the use of climate and disaster risk data for informed decision-making for infrastructure policy, financing, planning, and management.



                            </div>
                        </div>
                    </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"                             data-bs-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                          STRATEGIC INTERVENTION: READINESS SUPPORT
                            </button>
                        </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">


          The priority will be to identify and strengthen mechanisms, tools, frameworks and approaches required to implement an integrated disaster risk reduction strategy that builds infrastructure resilience. This will include providing support for Business Continuity Planning (BCP) to stakeholders engaged in infrastructure provisioning in SIDS. Under this strategic priority the focus will be on strengthening implementing mechanisms for realising resilient infrastructure.

                            </div>
                        </div>
                    </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingthree">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"                             data-bs-target="#collapsethree"
                            aria-expanded="false" aria-controls="collapsethree">
                        STRATEGIC INTERVENTION: ACCESS TO FINANCE
                            </button>
                        </h2>
                    <div id="collapsethree" class="accordion-collapse collapse"
                        aria-labelledby="headingthree"                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                       The priority will be to handhold SIDS to access innovative finance mechanisms, funding and investment opportunities that support long-term commitments for infrastructure resilience. The focus will be to empower SIDS to access, mobilize and use new and existing resources from international funds. This will not only enhance the island states’ capacity to access technical expertise and funding for resilient infrastructure but also ensure complementarity with other initiatives in the region.
                            </div>
                        </div>
                    </div>


                </div>
        </div>
            </section>
 
                @endsection
