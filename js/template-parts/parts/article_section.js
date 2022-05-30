import $ from 'jquery';

function article_block() {

    $(document).ready(function () {
        var p = $('.article_section .news_block .except_block p');
        var ks = $('.article_section .news_block .except_block').height();

        while ($(p).outerHeight() > ks) {
            $(p).text(function (index, p) {
                return p.replace(/\W*\s(\S)*$/, '...');
            });
        }
    });
}

export {
    article_block
};