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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /><style>
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
    .lightSliderHome {
        width:800px;
    }
    .lightSliderHome ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom:0;
    }
    .lightSliderHome li {
        display: block;
        float: left;
        cursor:pointer;
    }
    .lightSliderHome img {
        display: block;
        height: 500px;
        width: 100%;
        border-radius:10px;
    }
    .lightSlider > li {
        position: relative;
    }
    .caption {
        background-color: #ffffff52;
        @if(app()->getLocale() == 'en')
border-left: 6px solid var(--optional-color);
        @else
border-right: 6px solid var(--optional-color);
        @endif
position: absolute;
        bottom: 0;
        left: 0;
        padding: 10px;
        margin: 20px;
        color: #FFF;
        width: 85%;
        font-weight: bold;
    }
    .caption a {
        margin:0;
        color: white;
    }
    .lSPager li a img {
        height: 100px !important;
    }

    .lSSlideOuter .lSPager.lSpg > li:hover a, .lSSlideOuter .lSPager.lSpg > li.active a {
        background-color: var(--main-color) !important;

    }
    .about-img {
        position: relative;
        z-index: 1;
        padding: 45px;
    }

    .admission-img {
        position: relative;
        padding: 45px;
        z-index: 1;
    }

    .single-counter.bg-style {
        border-radius: 25px;
        height: 170px;
    }

    img, .events-timer, .events-date {
        border-radius: 20px;
    }

</style>
