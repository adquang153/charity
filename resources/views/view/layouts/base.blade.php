<!doctype html>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/progresscircle.css')}}">
    @yield('css')
</head>
<body>
    <div id="app">

        @include('view.layouts.header')

        @yield('content')

        @include('view.layouts.footer')

    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    {{-- <script src="{{asset('js/jquery.slim.min.js')}}"></script> --}}
    <script src="{{asset('js/progresscircle.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('.circlechart').circlechart();
        });
    </script>
    @yield('scripts')
</body>
</html>
