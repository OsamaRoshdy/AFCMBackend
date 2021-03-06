<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
            <img class="h-20px w-20px rounded-sm" src="{{ asset(app()->getLocale() == 'en' ? 'backend/media/svg/flags/226-united-states.svg' : 'backend/media/svg/flags/008-saudi-arabia.svg') }}" alt="flag" />
        </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
        <!--begin::Nav-->
        <ul class="navi navi-hover py-4">
            <!--begin::Item-->
            <li class="navi-item ">
                <a href="{{ route('switchLang', 'ar') }}" class="navi-link {{ app()->getLocale() == 'ar' ? ' active' : '' }}">
                        <span class="symbol symbol-20 mr-3">
                            <img src="{{ asset('backend/media/svg/flags/008-saudi-arabia.svg') }}" alt="" />
                        </span>
                    <span class="navi-text">العربية</span>
                </a>
            </li>
            <li class="navi-item">
                <a href="{{ route('switchLang', 'en') }}" class="navi-link {{ app()->getLocale() == 'en' ? ' active' : '' }}">
                        <span class="symbol symbol-20 mr-3">
                            <img src="{{ asset('backend/media/svg/flags/226-united-states.svg') }}" alt="" />
                        </span>
                    <span class="navi-text">English</span>
                </a>
            </li>
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
    </div>
    <!--end::Dropdown-->
</div>
