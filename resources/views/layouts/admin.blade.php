<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ asset('admin/css/argon-dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div class="min-height-300 bg-primary position-absolute w-100">
        @include('layouts.inc.sidebar')

        <div class="main-content position-relative border-radius-lg">
            @include('layouts.inc.adminnav')
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
     
   

    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>    
    <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>

    @yield('scripts')

</body>
</html>
