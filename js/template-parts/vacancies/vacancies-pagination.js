import $ from 'jquery';

function vacancies_pagination() {

    var elementsAjaxHide = $('.js-ajax-hide');
    var elementsAjaxShow = $('.js-ajax-show');
    var container = $('.js-archive-container');

    if ($('.vacancies_list').length) {
        
        //ajax requst based on taxonomies
        function getPosts() {
            var data = {};

            data.ppp = container.data('ppp');
            data.page = container.data('page');

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
            //url.searchParams.set('year', data.year);
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
                    action: 'vacancies_ajax',
                    ppp: data.ppp,
                    page: data.page
                },
                success: function (response) {
                    if (response !== '') {
                        container.html('');
                        container.html(response);
                        container.removeClass('loading');
                        $('html, body').animate({
                            scrollTop: jQuery('.vacancies_list').offset().top - 50
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
                scrollTop: $('.vacancies-archive').offset().top - 150
            }, 1000);

        });

        $('.js-back-all').click(function(e){
           
        });

    }


}

export { vacancies_pagination };