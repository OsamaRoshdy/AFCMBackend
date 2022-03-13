<!doctype html>
<html lang="{{ app()->getLocale() === 'en' ? 'en' : 'ar' }}" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.frontendV2.includes.styles')
    @yield('styles')
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <title>AFCM</title>
</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="pl-flip-1 pl-flip-2"></div>
    </div>
</div>
<!-- End Preloader Area -->

@include('layouts.frontendV2.includes.header')

@include('layouts.frontendV2.includes.search')


    @yield('content')



@include('layouts.frontendV2.includes.footer')

@include('layouts.frontendV2.includes.scripts')
@yield('scripts')

</body>
</html>
