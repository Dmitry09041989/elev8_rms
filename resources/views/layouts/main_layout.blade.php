<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Elev8 - @yield('title')</title>

    <!-- Styles -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Custom Styling -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- JS -->
    {{--    <script src="{{asset('js/app.js')}}" defer></script>--}}
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Livewire -->
        @livewireStyles
    </head>
    <body>


        <main class="d-flex flex-row">
    {{--        @section('components.sidebar')--}}
    {{--        @show--}}

            <div class="d-flex flex-column flex-shrink-0 p-3 logo-text-color bg-dark" style="width: 280px; height:100vh">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 mx-md-auto text-white text-decoration-none">

                    <span class="fs-4 logo-text-color">Elev8 Fitness</span>

                </a>
                <hr>
                {{--            @auth--}}
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            {{--                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>--}}
                            <i class="bi bi-house-door-fill "></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-table"></i>
                            Orders
                        </a>
                    </li>
                    {{--                <li>--}}
                    {{--                    <a href="#" class="nav-link text-white">--}}
                    {{--                        <i class="bi bi-grid"></i>--}}
                    {{--                        Products--}}
                    {{--                    </a>--}}
                    {{--                </li>--}}
                    <li>
                        <a href="{{route('customers.index')}}" class="nav-link text-white">
                            <i class="bi bi-person-circle"></i>
                            Customers
                        </a>
                    </li>
                </ul>
                {{--            @endauth--}}
                <hr>
                <div>
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <div class="dropdown px-3">
                                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{--                                <img  alt="" width="32" height="32" class="rounded-circle me-2">--}}
                                        <strong>Settings</strong>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Sign out</a></li>
                                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            @else
                                <strong>
                                    <a href="{{ route('login') }}" class="nav-link text-white">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                        Log in
                                    </a>
                                </strong>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>


            <div class="container py-5">

            @yield('content')

            </div>

        </main>
    @livewireScripts
    </body>
</html>
