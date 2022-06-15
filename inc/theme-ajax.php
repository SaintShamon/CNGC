<?php
/*
	=====================
		Theme ajax functions
	=====================	
*/


/**
*  News ajax
*/
function news_ajax()
{
    $ppp = (isset($_POST['ppp'])) ? $_POST['ppp'] : 1;
    $page = (isset($_POST['page'])) ? $_POST['page'] : 1;
    
    
    $ajaxParams = array(
        'post_type'      => 'post',
        'posts_per_page' => (isset($_POST['ppp'])) ? $_POST['ppp'] : 15,
        'page'           => (isset($_POST['page'])) ? $_POST['page'] : 1,
    );

    if (isset($_POST['date'])) : 
        $ajaxParams['date'] = $_POST['year'];
    endif;

    get_template_part('template-parts/news/news-archive','loop', $ajaxParams);
    get_template_part('template-parts/news/news-archive','pagination', $ajaxParams);

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_nopriv_news_ajax', 'news_ajax');
add_action('wp_ajax_news_ajax', 'news_ajax');
