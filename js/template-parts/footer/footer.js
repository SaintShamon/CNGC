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
}


export {
    footer
};