import $ from 'jquery';

function header() {
    $('#toggle').click(function () {
        $(this).toggleClass('on');
        $('#side-panel').toggleClass('active');
        $('body').toggleClass('side-panel-overlay');
        return false;
    });

    $(document).click(function (event) {
        let $target = $(event.target);
        if (!$target.closest('.side-panel').length) {
            $('#toggle').removeClass('on');
            $('#side-panel').removeClass('active');
            $('body').removeClass('side-panel-overlay');
        }
    });

    $('.location_menu_block li.menu-item-has-children .menu-item__icon').click(function () {
        event.preventDefault();
        $(this).attr('tabindex', 1).focus();
        $(this).parents().eq(1).toggleClass('active');
        $(this).parents().eq(1).find('.sub-menu').slideToggle(300);
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 300) {
            $('.top_header_block').addClass('fixed_header');
            $('.bottom_header_block').addClass('fixed_header');
        } else {
            $('.top_header_block').removeClass('fixed_header');
            $('.bottom_header_block').removeClass('fixed_header');
        }
    });
}


export {
    header
};