@extends('layouts.frontend.app')


@section('content')

    <!-- E-learning and slider -->
    <div class="learning_slider">
        <div class="container">
            <div class="row">
                <!-- Start slider -->
                <div class="col-mg-12 col-lg-8">
                    <div
                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach($sliderGroup->sliders as $slider)
                            <div class="swiper-slide">
                                <img src="{{ $slider->image }}"  class="image"/>
                                <p>{{ $slider->description }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($sliderGroup->sliders as $slider)
                                <div class="swiper-slide">
                                    <img src="{{ $slider->image }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- End slider -->
                <!-- Start E-learning -->
                <div class="col-md-12 col-lg-4">
                    <div class="learning">
                        <div class="overlay">
                            <h2>{{ getSection('e-learning')->title }}</h2>
                            <p class="text-center">{{ getSection('e-learning')->description }}</p>
                            <div class="text-end">
                                <a type="button" href="https://afcm.brightspace.com/d2l/login" target="_blank" class="btn btn-primary custom_button hvr-wobble-vertical">
                                    <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                    {{ getSection('e-learning')->button }}
                                </a>
                            </div>
                        </div>
                        <img src="{{ getSection('e-learning')->image }}" style="height: 600px" class="d-block w-100" alt="">
                    </div>
                </div>
                <!-- End E-learning  -->
            </div>
        </div>
    </div>

    <!-- Latest and Upgrade-->
    <div class="latest_upgrade">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hvr-forward">
                    <div class="get_latest">
                        <h2>{{ getSection('resources_students')->title }}</h2>
                        <p>{{ getSection('resources_students')->description }}</p>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                {{ getSection('resources_students')->button }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 hvr-backward">
                    <div class="get_latest">
                        <h2>{{ getSection('resources_staff')->title }}</h2>
                        <p>{{ getSection('resources_staff')->description }}</p>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                {{ getSection('resources_staff')->button }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Upcoming Events -->
    <div class="upcoming_events">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 hvr-backward">
                    <div class="card card_info">
                        <img src="{{ getSection('medical_scientific_sections')->image }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h1 class="card-title">{{ getSection('medical_scientific_sections')->title }}</h1>
                            <p class="card-text">{{ getSection('medical_scientific_sections')->description }}</p>
                            <button type="button" class="btn btn-primary custom_button hvr-wobble-vertical">
                                <img src="{{ asset('/icons/check.png') }}" class="check" alt="">
                                {{ getSection('medical_scientific_sections')->button }}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="events">
                        <h2>{{ getSection('home_upcoming_events')->title }}</h2>
                        <p>{{ getSection('home_upcoming_events')->description }}</p>
                        @foreach($events as $event)
                            <div class="card mb-3 hvr-forward">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="{{ $event->image }}" class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Monday - 20 / 2 / 2022</h5>
                                        <p class="card-text">{{ $event->title }}</p>
                                        <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Statistics -->
    <div class="statistics">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ getSection('statistics')->title }}</h2>
                        <p>{{ getSection('statistics')->description }}</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($statistics as $statistic)
                        <div class="col-md-6 col-lg-3">
                        <div class="box">
                            <i class="{{ $statistic->icon }}" aria-hidden="true"></i>
                            <h1>{{ $statistic->count }}</h1>
                            <span>{{ $statistic->name }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    <!-- Why -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 hvr-forward">
                <div class="glance">
                    <div class="logo">
                        <a class="logo__img" href="http://localhost/AFCM/en">
                            <img src="AFMC-project/assets/images/logo.png" alt="Logo">
                        </a>
                        <a class="logo__dis" href="http://localhost/AFCM/en">
                            AFCM in Glance
                        </a>
                    </div>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>

                </div>
            </div>


            <div class="col-md-12 col-lg-6 hvr-forward">
                <div class="why_join">
                    <div class="logo">

                        <a class="logo__dis" href="http://localhost/AFCM/en">
                            Why join AFCM ?
                        </a>
                    </div>

                    <p>
                        Begin a student at the AFCM results in many advantages
                    </p>

                    <p>
                                <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>
                        <span>
                                    <img src="icons/check.png" class="check" alt="">

                                    Study for six years to get the bachelore degree
                                </span>


                    </p>

                    <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>

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
