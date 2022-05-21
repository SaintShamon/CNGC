import $ from 'jquery';
import 'slick-carousel';

function programs_slider() {
    $('.programs').each(function () {
        let block = $(this);
        let slider = $(this).find('.programs_row');


        slider.slick({
            dots: true,
            arrows: false,
            // centerMode: true,
            // centerPadding: '60px',
            slidesToShow: 4,
            infinite: false,
            speed: 500,
            cssEase: 'linear',
            // adaptiveHeight: true,
            autoplay: false,
            // autoplaySpeed: 3000,
            // prevArrow: block.find('.bottom_wrapper .arrow_block .prev_btn'),
            // nextArrow: block.find('.bottom_wrapper .arrow_block .next_btn')
        });

    });
}

export {
    programs_slider
};