import $ from 'jquery';

function footer() {
    if ($(window).width() < 1025) {
        /*Dropdown Menu footer*/

        $('footer .footer_menu li.menu-item-has-children').click(function () {
            event.preventDefault();
            $(this).attr('tabindex', 1).focus();
            $(this).toggleClass('active');
            $(this).find('.sub-menu').slideToggle(300);
        });

        $("footer .footer_menu li.menu-item-has-children").dblclick(function () {
            $(this).unbind('click')
        });

        $('footer .footer_menu li.menu-item-has-children').focusout(function () {
            $(this).removeClass('active');
            $(this).find('.sub-menu').slideUp(300);
        });
    }
    var btn = $('#button_top');
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
        $('.top_header_block').removeClass('fixed_header');
        $('.bottom_header_block').removeClass('fixed_header');
    });

    $(window).scroll(function(){
        $(window).scrollTop(function(){
            if ($(window).scrollTop() >= 300) {
                function scrollEnd(){
                    $('#button_top').removeClass('show');
                }
                $('#button_top').addClass('show');
                setTimeout(scrollEnd, 3000);
            };
        });
    });

}


export {
    footer
};