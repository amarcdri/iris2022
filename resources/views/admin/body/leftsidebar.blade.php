<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt=""
                    class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Admin</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('agendav') }}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Session</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('speaker') }}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Speaker</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('gallery') }}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Gallery</span>
                    </a>

                </li>


                <li><a href="javascript: void(0);" class="has-arrow" aria-expanded="true"><span>Call For Proposal</span></a>

                         <ul aria-expanded="true" class="sub-menu mm-collapse">
                        <li> <a href="{{ route('listeoi') }}" class="waves-effect"><span>EOI </span>
                            </a></li>

                        <li><a href="{{route('eoi.export')}}">EOI FULL REPORT</a>
                        </ul>
                </li>

                
                <li>
                    <a href="{{ route('list.reviewer') }}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Reviewer </span>
                    </a>
                </li>
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
