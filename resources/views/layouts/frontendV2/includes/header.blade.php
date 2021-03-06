<!-- Start Header Area -->
<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="header-left-content">
                        <li class="active" style="margin: 5px">

                            @php
                                $mainPage =$mainPage ?? 1
                            @endphp
                            <a style="font-weight: 700;font-size: 18px ;{{ in_array(request()->segment(1), ['staff', 'students', 'contact-us']) || $mainPage != 1 ? '' : 'color:#172f41' }}" href="{{ url('/') }}">
                                {{ getMainPage(1)->name }}
                            </a>
                        </li>
                        @foreach(getMainPages() as $page)
                            <li style="margin: 5px">
                                <a style="font-weight: 700 ;font-size: 18px ;{{ $mainPage == $page->id  ? 'color:#172f41' : '' }}" href="{{ url('/' . $page->slug) }}">{{ $page->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="header-right-content">
                        <div class="languages-switcher">
                            <i class="ri-global-line"></i>

                            <a style="color: white" href="{{ route('switchLang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}">
                                {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img width="40px" src="{{ asset('frontendV2/assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>

                    <div class="others-options-for-mobile-devices">
                        <ul>
                            <li>
                                <a href="application.html" class="default-btn">
                                    Application Form
                                </a>
                            </li>
                            <li>
                                <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#exampleModalsrc">
                                    <i class="ri-search-line"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img width="70px" src="{{ asset('frontendV2/assets/images/logo.png') }}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">

                            @foreach(bottom_header($mainPage ?? 1) as $link)
                                @if($link->hasChildren())
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            {{ $link->name }}
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach($link->children as $subLink)
                                                @if($subLink->hasChildren())
                                                    @if($subLink->status == 1)
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            {{ $subLink->name }}
                                                            <i class="ri-arrow-down-s-line"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            @foreach($subLink->children as $child)
                                                                @if($child->status == 1)
                                                                    <li class="nav-item">
                                                                        <a href="{{ $child->type == 1 ? url('/'. $child->route) : $child->route }}" @if($child->type == 2) target="_blank" @endif class="nav-link">{{ $child->name }}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endif
                                                @else
                                                    @if($subLink->status == 1)
                                                    <li class="nav-item">
                                                        <a href="{{ $subLink->type == 1 ? url('/'. $subLink->route) : $subLink->route }}" @if($subLink->type == 2) target="_blank" @endif class="nav-link">{{ $subLink->name }}</a>
                                                    </li>
                                                    @endif
                                                @endif
                                            @endforeach


                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ $link->type == 1 ? url('/'. $link->route) : $link->route }}" @if($link->type == 2) target="_blank" @endif class="nav-link">{{ $link->name }}</a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>

                        <div class="others-options">
                            <ul>
                                <li>
                                    <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#exampleModalsrc">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
