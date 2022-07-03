@extends('layouts.frontendV2.app', ['mainPage' => $link->menuLink->main_page_id])
@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .lightSliderHome {
            width:100%;
        }
        .lightSliderHome ul {
            list-style: none outside none;
            padding-left: 0;
            margin-bottom:0;
        }
        .lightSliderHome li {
            display: block;
            float: left;
            cursor:pointer;
        }
        .lightSliderHome img {
            display: block;
            height: 500px;
            width: 100%;
            border-radius:10px;
        }
        .lightSlider > li {
            position: relative;
        }
        .caption {
            background-color: #ffffff52;
            @if(app()->getLocale() == 'en')
                border-left: 6px solid var(--optional-color);
            @else
                border-right: 6px solid var(--optional-color);
            @endif
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 10px;
            margin: 20px;
            color: #FFF;
            width: 85%;
            font-weight: bold;
        }
        .caption a {
            margin:0;
            color: white;
        }
        .lSPager li a img {
            height: 100px !important;
        }
        .lSPager .lSpg {
            text-align: center;
        }
        .lSSlideOuter .lSPager.lSpg > li:hover a, .lSSlideOuter .lSPager.lSpg > li.active a {
            background-color: var(--main-color);
        }
        table, th, td {
            border: 2px solid;
        }
        .tinymce-content p {
            padding: 0;
            margin: 2px 0;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js" integrity="sha512-sww7U197vVXpRSffZdqfpqDU2SNoFvINLX4mXt1D6ZecxkhwcHmLj3QcL2cJ/aCxrTkUcaAa6EGmPK3Nfitygw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#lightSlider').lightSlider({
            gallery: false,
            item: 1,
            loop:true,
            slideMargin: 2,
            thumbItem: 6,
            auto:true,
            @if(app()->getLocale() !== 'en')
            rtl:true
            @endif
        });
    </script>
@endsection
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->title }}</h2>
                <ul>
                    <li>
                        @php
                            $url = $link->menuLink->mainPage->id == 1 ? url('/') : url('/' . $link->menuLink->mainPage->slug)
                        @endphp
                        <a href="{{$url}}">
                            {{ $link->menuLink->mainPage->name }}
                        </a>
                    </li>
                    @if($link->parent)
                        @if($link->parent->parent)
                            <li class="active">
                                <a>
                                    {{$link->parent->parent->name}}
                                </a>
                            </li>
                        @endif

                        <li class="active">
                            <a>
                                {{$link->parent->name}}
                            </a>
                        </li>

                    @endif
                    <li class="active">{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content mr-15">
                        <div class="blog-top-content">
                            <div class="blog-content">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.full_name_english') }}</label>
                                        <input type="text" name="full_name_english" id="full_name_english" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.student_name') }}</label>
                                        <input type="text" name="student_name" id="student_name" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.date_of_birth') }}</label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required `>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.nationality') }}</label>
                                        <input type="text" name="nationality" id="nationality" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.national_id') }}</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.passport_number') }}</label>
                                        <input type="text" name="passport_number" id="passport_number" class="form-control" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.occupation') }}</label>
                                        <input type="text" name="occupation" id="occupation" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.residence') }}</label>
                                        <input type="text" name="residence" id="residence" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.cell_phone') }}</label>
                                        <input type="text" name="cell_phone" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.telephone') }}</label>
                                        <input type="text" name="telephone" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.email') }}</label>
                                        <input type="text" name="email" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.college_and_university') }}</label>
                                        <input type="text" name="college_and_university" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.graduation_estimate') }}</label>
                                        <input type="text" name="graduation_estimate" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.estimate_of_the_major') }}</label>
                                        <input type="text" name="estimate_of_the_major" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.date_of_obtaining') }}</label>
                                        <input type="date" name="date_of_obtaining" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.other_qualifications') }}</label>
                                        <textarea name="other_qualifications" id="name" class="form-control" required data-error="Please enter your name"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{ __('frontend.attachment') }}</label>
                                        <input type="file" name="attachment" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>



                                <br>
                                <div class="lightSliderHome" >
                                    <ul id="lightSlider">
                                        @foreach($page->images as $image)
                                            <li data-thumb="{{ $image->image }}">
                                                <img src="{{ $image->image }}"/>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget-sidebar ml-15">
                        <div class="sidebar-widget search">
                            {{ Form::open(['route' => 'search', 'method' => 'get', 'class' => 'search-form']) }}
                            <input class="form-control" name="search" placeholder="{{ __('frontend.search') }}" type="text">
                            <button class="search-button" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                            </form>
                        </div>


                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">{{ __('frontend.related_pages') }}</h3>

                            <ul>
                                @foreach($relatedPages as $relatedPage)
                                    <li>
                                        <a href="{{ url($relatedPage->route) }}">
                                            {{ $relatedPage->name }}
                                            <img src="{{ asset('frontendV2/assets/images/logo.png') }}" style="width: 40px;" alt="Image">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
