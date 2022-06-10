<?php get_header(); ?>
<?php 
    $pageID = get_option( 'page_for_posts' );;
    $banner = get_field('banner', $pageID);
?>
<?php if($banner): ?>
<section class="inner_first_section section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="text_block">
                <?php 
                    $title = $banner['title'];
                    $image = $banner['image'];
                    $top_award_image = get_field('top_award_image', 'options');
                    $bottom_award_image = get_field('bottom_award_image', 'options');
                ?>
                <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h1><?php echo $title; ?></h1>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(have_rows('banner_social_icons', 'options')): ?>
                <div class="bottom_wrapper">
                    <div class="socials_block">
                        <ul>
                            <?php while(have_rows('banner_social_icons', 'options')): the_row(); ?>
                            <?php 
                                        $icon = get_sub_field('icon');
                                        $link = get_sub_field('link');
                                    ?>
                            <li>
                                <a class="img_36" href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                                    <?php if( !empty( $icon ) ): ?>
                                    <?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
                                    <?php endif; ?>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="img_block"
        style="background: center / cover no-repeat url('<?php echo $image['url']; ?>'), top center repeat url('../wp-content/themes/CNGC/assets/images/fill.png');">
        <?php if($top_award_image || $bottom_award_image): ?>
        <div class="right_work_img">
            <?php if($top_award_image): ?><img src="<?php echo $top_award_image; ?>" alt=""><?php endif; ?>
            <?php if($bottom_award_image): ?><img src="<?php echo $bottom_award_image ?>" alt=""><?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php $main_post = get_field('main_post', $pageID); ?>
<?php if($main_post): ?>
<section class="news_img_section section">
    <div class="container">
        <div class="main_block">
            <div class="img_block">
                <img src="<?php echo get_the_post_thumbnail_url( $main_post->ID ) ?>" alt="">
            </div>
            <div class="text_block">
                <div class="date">
                    <span>
                        <?php echo get_the_date('F j, Y') ?>
                    </span>
                </div>
                <div class="center_block">
                    <p><?php echo get_the_title($main_post->ID); ?></p>
                </div>
                <div class="down_block">
                    <p><?php echo get_the_excerpt($main_post->ID); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(have_posts()): ?>
<section class="all_news section">
    <div class="container">
        <div class="main_block">
            <div class="title_wrapper">
                <div class="title">
                    <h2>All news</h2>
                </div>
                <div class="btn_block">
                    <p>Archive articles</p>
                    <div class="custom-select" style="">
                        <select name="select_year" id="select_year">
                            <option value="sel" disabled="" selected="">Choose a year</option>
                            <option value="">2021</option>
                            <option value="">2020</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="content_wrapper">
                <div class="news_list">
                    <?php while(have_posts()): the_post(); ?>
                    <a class="news_block" href="<?php the_permalink(); ?>"
                        <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="display: flex; flex-direction: column;"
                        <?php endif; ?>>
                        <?php if(!empty(get_the_post_thumbnail_url(  ))): ?>
                        <div class="img_block">
                            <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
                        </div>
                        <?php endif; ?>
                        <div class="inner_block"
                            <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="margin-top: auto;"
                            <?php endif; ?>>
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
                    </a>
                    <?php endwhile; ?>
                </div>
                <div class="pagination_block">
                    <?php $args = array(
                        'prev_text'          => __('<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z" fill="#084074" /></svg>'),
                        'next_text'          => __('<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z" fill="#084074" /></svg>'),
                    ); ?>
                    <?php echo get_the_posts_pagination( $args ) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'date_query' => array( array( 'column' => 'post_date_gmt', 'before' => 'this year', ),), 'order' => 'DESC'  ) );
?>
<section class="last_news all_news section">
    <div class="container">
        <div class="main_block">
            <div class="title_wrapper">
                <div class="title">
                    <h2>Top 3 articles of <?php echo date("Y"); ?></h2>
                </div>
            </div>
            <div class="content_wrapper">
                <div class="news_list">
                    <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                    <div class="news_block"
                        <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="display: flex; flex-direction: column;"
                        <?php endif; ?>>
                        <?php if(!empty(get_the_post_thumbnail_url(  ))): ?>
                        <div class="img_block">
                            <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
                        </div>
                        <?php endif; ?>
                        <div class="inner_block"
                            <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="margin-top: auto;"
                            <?php endif; ?>>
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
                        <a href="<?php the_permalink(); ?>"></a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<script>
jQuery(document).ready(function() {
    var prev = jQuery('.navigation.pagination .prev').length;
    var next = jQuery('.navigation.pagination .next').length;
    if (prev != 1) {
        jQuery(
                '<a class="prev"><svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z" fill="#084074" /></svg></a>')
            .prependTo('.navigation.pagination .nav-links');
    }
    if (next != 1) {
        jQuery(
                '<a class="next"><svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z" fill="#084074" /></svg></a>')
            .appendTo('.navigation.pagination .nav-links');
    }
});
</script>
<?php get_footer(); ?>