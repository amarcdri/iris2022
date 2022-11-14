@extends('frontend.layout.app')
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">

        <div class="container">
            <div class="page-header__inner">
                <h4>EXPRESSION OF INTEREST</h4>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li> EXPRESSION OF INTEREST</li>
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
                            <h3 class="donation-details__title">Raise Fund for Clean & Healthy Food</h3>
                            <p class="donation-details__text-1">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim  exerci phaedrum. There are many variations of passages of Lorem Ipsum available, but  the majority have alteration in some injected or words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </p>
                            <h3 class="donation-details__title">Summary</h3>
                            <p class="donation-details__text-1">Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type simen book.</p>
            



                        </div>


                    </div>
                </div>

              
            </div>
           
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle">Call for Purposal</h4>
                        <p class="contact-info__customtext">Lorem ipsum is simply free text dolor sit amet, consectetur
                            adipiscing ullam bla.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle">Faqs</h4>
                        <p class="contact-info__customtext">Lorem ipsum is simply free text dolor sit amet, consectetur
                            adipiscing ullam bla.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle">Template</h4>
                        <p class="contact-info__customtext">88 Broklyn Golden Road Street. New York, United States of
                            America</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <!--Contact Info Single-->
                    <div class="contact-info__custom">
                        <h4 class="contact-info__customtitle">Contact</h4>
                        <p class="contact-info__customtext">
                            <a href="mailto:needhelp@company.com" class="contact-info__email">needhelp@company.com</a>
                            <a href="tel:13077760608" class="contact-info__phone">+1 (307) 776-0608</a>
                        </p>
                    </div>
                </div>
            
            </div>

        </div>
        
    </section>
                @endsection
