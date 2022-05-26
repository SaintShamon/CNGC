<section class="first_section section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="text_block">
                <?php 
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                ?>
                <?php if($title): ?>
                    <div class="title_wrapper">
                        <div class="title">
                            <h1><?php echo $title; ?></h1>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="block_wrapper">
                    <?php if($text): ?>
                        <div class="subtitle">
                            <p><?php echo $text; ?></p>
                        </div>
                    <?php endif; ?>
                    <a href="#" class="button button--text button--lg">explore more
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="bottom_wrapper">
                    <div class="arrow_block">
                        <button class="prev_btn btn">
                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                    fill="white" />
                            </svg>
                        </button>
                        <button class="next_btn btn">
                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                    <?php if(have_rows('banner_social_icons', 'options')): ?>
                        <div class="socials_block">
                            <ul>
                                <?php while(have_rows('banner_social_icons', 'options')): the_row(); ?>
                                    <?php 
                                        $icon = get_sub_field('icon');
                                        $link = get_sub_field('link');
                                    ?>
                                    <li>
                                        <a class="img_36" href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                                            <?php 
                                            if( !empty( $icon ) ): ?>
                                                <?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="slider_block">
        <?php if(have_rows('slider_images')): ?>
            <div class="slider_block__list">
                <?php while(have_rows('slider_images')): the_row(); ?>
                    <?php $image = get_sub_field('image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="">
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php 
            $top_award_image = get_field('top_award_image', 'options');
            $bottom_award_image = get_field('bottom_award_image', 'options');
        ?>
        <?php if($top_award_image || bottom_award_image): ?>
            <div class="right_work_img">
                <?php if($top_award_image): ?><img src="<?php echo $top_award_image ?>" alt=""><?php endif; ?>
                <?php if($bottom_award_image): ?><img src="<?php echo $bottom_award_image ?>" alt=""><?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>