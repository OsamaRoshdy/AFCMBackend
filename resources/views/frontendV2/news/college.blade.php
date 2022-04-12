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
            height: 100% !important;
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
            item:1,
            vertical:true,
            thumbItem:8,
            thumbMargin:4,
            slideMargin:0
        });

    </script>
@endsection
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $new->title }}</h2>
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
                                {!! $new->content !!}
                                <br>
                                <div class="lightSliderHome" >
                                    <ul id="lightSlider">
                                        @foreach($new->images as $image)
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
                            <h3 class="widget-title">{{ __('frontend.related_news') }}</h3>

                            <ul>
                                @foreach($relatedNews as $relatedNew)
                                    <li>
                                        <a href="{{ $relatedNew->id }}">
                                            {{ $relatedNew->title }}
                                            <img src="{{ $relatedNew->image }}" style="width: 80px;" alt="Image">
                                        </a>
                                        <span>{{ $relatedNew->date }}</span>
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
