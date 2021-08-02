<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Elev8 - @yield('title')</title>

    <!-- Styles -->
        <!--Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bootstrap CSS + Custom Styling @sass\app.scss-->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- DataTables CSS -->
        @yield('styles')
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Livewire -->
{{--        @livewireStyles--}}

    </head>
    <body>

        <main class="d-flex flex-row">



            @auth()
            @include('layouts.partials.sidebar')
            @endauth

            <div class="container-fluid px-4 mt-5" >


                @yield('content')


            </div>

        </main>


{{--    @livewireScripts--}}
        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- JS -->
        <script src="{{asset('js/app.js')}}" defer></script>

        <!-- DataTables JS -->

        @yield('scripts')


    </body>

</html>

