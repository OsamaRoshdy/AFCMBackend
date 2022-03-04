<div class="header__bottom">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="header__bottom__up">
                <div class="logo">
                    <a class="logo__img" href="{{ url('/') }}">
                        <img src="{{ asset('/AFMC-project/assets/images/logo.png') }}" alt="Logo">
                    </a>
                    <a class="logo__dis" href="http://localhost/AFCM/en">
                        Armed Forces <span> College Of Medicine </span>
                    </a>
                </div>
                <form class="input-btn d-flex" method="GET" action="http://localhost/AFCM/en/search">
                    <input class="input form-control" type="search" name="search"
                           placeholder="What you search for" aria-label="Search">
                    <button class="btn btn-link" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <button class="navbar-toggle" id="navbarOpen" type="button">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>

        <div class="collapse-navbar">
            <div class="container">
                <ul class="navbar-nav">
                    @foreach(bottom_header($mainPage ?? 1) as $link)
                        @if($link->hasChildren())
                            <li class="nav-item dropdown">
                                <a class="link link--main-clr link--nav nav-link dropdown-toggle" href="#"
                                   id="navbarDropdown21" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    {{ $link->name }} <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown21">
                                    @foreach($link->children as $subLink)
                                        @if($subLink->hasChildren())
                                            <li class="sub-dropdown">
                                            <span class="dropdown-item double-chevron--before"> {{ $subLink->name }}
                                            </span>
                                                <ul class="sub-dropdown__menu">
                                                    @foreach($subLink->children as $child)
                                                    <li>
                                                        <a class="dropdown-item "
                                                           href="{{ $child->route }}">{{ $child->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                           <li>
                                                <a class="dropdown-item" href="{{ $subLink->route }}">{{ $subLink->name }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="link link--main-clr link--nav nav-link" href="{{ $link->route }}">{{ $link->name }}</a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>

        <!--navbar mobile-->
        <div class="collapse-navbar--mobile" id="collapseNavbar" style='position:absolute'>
            <button class="navbar-toggle" id="navbarClose" type="button">
                <i class="bi bi-x-lg"></i>
            </button>
            <div class="nav-accordion" id="navAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading0">
                        <a class="link double-chevron--before" href="http://localhost/AFCM/en/HomePage">
                            osama
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            ABOUT US
                        </button>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/A_Word_from_the_Dean">
                            A Word from the Dean
                        </a>
                        <a class="link double-chevron--before" href="http://localhost/AFCM/en/Why_AFCM_">
                            why AFCM?
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Vision_Mission">
                            vision &amp; mission
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/College_History">
                            History
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/facts_figures">
                            facts &amp; figures
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Future_Projects">
                            Future Projects
                        </a>
                        <a class="link double-chevron--before" href="http://localhost/AFCM/en/FAQs">
                            FAQs
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            ADMISSION
                        </button>

                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Undergraduates

                        </button>

                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Admission_Requirements">
                            Admission Requirements
                        </a>
                        <a class="link double-chevron--before" href="http://localhost/AFCM/en/How_To_Apply">
                            how To Apply
                        </a>

                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Postgraduates
                        </button>

                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Postgraduates_Admission_Requirements">
                            Admission Requirements
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Postgraduates_How_to_apply">
                            How To apply
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            ACADEMIC PROGRAMS
                        </button>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Undergraduate_Programs">
                            Undergraduate Programs
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Internship_Programs">
                            Internship Programs
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Postgraduate_Programs">
                            Post Graduate Programs
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Capacity_Building_Programs">
                            Capacity Building Programs
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading4">
                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            RESEARCHES
                        </button>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Students_Researches">
                            Students
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/Staff_Researches">
                            Staff
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading5">
                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Partnership
                        </button>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/International_Cooperation_Protocols">
                            International Cooperation Protocols
                        </a>
                        <a class="link double-chevron--before"
                           href="http://localhost/AFCM/en/National_Cooperation_Protocols">
                            National Cooperation Protocols
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading6">
                        <a class="link double-chevron--before" href="http://localhost/AFCM/en/Top_Notch">
                            Top-Notch
                        </a>
                    </h2>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading7">
                        <button class="link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            MEDIA CENTER
                        </button>
                        <a class="link double-chevron--before" href="/AFCM/en/news-and-events"
                           target="_self">
                            News &amp; Events</a>

                        <a class="link double-chevron--before" href="/AFCM/en/college_magazine"
                           target="_self">
                            college Magazine</a>

                        <a class="link double-chevron--before" href="/AFCM/en/press-releases"
                           target="_self">
                            Press Releases</a>

                        <a class="link double-chevron--before" href="/AFCM/en/photos-and-videos"
                           target="_self">
                            Photo &amp; Video Gallery</a>

                    </h2>
                </div>
            </div>
        </div>
    </nav>
    <!--End of navbar mobile-->

    <!--End of navbar desktop-->
</div>
