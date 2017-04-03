/**
 * Created by Marina on 10.03.2017.
 */

(function($) {
    var origAppend = $.fn.append;

    $.fn.append = function () {
        return origAppend.apply(this, arguments).trigger("append");
    };
})(jQuery);

$(document).ready(function(){
///INTRO SLID
        $('.intro-slide').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            nextArrow: false,
            prevArrow: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 570,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });


///testimonials slider
    $('.slide-testimon').slick({
       dots: true,
        autoplay: true,
        nextArrow: false,
       prevArrow: false,
    });

/// Portfolio-slider
    $('.project-img-slide').slick({
        //autoplay: true,
        dots: true,
        nextArrow: false,
        prevArrow: false,
    });

///ABOUT carousel
    $('.carousel-clients').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 4,
        slickNext: true,
        slickPrev: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }
        ]
    });

    });



