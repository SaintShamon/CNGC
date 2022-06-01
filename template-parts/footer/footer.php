<footer>
    <div class="section-bg"></div>
    <div class="container">
        <?php 
            $form_title = get_field('form_title', 'options');
            $text_block = get_field('middle_block_text', 'options');
            $bottom_left_text = get_field('bottom_block_left_text', 'options');
            $bottom_right_text = get_field('bottom_block_right_text', 'options');
            $footer_logo = get_field('footer_logo', 'options');
        ?>
        <div class="top_footer_wrapper">
            <?php if($form_title): ?>
                <div class="title">
                    <h2><?php echo $form_title; ?></h2>
                </div>
            <?php endif; ?>
            <div class="footer_form form">
                <?php echo do_shortcode('[contact-form-7 id="912" title="Footer Form"]'); ?>
            </div>
        </div>
        <div class="center_footer_wrapper">
            <div class="left_block">
                <?php if($footer_logo): ?>
                    <div class="logo_footer">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo $footer_logo['url']; ?>" alt="">
                        </a>
                    </div>
                <?php endif; ?>
                <?php if($text_block): ?>
                    <div class="adres_block">
                        <?php echo $text_block; ?>
                    </div>
                <?php endif; ?>
                <?php if(have_rows('banner_social_icons', 'options')): ?>
                    <div class="socials_block">
                        <ul>
                            <?php while(have_rows('banner_social_icons', 'options')): the_row(); ?>
                                <?php 
                                    $link = get_sub_field('link');
                                    $icon = get_sub_field('icon');
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
                <?php endif; ?>
            </div>
            <div class="right_block">
                <div class="col">
                    <div class="inner_block">
                        <nav class="footer_nav">
                            <?php wp_nav_menu(array('theme_location' => 'footer-menu-1')); ?>
                        </nav>
                    </div>
                </div>
                <div class="col">
                    <nav class="footer_nav footer_nav_right">
                        <ul class="footer_menu">
                            <?php wp_nav_menu(array('theme_location' => 'footer-menu-2')); ?>
                        </ul>
                    </nav>
                    <nav class="footer_nav">
                        <ul class="footer_menu">
                            <?php wp_nav_menu(array('theme_location' => 'footer-menu-3')); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php if($bottom_left_text || $bottom_right_text): ?>
            <div class="bottom_footer_wrapper">
                <?php if($bottom_left_text): ?>
                    <div class="copyright">
                        <p><?php echo $bottom_left_text; ?></p>
                    </div>
                <?php endif; ?>
                <?php if($bottom_right_text): ?>
                    <div class="website_block">
                        <p><?php echo $bottom_right_text; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</footer>