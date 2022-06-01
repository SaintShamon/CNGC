<?php 
function load_scripts_for_filter() {
    wp_enqueue_script('ajax', get_template_directory_uri(  ) . '/assets/js/script.js', array('jquery'), NULL, true);

    wp_localize_script( 'ajax', 'wpAjax',
     array('ajaxUrl' => admin_url('admin-ajax.php'))
    );
};

add_action('wp_enqueue_scripts', 'load_scripts_for_filter');


add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax(){
    ini_set('display_errors', 1); 
    error_reporting(E_ALL);

    $year = $_POST['year'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        /*'date_query' => array( 
            array( 
                'column' => 'post_date_gmt', 
                'before' => '1 year ago', 
            ),
        ),*/
    );
    
    $the_query = new WP_Query($args);

    if($the_query->have_posts()):
        while($the_query->have_posts()): $the_query->$the_post();?>
            <div class="news_block" <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="display: flex; flex-direction: column;"<?php endif; ?>>
                <?php if(!empty(get_the_post_thumbnail_url(  ))): ?>
                    <div class="img_block">
                        <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
                    </div>
                <?php endif; ?>
                <div class="inner_block" <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="margin-top: auto;"<?php endif; ?>>
                    <div class="date_block">
                        <span><?php echo get_the_date('F j, Y') ?></span>
                    </div>
                    <div class="title_block">
                        <?php 
                            $post_title = get_the_title();
                            if(!empty(get_the_post_thumbnail_url(  ))){
                                $max = 79;
                            }
                            else{
                                $max = 49;
                            }
                            if (strlen($post_title) > $max)
                            $post_title = substr($post_title, 0, $max - 3) . '...';
                        ?>
                        <h3><?php echo $post_title; ?></h3>
                    </div>
                    <div class="except_block">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;


    die();
}