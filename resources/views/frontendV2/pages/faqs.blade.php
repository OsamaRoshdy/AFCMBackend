@extends('layouts.frontendV2.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->title }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    <li class="active">{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-content mr-15">
                        <div class="blog-top-content">
                            <div class="blog-content">
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
                            </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
