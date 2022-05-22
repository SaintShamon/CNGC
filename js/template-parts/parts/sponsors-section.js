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
            infinite: false,
            speed: 500,
            cssEase: 'linear',
            autoplay: false,
        });

    });
}

export {
    sponsors_slider
};