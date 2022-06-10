import $ from 'jquery';
import 'slick-carousel';

function sponsors_slider() {
    $('.sponsors').each(function () {
        let block = $(this);
        let slider = $(this).find('.sponsors_row');


        slider.slick({
            dots: false,
            arrows: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            adaptiveHeight: true,
            infinite: true,
            speed: 2250,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 1,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1800,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1368,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        // centerMode: true,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        // centerMode: true,
                    }
                },
                {
                    breakpoint: 426,
                    settings: {
                        slidesToShow: 1,
                        variableWidth: false,
                        // centerMode: true,
                    }
                }
            ]
        });
        slider.slick('slickGoTo', 0);
    });
}

export {
    sponsors_slider
};