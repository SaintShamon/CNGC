import $ from 'jquery';

function news_filter() {

    var elementsAjaxHide = $('.js-ajax-hide');
    var elementsAjaxShow = $('.js-ajax-show');
    var container = $('.js-archive-container');
    
    // if ($('.jobs-block .filters').length) {
    //     $('.filters__item').each(function(){
    //         let item = $(this);
    //         let header = $(this).find('.filters__item__header');
    //         let dropdown = $(this).find('.filters__item__dropdown');

    //         header.click(function(){
    //             let active = item.hasClass('filter-active');
    //             if(active){
    //                 item.removeClass('filter-active');
    //                 dropdown.slideUp();
    //             } else{
    //                 $('.filters__item.filter-active').find('.filters__item__dropdown').slideUp();
    //                 $('.filters__item.filter-active').removeClass('filter-active');
    //                 item.addClass('filter-active');
    //                 dropdown.slideDown(); 
    //             }
    //         });
    //     });

    //     $(document).click(function() {
    //         $('.filters__item.filter-active .filters__item__dropdown').slideUp();
    //         $('.filters__item.filter-active').removeClass('filter-active');
    //     });
          
    //     $('.filters__item').click(function(event){
    //         event.stopPropagation();
    //     });

    //     //search
    //     let form = $('#searchForm');
    //     let redirectLink = $('#searchForm').attr('action');

    //     form.on('submit',function(e){
    //         e.preventDefault();


    //         let taxonomiesObject = {};
    //         $('.js-filter').each(function () {
    //             let taxonomy = $(this).data('taxonomy');

    //             let categoryList = $(this).find('.options');
    //             let cats = '';
    //             let counter = 0;
    //             categoryList.find('input[type="checkbox"]:checked').each(function () {
    //                 if(counter!=0){
    //                     cats += ',';
    //                 }
    //                 var value = $(this).val();
    //                 cats += value;
    //                 counter ++;
    //             });

    //             if (cats != '') {
    //                 taxonomiesObject[taxonomy] = '';
    //                 taxonomiesObject[taxonomy] = cats;
    //             }
    //         });

    //         redirectLink += '?';
    //         for (const [key, value] of Object.entries(taxonomiesObject)) {
    //             redirectLink+= key + '=' + value + '&';
    //         }

    //         $(location).prop('href', redirectLink)
    //     });
    // }

    if ($('#archive-year-select').length) {

        $('#archive-year-select').on('change', function() {
            var selected_option_value = $(this).find(":selected").text();
            console.log(selected_option_value);

            getPosts(selected_option_value);
        });
        
        //ajax requst based on taxonomies
        function getPosts(selected_option_value) {
            var data = {};

            data.ppp = container.data('ppp');
            data.page = container.data('page');
            data.year = selected_option_value;

            console.log(data.year);

            // push categories to url
            var url = new URL(window.location.href);
            // url.searchParams.delete('job_category');
            // url.searchParams.delete('job_location');
            
            url.searchParams.delete('page');
            url.searchParams.delete('search');
            // for (const [key, value] of Object.entries(taxonomies)) {
            //     url.searchParams.set(key, value);
            // }
            url.searchParams.set('page', data.page);
            url.searchParams.set('year', data.year);
            //url.searchParams.set('search', data.search);

            window.history.replaceState(null, null, url);

            // //hide dropdowns
            // $('.filters__item').removeClass('filter-active');
            // $('.filters__item').find('.filters__item__dropdown').slideUp();
            
            elementsAjaxHide.hide();
            container.addClass('loading');
            $('.js-back-all').addClass('active');

            $.ajax({
                /* eslint-disable */
                url: customjs_ajax_object.ajax_url,
                /* eslint-enable */
                type: 'post',
                data: {
                    action: 'news_ajax',
                    year: data.year,
                    ppp: data.ppp,
                    page: data.page
                },
                success: function (response) {
                    if (response !== '') {
                        container.html('');
                        container.html(response);
                        container.removeClass('loading');
                        $('html, body').animate({
                            scrollTop: jQuery('.news-archive').offset().top - 50
                        }, 'slow');
                    } else {
                        container.html('<h2>Nothing was found.</h2>');
                        container.removeClass('loading');
                    }
                }
            });
        }

        //Pagination
        $(document).on('click', '.js-pagination-page', function (e) {
            e.preventDefault();
            var page = parseInt($(this).data('page'));
            container.data('page',page);


            //let taxonomies = getTaxonomies();
            getPosts();
            $([document.documentElement, document.body]).animate({
                scrollTop: $('.js-archive-container').offset().top-150
            }, 1000);

        });

        $('.js-back-all').click(function(e){
           
        });

    }


}

export { news_filter };