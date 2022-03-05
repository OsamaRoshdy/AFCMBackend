@extends('layouts.frontend.app')


@section('content')
    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ getSection('news_header')->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('news_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- Post Detils -->
    <div class="post_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="background: #f5f5f5; padding: 15px" class="new_keywords">
                        <h3>Related News</h3>
                        <div class="card_latest mb-3 hvr-forward">
                            <div class="card">
                                <img src="http://127.0.0.1:8000/storage/images/blocks/news.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span>2022-03-05</span>
                                    <h5 class="card-title">Medical Education Department</h5>
                                    <p class="card-text">Professor Omayma Hamed, Director of Medical Educat...</p>
                                    <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card_latest mb-3 hvr-forward">
                            <div class="card">
                                <img src="http://127.0.0.1:8000/storage/images/blocks/news.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span>2022-03-05</span>
                                    <h5 class="card-title">Medical Education Department</h5>
                                    <p class="card-text">Professor Omayma Hamed, Director of Medical Educat...</p>
                                    <a href="" class="learn_more">Learn More <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="image">
                        <img src="http://127.0.0.1:8000/storage/images/blocks/news.jpg" class="img-fluid" alt="">
                    </div>
                    <h2>A meeting between the director of AFCM and the representative of harvard medical school , usa</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.\
                        <br>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                    <div class="row">
                        <!-- <div class="col-12 hvr-backward">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1646007086644-e19efeb2b02c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" style="height: 600px" class="d-block w-100" alt="...">
                                  </div>
                                   <div class="carousel-item">
                                    <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1" style="height: 600px" class="d-block w-100" alt="...">
                                  </div>
                                </div>

                              </div>
                        </div> -->

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-1.jpg"  class="image"/>
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />

                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <style>
        .post_details {
            padding: 20px 0 !important;
        }
    </style>
@endsection

