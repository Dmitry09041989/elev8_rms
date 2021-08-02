    <div class="d-flex flex-column flex-shrink-0 p-3 logo-text-color bg-dark sidebar" style="width: 30vh; height:100vh"> {{--sidebar--}}
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 mx-md-auto text-decoration-none">


            <div class="d-flex flex-column container align-items-center mx-auto" >
            <img style="max-height:20vh ; max-width: 20vh" src="/images/elev8-logo-nobg.png">
                <span class="fs-4 logo-text-color ">RMS</span>
            </div>

        </a>
        <hr>
        {{--            @auth--}}
        <ul class="nav nav-pills flex-column mb-auto">

            <li> {{--Dashboard--}}
                <a href="{{route('dashboard.index')}}" class="nav-link {{ Request::is('dashboard*')||Request::is('/') ? 'active' : '' }} ">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li class="mb-1"> {{--Website--}}
                <button class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#web-collapse" aria-expanded="true">
                    <i class="bi bi-grid"></i>
                    Website
                </button>
                <div class="collapse" id="web-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="nav-link ms-4">Overview</a></li>
                        <li><a href="#" class="nav-link ms-4">Updates</a></li>
                        <li><a href="#" class="nav-link ms-4">Reports</a></li>
                    </ul>
                </div>
            </li>
            <li> {{--Customers--}}
                <a href="{{route('customers.index')}}" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
                    <i class="bi bi-person-circle"></i>
                    Customers
                </a>
            </li>
            <li> {{--Appointments--}}
                <a href="{{route('appointments.index')}}" class="nav-link {{ Request::is('appointments*') ? 'active' : '' }}">
                    <i class="bi bi-calendar-week-fill"></i>
                    Appointments
                </a>
            </li>

        </ul>
        {{--            @endauth--}}
        <hr>

        @if(Route::has('login'))
            @auth
            <ul class="nav nav-pills flex-column ">
                <li class="mb-1">
                    <button class="nav-link align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#settings-collapse" aria-expanded="true">
                        <i class="bi bi-gear"></i>
                        Settings
                    </button>
                    <div class="collapse" id="settings-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a class="nav-link ms-4" href="{{route('user.password')}}">Update Password</a></li>
                            <li><a class="nav-link ms-4" href="{{route('user.profile')}}">Update Personal Details</a></li>
                            <li><a class="nav-link ms-4" href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Sign out</a></li>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </li>
            </ul>
        @else
            <strong>
                <a href="{{ route('login') }}" class="nav-link">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Log in
                </a>
            </strong>
            @endauth
        @endif
    </div>  {{--sidebar--}}

