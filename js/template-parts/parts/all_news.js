import $ from 'jquery';

function news_block() {

    $(document).ready(function () {
        // var p = $('.all_news .news_block .title_block h3');
        // var ks = $('.all_news .news_block .title_block').height();
        var text = $('.all_news .news_block .except_block p');
        var text_height = $('.all_news .news_block .except_block').height();
        // while ($(p).outerHeight() > ks) {
        //     $(p).text(function (index, text) {
        //         return text.replace(/\W*\s(\S)*$/, '...');
        //     });
        // }
        while ($(text).outerHeight() > text_height) {
            $(text).text(function (index, text) {
                return text.replace(/\W*\s(\S)*$/, '...');
            });
        }
    });
}

export {
    news_block
};