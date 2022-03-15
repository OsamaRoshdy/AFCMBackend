<!doctype html>
<html lang="{{ app()->getLocale() }}" dir=" {{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.frontend.includes.styles')
        @yield('styles')
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
        <style>
            body, h1, h2, h3, h4, h5, h6, span, li,button,ul,p,a {
                font-family: 'Cairo', sans-serif !important;
            }
            .header .navbar-nav .nav-link {
                font-size: 17px;
            }
            .header_top .dropdown-item {
                transition: all 0.5s ease-in-out;
                font-size: 14px;
                font-weight: bold;
            }
        </style>

        <title>{{ $title ?? 'AFCM' }}</title>
    </head>

    <body>
    @include('sweetalert::alert')

    <div id="root">
            @include('layouts.frontend.includes.header')
        </div>

        <main style="background-color: #FAFAFA;">
            @yield('content')
        </main>

        <div class="footer__top">
            <div class="container">
                <h4 class="section-title section-title--white">{{ getSection('subscribe')->title }}</h4>
                <p>{{ getSection('subscribe')->description }}</p>
                {{ Form::open(['route' => 'subscribe', 'class' => 'newsletter_form']) }}
                    @if ($errors->has("email"))
                        <span class="form-text text-danger">{{$errors->first('email')}}</span>
                    @endif
                    {{ Form::email('email', old('email'), ['class'=>'input', 'placeholder' => 'Your Email ...']) }}
                    <button type="submit" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('frontend/icons/check.png') }}" class="check" alt="">
                        {{ getSection('subscribe')->button }}
                    </button>
                {{ Form::close() }}
            </div>
        </div>
        @include('layouts.frontend.includes.footer')
        @include('layouts.frontend.includes.scripts')
        @yield('scripts')
    </body>
</html>
