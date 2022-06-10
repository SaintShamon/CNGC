<section class="inner_first_section section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="text_block">
                <?php 
                    $title = get_sub_field('title');
                    $image = get_sub_field('image');
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
        style="background: center / cover no-repeat url('<?php echo $image; ?>'), top center repeat url('/wp-content/themes/CNGC/assets/images/fill.png');">
        <?php if($top_award_image || $bottom_award_image): ?>
            <div class="right_work_img">
                <?php if($top_award_image): ?><img src="<?php echo $top_award_image; ?>" alt=""><?php endif; ?>
                <?php if($bottom_award_image): ?><img src="<?php echo $bottom_award_image ?>" alt=""><?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>