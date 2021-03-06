(function($){
    $(document).ready(function(){
        $(document).on('click', '.yearFilter .yearFilter_item', function(e){
            e.preventDefault();
            var year = $(this).data('year');
            $.ajax({
                url: wpAjax.ajaxUrl,
                data: {action: 'filter', year: year},
                type: 'post',
                success: function(result){
                    $('.news_list').html(result);
                },
                error: function(result){
                    console.log(result);
                }
            });
        });
    });
})(jQuery);

jQuery('header .search .btn-search, header .search input[type="search"]').on('focus', function(){
    jQuery('header .search form').addClass('active');
});
jQuery('header .search .btn-search, header .search input[type="search"]').on('blur', function(){
    jQuery('header .search form').removeClass('active');
});