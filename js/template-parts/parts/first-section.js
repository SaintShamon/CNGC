import $ from 'jquery';
import 'slick-carousel';

function first_slider() {
    $('.first_section').each(function () {
        let block = $(this);
        let slider = $(this).find('.slider_block__list');


        slider.slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            prevArrow: block.find('.bottom_wrapper .arrow_block .prev_btn'),
            nextArrow: block.find('.bottom_wrapper .arrow_block .next_btn')
        });

        // slider.on('init', function () {
        //     $(window).trigger('heightChanges');
        // });
    });
    $(document).ready(function(){
        $('.home #main > section:eq(1)').attr('id', 'explore_block');
    }); 
}
export {
    first_slider
};