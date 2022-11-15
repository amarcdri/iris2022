
     <header class="main-header clearfix">
        <div class="main-header__top">
            <div class="main-header__top-left">
                {{-- <p class="main-header__top-text">Welcome to IRIS</p> --}}
                <div class="main-header__top-social">
                    <a href="https://www.facebook.com/CDRI.world/" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/cdri_world" target="_blank"><i class="fab fa-twitter"></i></a>
                   
                    <a href="https://www.linkedin.com/company/coalition-for-disaster-resilient-infrastructure/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UCh44NgGlVNdx0rtwel9OFvA" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="main-header__top-right">
                <ul class="list-unstyled main-header__top-address">
                    <li>
                       
                       
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="text">
                            <p><a href="mailto:iris@cdri.world">iris@cdri.world</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper clearfix">
                <div class="main-menu-wrapper__left">
                    <div class="main-menu-wrapper__logo">
                        <a href="{{route('index')}}"><img src="front/assets/img/logo.png" alt=""></a>
                    </div>
                    <div class="main-menu-wrapper__call">
                        <div class="main-menu-wrapper__call-icon">
                            <span class="icon-call"></span>
                        </div>
                        <div class="main-menu-wrapper__call-number">
                            <p>Call Anytime</p>
                            <h5><a href="tel:13073330079">+ 1 (307) 333-0079</a></h5>
                        </div>
                    </div>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li >
                            <a href="{{route('index')}}">Home</a>
                       
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="dropdown">About</a>
                            <ul>
                              
                               
                              
                                <li class="dropdown">
                                    <a href="#">Vision</a>
                                    <ul>
                                        <li><a href="testimonials.html">English</a></li>
                                        <li><a href="testimonials.html">English</a></li>
                                        <li><a href="testimonials.html">English</a></li>
                                    </ul>

                                </ul>    
                        </li>
                        <li>  <a href="#" class="dropdown">Governance</a> 
                            <ul>
                                <li><a href="#">IRIS PMU</a></li>
                                <li><a href="#">Steering Committee</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Events</a>
                       
                        </li>
                        <li>
                            <a href="{{route('faqs')}}">Faqs</a>
                         
                        </li>
                       
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
             
                </div>
                <div class="main-menu-wrapper__right">
                    
                         <a href="{{(route('index'))}}"  target="_blank" class="donate-btn main-header-one__btn"> <i class="fa fa-arrow-right"></i> Call for Proposal</a>
                </div>
            </div>
        </nav>
    </header>


