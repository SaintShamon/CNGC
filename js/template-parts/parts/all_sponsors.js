import $ from 'jquery';
import 'slick-carousel';

function all_sponsors_slider() {
    $('.all_sponsors').each(function () {
        let block = $(this);
        let slider = $(this).find('.sponsors_row');


        slider.slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            autoplay: true,
            responsive: [{

                    breakpoint: 4000,
                    settings: "unslick",

                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 376,
                    settings: {
                        slidesToShow: 1,
                        // centerMode: true,
                    }
                }
            ]
        });

    });
}

export {
    all_sponsors_slider
};