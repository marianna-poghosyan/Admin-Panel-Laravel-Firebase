<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - @yield('title') </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
</head>
<body>
<!-- Wrapper-->
<div id="wrapper">
    @if (Auth::user())

        <!-- Navigation -->
        @include('layouts.navigation')

    @endif
    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg" style="@if (Auth::guest()) margin:0 @endif">

        <!-- Page wrapper -->
    @include('layouts.topnavbar')

    <!-- Main view  -->
    @yield('content')

    <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show
</body>
</html>
