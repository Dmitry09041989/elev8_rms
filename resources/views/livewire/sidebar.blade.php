<div>
    {{-- The whole world belongs to you. --}}

    <div class="d-flex flex-column flex-shrink-0 p-3 logo-text-color bg-dark" style="width: 280px; height:100vh"> {{--sidebar--}}
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 mx-md-auto text-decoration-none">

            <span class="fs-4 logo-text-color">Elev8 Fitness</span>

        </a>
        <hr>
        {{--            @auth--}}
        <ul class="nav nav-pills flex-column mb-auto">

            <li> {{--Dashboard--}}
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }} ">
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
                            <li><a class="nav-link ms-4" href="#">Overview</a></li>
                            <li><a class="nav-link ms-4" href="#">Updates</a></li>
                            <li><a class="nav-link ms-4" href="#">Reports</a></li>
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
</div>

