<section class="events_section section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="title_wrapper">
                <?php 
                    $title = get_sub_field('title');
                    $button = get_sub_field('button');
                ?>
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <div class="btn_block">
                        <a href="<?php echo $button['url']; ?>" class="button button--icon_right"><?php echo $button['title']; ?>
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.43937 7.75746L0.875631 1.50252C0.629645 0.518582 1.83571 -0.164287 2.55288 0.552877L9.29289 7.29289C9.68342 7.68342 9.68342 8.31658 9.29289 8.70711L2.55288 15.4471C1.83572 16.1643 0.629645 15.4814 0.87563 14.4975L2.43937 8.24254C2.47918 8.0833 2.47918 7.9167 2.43937 7.75746Z"
                                    fill="#084074" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <?php 
                $args = array(
                    'post_type' => 'events',
                    'posts_per_page' => '3',
                );
                $the_query = new WP_Query($args);
                if($the_query->have_posts()):
            ?>
                <div class="content_wrapper events_row">
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="event_block">
                            <?php 
                                $date_string = get_field('event_date'); 
                                $date = DateTime::createFromFormat('Ymd', $date_string);
                                $time = get_field('event_time');
                            ?>
                            <div class="top_event">
                                <div class="date">
                                    <?php if($date): ?><span><?php echo $date->format('j') ?></span><?php endif; ?>
                                    <?php if($date): ?><?php echo $date->format('F') ?><?php endif; ?>
                                </div>
                                <div class="time">
                                    <?php if($date): ?><span class="year"><?php echo $date->format('Y') ?></span><?php endif; ?>
                                    <?php if($date): ?><span class="time"><?php echo $time ?></span><?php endif; ?>
                                </div>
                            </div>
                            <div class="img_event">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            </div>
                            <div class="title_event">
                                <p><?php the_title(); ?></p>
                            </div>
                            <a href="<?php the_permalink(  ) ?>"></a>
                        </div>
                    <?php endwhile; wp_reset_postdata(  ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>