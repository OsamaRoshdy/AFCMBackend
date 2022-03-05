<div class="header_top">
    <div class="row g-0">
        <div class="col-lg-5">
            <div class="links">
                <div class="container">
                    <ul class="header__top__sites">
                        <li>
                            <a class="dropdown-item {{ in_array(request()->segment(1), ['staff', 'students', 'contact-us']) ? '' : 'bg-main-active' }}" href="{{ url('/') }}">{{ getMainPage(1)->name }}</a>
                        </li>
                        @foreach(getMainPages() as $page)
                            <li>
                                <a class="dropdown-item {{ request()->segment(1) == $page->slug ? 'bg-main-active' : '' }}" href="{{ url('/' . $page->slug) }}">{{ $page->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="join_us">
                <div class="container">
                    <a href="{{ route('switchLang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}" class="header__top__join">
                        <span>Join our team</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
