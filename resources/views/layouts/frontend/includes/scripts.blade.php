<!--Scripts-->
<script src="{{ asset('frontend/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/index.js') }}"></script>
<script src="{{ asset('frontend/plugins/swiper/index.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>

<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
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

<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        autoplay: {
            delay: 2000,
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
</script>

<script>
      var swiper = new Swiper(".mySwiperKG", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>


<script>
    var swiper = new Swiper(".customSwiper2", {
      slidesPerView: 5,
      spaceBetween: 20,
      slidesPerGroup: 1,
      loop: true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
      breakpoints: {
          500: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
          1600: {
            slidesPerView: 5,
          },
        },
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

<script>
    $(document).ready(function(){

        $('.counter').counterUp({
    delay: 1,
    time: 400,
    offset: 70,
    beginAt: 100,
});
});

    </script>

