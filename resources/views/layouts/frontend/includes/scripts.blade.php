
<!--Scripts-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
<script src="{{ asset('/') }}AFMC-project/node_modules/jquery/dist/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}AFMC-project/css/slick.min.js"></script>

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<link rel="stylesheet" href="AFMC-project/css/slick.js">
<script src="{{ asset('/') }}AFMC-project/js/jquery.nivo.slider.js"></script>
<!-- <script src="AFMC-project/js/all.min.js"></script>
-->
<!-- Latest compiled JavaScript -->
<script src="{{ asset('/') }}AFMC-project/js/Video-gallery/jquery.spidochetube.js"></script>

<script src="{{ asset('/') }}AFMC-project/node_modules/channel-slider/js/ycp.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="AFMC-project/node_modules/slider/thumbnail-slider.js"></script>
<script src="AFMC-project/node_modules/slider/ninja-slider.js"></script> -->
<!-- <script src="AFMC-project/node_modules/slider/swiper-bundle.min.js"></script> -->
<script>
    $(function () {
        if ($('#carousel-left').length) {
            var $l = $('#carousel-left'),
                $c = $('#carousel-center'),
                $r = $('#carousel-right');

            $l.carouFredSel({
                auto: false,
                items: 1,
                direction: 'right',
                prev: {
                    button: '#prev',
                    fx: 'uncover',
                    onBefore: function () {
                        setTimeout(function () {
                            $c.trigger('prev');
                        }, 100);
                    }
                },
                next: {
                    fx: 'cover'
                }
            });
            $c.carouFredSel({
                auto: false,
                items: 1,
                prev: {
                    onBefore: function () {
                        setTimeout(function () {
                            $r.trigger('prev');
                        }, 100);
                    }
                },
                next: {
                    onBefore: function () {
                        setTimeout(function () {
                            $l.trigger('next');
                        }, 100);
                    }
                }
            });
            $r.carouFredSel({
                auto: false,
                items: 1,
                prev: {
                    fx: 'cover'
                },
                next: {
                    button: '#next',
                    fx: 'uncover',
                    onBefore: function () {
                        setTimeout(function () {
                            $c.trigger('next');
                        }, 100);
                    }
                }
            });
        }

    });
</script>
<script src="AFMC-project/js/index.js"></script>
<!-- <script src="AFMC-project/node_modules/sweetalert/dist/sweetalert.min.js"></script> -->
<script>
    $(document).ready(function () {
        $('.banner_slider').slick({
            // slidesToShow: 1,
            // slidesToScroll: 1,
            autoplay: false,
            arrows: false,
            //     fade: true,
            asNavFor: '.thumbnail_slider'
        });

        $('.thumbnail_slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.banner_slider',
            dots: false,
            centerMode: false,
            focusOnSelect: true
        });


    });

</script>
<!-- <script>
    var swiper = new Swiper(".thumbsSlider", {
        spaceBetween: 0,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        slidesPerView: "auto",
        direction: "vertical",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });
    var swiper2 = new Swiper(".mainSlider", {
        spaceBetween: 0,
        loop: true,
        slidesPerView: "auto",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script> -->
<!-- <script>
    /* $(function() {

        $("#youtube").ycp({
            apikey : 'AIzaSyC8Z4mQonF8KowjtJnp11O2iA2Dh32rcak',
            playlist : 7,
            autoplay : true,
            related : true
        });



    }); */
</script> -->

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
