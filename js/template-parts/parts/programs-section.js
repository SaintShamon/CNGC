import $ from 'jquery';
import 'slick-carousel';

function programs_slider() {
    $('.programs').each(function () {
        let block = $(this);
        let slider = $(this).find('.programs_row');

        slider.slick({
            dots: true,
            arrows: false,
            slidesToShow: 4,
            infinite: true,
            speed: 3000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 1,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        slider.on('wheel', (function (e) {
            e.preventDefault();

            if (e.originalEvent.deltaY < 0) {
                $(this).slick('slickNext');
            } else {
                $(this).slick('slickPrev');
            }
        }));

    });
}

export {
    programs_slider
};