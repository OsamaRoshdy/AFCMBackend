<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<style>
    body, h1, h2, h3, h4, h5, h6, span {
        font-family: 'Cairo', sans-serif !important;
    }
</style>

@if(app()->getLocale() == 'en')
<link href="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
@else

<link href="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/css/themes/layout/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
@endif

@yield('styles')

<!--end::Layout Themes-->
<link rel="icon" href="{{ asset('frontend/images/logo.png') }}" type="image/x-icon">

