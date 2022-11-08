<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Admin</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard')}}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('agendav')}}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Session</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('speaker')}}" class="waves-effect">
                        {{-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Speaker</span>
                    </a>
                </li>


            

              

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>