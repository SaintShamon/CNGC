import $ from 'jquery';
import 'slick-carousel';

function history_slider() {
    $('.history').each(function () {
        let block = $(this);
        let slider = $(this).find('.history_row');


        slider.slick({
            dots: true,
            arrows: false,
            slidesToShow: 3,
            infinite: false,
            speed: 500,
            cssEase: 'linear',
            autoplay: false,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 992,
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
    history_slider
};