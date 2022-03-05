<!doctype html>
<html lang="{{ app()->getLocale() }}" dir=" {{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.frontend.includes.styles')
        @yield('styles')
        <title>{{ $title ?? 'AFCM' }}</title>
    </head>

    <body>
        <div id="root">
            @include('layouts.frontend.includes.header')
        </div>

        <main style="background-color: #FAFAFA;">
            @yield('content')
        </main>

        @include('layouts.frontend.includes.footer')
        @include('layouts.frontend.includes.scripts')
        @yield('scripts')
    </body>
</html>
