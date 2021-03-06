<?php
$args = ( ! empty( $args ) ) ? $args : false;
if(!$args){
    $args = [
        'post_type'         => 'vacancies',
        'posts_per_page'    => 14,
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
);

$query = new WP_Query( $queryArgs );
$amount = $query->found_posts;

if ( $query->have_posts() ) : ?>
    <section class="vacancies section">
        <div class="container">

            <div class="main_block">
                <?php 
                    $title = 'Our vacancies';
                    if($title): ?>
                        <div class="title_wrapper">
                            <div class="title">
                                <h2><?php echo 'Our vacancies'; ?></h2>
                            </div>
                        </div>
                    <?php endif; ?>
          
                <div class="content_wrapper">
                    <div class="vacancies_list">

                        <?php while ( $query->have_posts() ) :
                            $query->the_post(); ?>

                            <?php get_template_part( 'template-parts/vacancies/vacancies','card'); ?>

                        <?php endwhile; ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
<?php else: ?>

    <section class="arhive-posts">
        <div class="container">
            <div class="content-block">
                <h3><?php _e('No results found.','tech-talent'); ?></h3>
            </div>
        </div>
    </section>

<?php endif; wp_reset_postdata(); ?>