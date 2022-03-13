@if(app()->getLocale() === 'en')
<!-- Bootstrap Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/bootstrap.min.css') }}"><!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/responsive.css') }}">
@else
    <!-- Bootstrap RTL Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontendV2/assetsRTL/css/bootstrap.rtl.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontendV2/assetsRTL/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontendV2/assetsRTL/css/responsive.css') }}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('frontendV2/assetsRTL/css/rtl.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Almarai" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6, span, li,button,ul,p,a {
            font-family: 'Almarai', sans-serif !important;
        }
    </style>

@endif
<!-- Owl Theme Default Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/owl.theme.default.min.css') }}">
<!-- Owl Carousel Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/owl.carousel.min.css') }}">
<!-- Remixicon CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/remixicon.css') }}">
<!-- Flaticon CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/flaticon.css') }}">
<!-- Meanmenu Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/meanmenu.min.css') }}">
<!-- Animate Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/animate.min.css') }}">
<!-- Odometer Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/odometer.min.css') }}">
<!-- Magnific Popup Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/magnific-popup.min.css') }}">
<!-- Date Picker Min CSS -->
<link rel="stylesheet" href="{{ asset('frontendV2/assets/css/date-picker.min.css') }}">
<style>
    .input {
        height: 50px;
        width: 100%;
        border: none;
        background-color: #FFF;
        color: #131D3C;
        border-radius: 40px !important;
        padding: 5px 15px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        border-radius: 0;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }
</style>
