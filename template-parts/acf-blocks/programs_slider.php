<section class="programs section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $button = get_sub_field('button');
            ?>
            <div class="title_wrapper">
                <?php if($title): ?>
                <div class="title">
                    <h2><?php echo $title; ?></h2>
                </div>
                <?php endif; ?>
                <div class="btn_block">
                    <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>"
                        class="button button--icon_right"><?php echo $button['title']; ?>
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.43937 7.75746L0.875631 1.50252C0.629645 0.518582 1.83571 -0.164287 2.55288 0.552877L9.29289 7.29289C9.68342 7.68342 9.68342 8.31658 9.29289 8.70711L2.55288 15.4471C1.83572 16.1643 0.629645 15.4814 0.87563 14.4975L2.43937 8.24254C2.47918 8.0833 2.47918 7.9167 2.43937 7.75746Z"
                                fill="#084074" />
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                $args = array(
                    'post_type' => 'programs',
                    'posts_per_page' => -1,
                );
                $the_query = new WP_Query($args);
            ?>
            <?php if($the_query->have_posts()): ?>
            <div class="content_wrapper programs_row">
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <div class="program_block">
                    <div class="img_block">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <a class="btn" href="<?php the_permalink(); ?>">
                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                    fill="white" />
                        </a>
                    </div>
                    <div class="title_block">
                        <p><?php the_title(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>"></a>
                </div>
                <?php endwhile; wp_reset_postdata(  ); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>