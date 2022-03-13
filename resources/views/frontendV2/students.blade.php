@extends('layouts.frontendV2.app', ['mainPage' => 2])
@section('styles')
    <style>
        .input {
            height: 50px;
            width: 100%;
            border: none;
            background-color: #FFF;
            color: #131D3C;
            border-radius: 40px !important;
            padding: 5px 15px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
    </style>
@endsection
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
                <h2>Latest Events & News</h2>
            </div>

            <div class="row justify-content-md-center">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-6"  >
                        <div class="single-blog">
                            <a href="blog-details.html" class="blog-img">
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
                <div class="col-lg-4 col-md-6"></div>
                <div class="col-lg-4 col-md-6 row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <a href="application.html" class="default-btn text-center">
                            Show more
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="col-lg-4 col-md-6"></div>
            </div>


        </div>
    </section>
    <!-- End Blog Area -->
    <section class="faq-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>FAQ</h2>
            </div>

            <div class="faq-bg">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                01. What's a study term?
                            </a>

                            <div class="accordion-content show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                02. Which subjects should I start with?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                03. Can I get credit for my previous studies?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                04. I'm not great with technology will I be able to learn online?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                05. What’s a payment statement?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                06. How do I withdraw from a subject?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="ri-add-line"></i>
                                07. How do I know if you’ve received my application?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam optio soluta fuga illum, beatae perspiciatis similique officia, id repellendus voluptatum impedit alias, praesentium omnis neque exercitationem quam minima expedita vitae incididunt ut labore et dolore magna.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
