<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{@asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{@asset('assets/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{@asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{@asset('/assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{@asset('/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{@asset('assets/css/fontawesome.min.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">

    @yield('styles')
</head>

<body>
    <!-- Start Top Nav -->
    @include('Zayshop.partials.topNav')
    <!-- Close Top Nav -->
    <!-- Header -->
    @include('Zayshop.partials.header')
    <!-- Close Header -->

    <!-- Modal -->
    @include('Zayshop.partials.modalSearch')

    <!-- content -->
    @yield('content')
    <!-- end content -->
    <!-- Start Footer -->
    @include('Zayshop.partials.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    @yield('scripts')
    <!-- End Script 1

</html>