<?php
$args = ( ! empty( $args ) ) ? $args : false;
if(!$args){
    $args = [
        'post_type'         => 'post',
        'posts_per_page'    => 15,
        'page'              => get_query_var( 'page' ) ? (int) get_query_var( 'page' ) : 1,
    ];
}

/**
 * Create query args
 */
$queryArgs = array(
    'post_type' => $args['post_type'],
    'posts_per_page' => $args['posts_per_page'],
    'paged' => $args['page'],
    'post_status'     => 'publish',
    'date_query' => array(
        array(
            'year'  => $args['year'],
        ),
    ),
);

$query = new WP_Query( $queryArgs );
$amount = $query->found_posts;

if ( $query->have_posts() ) : ?>
<div class="content_wrapper">
    <div class="container">

        <ul class="news_list">

            <?php while ( $query->have_posts() ) :
                    $query->the_post(); ?>

            <?php get_template_part( 'template-parts/news/news','card'); ?>

            <?php endwhile; ?>

        </ul>
    </div>
</div>
<?php else: ?>

<section class="arhive-posts">
    <div class="container">
        <div class="content-block">
            <h3><?php _e('No results found.','tech-talent'); ?></h3>
        </div>
    </div>
</section>

<?php endif; wp_reset_postdata(); ?>