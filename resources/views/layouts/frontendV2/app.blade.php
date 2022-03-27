<!doctype html>
<html lang="{{ app()->getLocale() === 'en' ? 'en' : 'ar' }}" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.frontendV2.includes.styles')

    @yield('styles')
    <link rel="icon" href="{{ asset('frontend/images/logo.png') }}" type="image/x-icon">
    <style >
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid var(--optional-color);
            /* Dark Green */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spinloader 2s linear infinite;
        }

        .loader img {
            height: 80px;
            width: 80px;
            animation: spinlogo 2s linear infinite;
        }

        @keyframes spinloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes spinlogo {
            0% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
    <title>AFCM</title>
</head>

<body>
<!-- Start Preloader Area -->

<div class="preloader">
    <div class="lds-ripple">
            <div class="loader">
                <img style="margin: 5px" src="{{ asset('frontendV2/assets/images/logo.png') }}" width="50%" />
            </div>
        </div>
</div>

@include('layouts.frontendV2.includes.header')

@include('layouts.frontendV2.includes.search')

@include('sweetalert::alert')

    @yield('content')



@include('layouts.frontendV2.includes.footer')

@include('layouts.frontendV2.includes.scripts')
@yield('scripts')

</body>
</html>
