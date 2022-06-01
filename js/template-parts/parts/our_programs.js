import $ from 'jquery';
import 'slick-carousel';

function our_programs_slider() {

    $('.our_programs').each(function () {
        let block = $(this);
        let slider = $(this).find('.programs_list');


        slider.slick({
            dots: false,
            arrows: true,
            infinite: false,
            speed: 500,
            cssEase: 'linear',
            autoplay: false,
            responsive: [{

                    breakpoint: 4000,
                    settings: "unslick",

                },
                {
                    breakpoint: 620,
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
    our_programs_slider
};