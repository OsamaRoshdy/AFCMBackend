@extends('layouts.frontendV2.app', ['mainPage' => 2])
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.5}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span>Welcome to AFCM Students</span>
                                <h1>E-Learning Scholarship</h1>

                                <div class="banner-btn">
                                    <a href="events.html" class="default-btn">
                                        Submit
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="video-banner">
                                <div class="campus-experience-slider owl-carousel owl-theme">
                                    @foreach($sliderGroup->sliders as $slider)
                                        <div class="single-campus-experience" style="max-height: 500px;min-height:500px;background: url('http://localhost/AFCMBackend/public/storage/images/blocks/scientific.jpg') no-repeat;background-size: 100%;">
                                            <h3>{{ $slider->description }}</h3>
                                            <p>{{ $slider->description }}</p>

                                            <a href="campus-experience.html" class="read-more">
                                                Find out more
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    @endforeach


                                </div>

                            </div>

                            {{--                            <div class="banner-img">--}}
                            {{--                                <img src="{{ asset('http://localhost/AFCMBackend/public/storage/images/blocks/scientific.jpg') }}" alt="Image">--}}

                            {{--                                <img src="{{ asset('frontendV2/assets/images/banner/banner-img-1.jpg') }}" alt="Image">--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- End Banner Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{getSection('home_events_and_news')->title}}</h2>
            </div>

            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-6"  >
                        <div class="single-blog">
                            <a href="{{ url('news/' . $new->id) }}" class="blog-img">
                                <img src="{{ $new->image }}" alt="Image">
                            </a>
                            <div class="blog-content">
                                <ul>
                                    <li>
                                        <i class="ri-calendar-line"></i>
                                        <span>{{ $new->date }}</span>
                                    </li>
                                </ul>

                                <h3>
                                    <a href="{{ url('news/' . $new->id) }}">
                                        {{ $new->title }}
                                    </a>
                                </h3>

                                <p>
                                    {{ $new->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="section-title">
                <a href="{{ url('/news') }}" class="default-btn text-center">
                    {{ getSection('home_events_and_news')->button }}
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

        </div>
    </section>
    <!-- End Blog Area -->


    <section class="faq-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('frontend.faqs') }}</h2>
            </div>

            <div class="faq-bg">
                <div class="faq-accordion">
                    <ul class="accordion">
                        @foreach($faqs as $faq)

                        <li class="accordion-item">
                            <a class="accordion-title {{ $loop->first ? 'active' : '' }}" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                {{ $faq->question }}
                            </a>

                            <div class="accordion-content  {{ $loop->first ? 'show' : '' }}">
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
