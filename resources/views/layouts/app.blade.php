<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ env('APP_NAME', 'ExerWallet') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/favicon.ico') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/favicon.ico') }}"/>
    <link href="{{ url('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" type="text/css" /> 
    <script src="{{ url('assets/js/modernizr.min.js') }}"></script>
    @stack('styles')
</head>
<body class="fixed-left">
    <div id="wrapper">
        
        @include('layouts.topbar')
        
        @include('layouts.sidebar')

        @yield('content')

        <script> 
            var resizefunc = [];
        </script>

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>

        @stack('scripts')
        
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
        
    </body>
</html>
