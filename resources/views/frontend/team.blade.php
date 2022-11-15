
  @extends('frontend.layout.app')
  @section('content')



        <section class="page-header">
           
            <div class="container">
                <div class="page-header__inner">
                    <h4>Team</h4>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Volunteers Page Start-->
        <section class="volunteers-one">
            <div class="container">
                <div class="row">
                    @foreach($pmuteams as $pkey => $pmuteam)
                        
                    
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <!--Volunteers One Single-->
                        <div class="volunteers-one__single">
                            <div class="volunteers-one__img">
                                <img src="{{asset($pmuteam->image)}}" alt="">
                                <div class="volunteers-one__social">
                                    @if($pmuteam->twitter != 'NULL')
                                    <a href="{{$pmuteam->twitter}}"><i class="fab fa-twitter"></i></a>
                                    @endif
                                    @if($pmuteam->facebook != 'NULL')
                                    <a href="{{$pmuteam->facebook}}"><i class="fab fa-facebook"></i></a>
                                    @endif
                                    @if($pmuteam->linkedin != 'NULL')
                                    <a href="{{$pmuteam->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                    @endif
                                    {{-- <a href="{{$pmuteam->twitter}}"><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="volunteers-one__content">
                                <h4 class="volunteers-one__name">{{$pmu->speakername}}</h4>
                                <p class="volunteers-one__title">{{$pmu->designation}}</p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--Volunteers Page End-->

   @endsection