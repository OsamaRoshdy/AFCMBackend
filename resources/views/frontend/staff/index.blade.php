@extends('layouts.frontend.app', ['mainPage' => 3])


@section('content')

    <!-- Title Page -->
    <div class="page_title">
        <div class="row">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('academic_staff_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('academic_staff_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <!-- E-learning and slider -->
    <div class="departments_academic">
        <div class="container">
            <div class="row">
                <div class="col-mg-12 col-lg-8 text-center">
                    <div class="row">
                        <h2>{{ getSection('academic_departments')->title }}</h2>
                        <p class="p_heading">{{ getSection('academic_departments')->description }}</p>
                        @foreach($departments as $department)
                            <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card_latest mb-3 hvr-forward">
                                <div class="card">
                                    <img src="{{ $department->image }}" class="card-img-top" alt="{{ $department->name }}">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $department->name }}</h3>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="learning">
                        <div class="overlay">
                            <h2>{{ getSection('staff_join')->title }}</h2>
                            <p class="text-center">{{ getSection('staff_join')->description }}</p>
                            <div class="text-end">
                                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                    <img src="{{ asset('icons/check.png') }}" class="check" alt="">
                                    {{ getSection('staff_join')->button }}
                                </button>
                            </div>
                        </div>
                        <img src="{{ getSection('staff_join')->image }}" style="height: 600px" class="d-block w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- E-learning and slider -->
    <div class="supreme">
        <div class="container">
            <div class="row">
                <div class="col-mg-12">
                    <div class="row">
                        <h2>Latest Events & News</h2>
                        <p>Learn all about our comming events, conferences and more</p>

                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    General Commander of armed forces
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Latest Events-->
    <section class="section section--padding section--bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section__title">
                        <h2 class="section-title">{{ getSection('home_events_and_news')->title }}</h2>
                        <span>{{ getSection('home_events_and_news')->description }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                        <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                        {{ getSection('home_events_and_news')->button }}
                    </button>
                </div>
            </div>
            <div class="section__header">
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6 hvr-backward">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1646007086644-e19efeb2b02c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" style="height: 600px" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block w-100">
                                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        Feb 17 2022
                                    </button>
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block w-100">
                                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        Feb 17 2022
                                    </button>
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block w-100">
                                    <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                        Feb 17 2022
                                    </button>
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                        <div class="col-md-6 hvr-forward">
                            <div class="img_sec">
                                <div class="overlay">
                                    <button type="button" class="btn btn-primary custom_button">
                                        Feb 17 2022
                                    </button>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <img src="AFMC-project/assets/media/image.png" class="img-fluid" alt="" srcset="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
@section('footer')
    <div class="footer__top">
        <div class="container">
            <h4 class="section-title section-title--white">{{ getSection('subscribe')->title }}</h4>
            <p>{{ getSection('subscribe')->description }}</p>
            <form class="newsletter_form " method="POST" action="">
                <input class="input" type="email" name="email" placeholder="Your Email ..." aria-label="email" autocomplete="off">
                <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                    <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                    {{ getSection('subscribe')->button }}
                </button>

            </form>
        </div>
    </div>
@endsection
