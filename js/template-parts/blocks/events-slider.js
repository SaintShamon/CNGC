import $ from 'jquery';
import 'slick-carousel';

function events_slider(){
    $(document).ready(function(){
        $('.events_row').slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            infinite: true,
            speed: 2250,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 1,
            responsive: [{
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
};

export{events_slider}