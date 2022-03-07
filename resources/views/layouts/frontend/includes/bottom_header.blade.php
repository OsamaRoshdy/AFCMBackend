<div class="header__bottom">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="header__bottom__up">
                <div class="logo">
                    <a class="logo__img" href="{{ url('/') }}">
                        <img src=" {{ asset('frontend/images/logo.png') }}" alt="Logo">
                    </a>
                    <a class="logo__dis" href="{{ url('/') }}">
                        <bold style="color: #d70000; font-size: 20px; font-weight: 900">A</bold>rmed <bold style="color: #d70000; font-size: 20px; font-weight: 900">F</bold>orces <span> <bold style="color: #d70000; font-size: 20px; font-weight: 900">C</bold>ollege Of <bold style="color: #d70000; font-size: 20px; font-weight: 900">M</bold>edicine </span>
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
                                                           href="{{ url('/' . $child->route) }}">{{ $child->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                           <li>
                                                <a class="dropdown-item" href="{{ url('/'.$subLink->route)  }}">{{ $subLink->name }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="link link--main-clr link--nav nav-link" href="{{ url('/'. $link->route)  }}">{{ $link->name }}</a>
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
                @foreach(bottom_header($mainPage ?? 1) as $key => $link)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$key}}">
                            @if($link->hasChildren())
                                <button class="link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                    {{$link->name}}
                                </button>

                                @foreach($link->children as $key2=>$child)
                                    @if($child->hasChildren())
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                                {{$child->name}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#navAccordionOne">
                                            <div class="accordion-body">
                                                <ul>
                                                    @foreach($child->children as $key2=>$data)
                                                        <li>
                                                            <a class="dropdown-item double-chevron--before " href="{{ url('/' . $data->route)}}" > {{$data->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @else
                                        <a class="link double-chevron--before " href="{{ url('/'.$child->route )}}">{{$child->name}}</a>
                                    @endif
                                @endforeach

                            @else
                                <a class="link double-chevron--before " href="{{ url('/'.$link->route )}}" target="_self">{{$link->name}}</a>
                            @endif
                        </h2>
                    </div>
                @endforeach
            </div>
        </div>
    </nav>
    <!--End of navbar mobile-->

    <!--End of navbar desktop-->
</div>
