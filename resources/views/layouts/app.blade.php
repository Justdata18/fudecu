<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container logo">
            <div class="row justify-content-center">
                <img class="head-logo" src="{{asset('img/fudecugr.jpg')}}">
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="full row">
                    <div class="col-md-3">
                        <span>Copyright by JustData BV</span>
                        <span>&copy; 2018</span>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-5 tr">
                        <span>This website was build by the JustData BV Lelystad</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>


