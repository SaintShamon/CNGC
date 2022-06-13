<?php get_header(); ?>
<?php 
    $hero = get_field('hero_banner');
?>
<?php if($hero): ?>
<section class="inner_first_section down_content section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="text_block">
                <?php 
                    $image = $hero['image'];
                    $title = $hero['title'];
                    $place = $hero['place'];
                    $schedule = $hero['schedule'];
                    $leftButton = $hero['left_button'];
                    $rightButton = $hero['right_button'];
                    $top_award_image = get_field('top_award_image', 'options');
                    $bottom_award_image = get_field('bottom_award_image', 'options');
                    $date_string = get_field('event_date'); 
                    $date = DateTime::createFromFormat('Ymd', $date_string);
                ?>
                <?php if($title): ?>
                    <div class="title_wrapper">
                        <div class="title">
                            <h1><?php echo $title; ?></h1>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="bottom_wrapper">
                    <div class="bottom_row">
                        <div class="date">
                            <span><?php echo $date->format('l, F j, Y') ?></span>
                        </div>
                        <?php if($place): ?>
                            <div class="adres">
                                <?php echo $place; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if($schedule): ?>
                        <div class="bottom_row">
                            <div class="content">
                                <?php echo $schedule; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($leftButton || $rightButton): ?>
                        <div class="bottom_row">
                            <div class="btn_block">
                                <?php if($leftButton): ?>
                                    <a href="<?php echo $leftButton['url'] ?>" class="button button--white"><?php echo $leftButton['title'] ?></a>
                                <?php endif; ?>
                                <?php if($rightButton): ?>
                                <a href="<?php echo $rightButton['url']; ?>" class="button button--secondary"><?php echo $rightButton['title']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="img_block"
        style="background: left center / cover no-repeat url('<?php echo $image; ?>'), top center repeat url('/wp-content/themes/CNGC/assets/images/fill.png');">
        <?php if($top_award_image || $bottom_award_image): ?>
            <div class="right_work_img">
                <?php if($top_award_image): ?><img src="<?php echo $top_award_image; ?>" alt=""><?php endif; ?>
                <?php if($bottom_award_image): ?><img src="<?php echo $bottom_award_image ?>" alt=""><?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php if(have_rows('text_cards_list')): ?>
<section class="two_white_col section">
    <div class="container">
        <div class="main_block">
            <?php while(have_rows('text_cards_list')): the_row(); ?>
                <?php 
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $small_text = get_sub_field('small_text');
                ?>
                <div class="col">
                    <?php if($title): ?>
                        <h4><?php echo $title; ?></h4>
                    <?php endif; ?>
                    <?php if($text): ?>
                    <div class="text--size--26"><?php echo $text; ?></div>
                    <?php endif; ?>
                    <?php if($small_text): ?>
                        <?php echo $small_text; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="sponsors section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_field('sponsors_title');
                $button = get_field('sponsors_button');
            ?>
            <div class="title_wrapper">
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <div class="btn_block">
                        <a href="<?php echo $button['url']; ?>" class="button"><?php echo $button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php 
    $args = array(
        'post_type' => 'sponsors',
        'posts_per_page' => '-1'
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    ?>
        <div class="sponsors_row">
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <div class="sponsors_block">
                    <div class="img_block">
                        <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
                    </div>
                    <?php $rank = get_field('sponsor_rank') ?>
                    <div class="level_block <?php echo $rank; ?>">
                        <?php if($rank == 'heart'): ?>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99961 18.0451C-6.66672 8.8333 4.99993 -1.1667 9.99961 5.15668C14.9999 -1.1667 26.6666 8.8333 9.99961 18.0451Z"
                                    fill="#6182A2" />
                            </svg>
                        <?php else: ?>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1159_18726)">
                                    <path
                                        d="M10.4909 0.585205C15.9978 0.585205 20.4213 5.00876 20.4213 10.5156C20.4213 16.0224 15.9978 20.446 10.4909 20.446C4.9841 20.446 0.560547 16.0224 0.560547 10.5156C0.560547 5.00876 4.9841 0.585205 10.4909 0.585205Z"
                                        fill="" />
                                    <path
                                        d="M10.4916 3.29346C6.51953 3.29346 3.26953 6.54336 3.26953 10.5156C3.26953 14.4878 6.51943 17.7377 10.4916 17.7377C14.4639 17.7377 17.7138 14.4878 17.7138 10.5156C17.7138 6.54336 14.4638 3.29346 10.4916 3.29346ZM10.4916 15.9321C7.51251 15.9321 5.07511 13.4946 5.07511 10.5156C5.07511 7.53654 7.51261 5.09903 10.4916 5.09903C13.4707 5.09903 15.9082 7.53654 15.9082 10.5156C15.9082 13.4946 13.4707 15.9321 10.4916 15.9321Z"
                                        fill="#E1E7EC" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1159_18726">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5 0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        <?php endif; ?>
                        <span><?php if($rank == 'heart'){echo 'Presenting sponsor';}elseif($rank == 'silver'){echo 'Silver sponsor';}elseif($rank == 'gold'){echo 'Gold sponsor';}elseif($rank == 'bronze'){echo 'Bronze sponsor';} ?></span>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(  ); ?>
        </div>
    <?php endif; ?>
</section>
<?php 
    $title = get_field('become_sponsor_title');
    $last_card = get_field('last_card');
?>
<?php if(have_rows('become_sponsor_cards')): ?>
<section class="become_sponsor section">
    <div class="container">
        <div class="main_block">
           
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="become_sponsor_wrapper">
                <?php while(have_rows('become_sponsor_cards')): the_row(); ?>
                    <?php 
                        $sponsor_rank = get_sub_field('sponsor_rank');
                        $price = get_sub_field('price');
                        $text = get_sub_field('text');
                        $button = get_sub_field('button');
                    ?>
                    <div class="sponsors_block">
                        <?php if($sponsor_rank): ?>
                            <div class="title">
                                <p><?php echo $sponsor_rank ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($price): ?>
                            <div class="price">
                                <span><?php echo $price; ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="content">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($button): ?>
                            <div class="btn_block">
                                <a href="<?php echo $button['url']; ?>" class="button button--white"><?php echo $button['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <?php if($last_card): ?>
                    <?php if($last_card['text']): ?>
                        <div class="sponsors_block blue_block">
                                <div class="content">
                                    <div class="text--size--26"><?php echo $last_card['text']; ?></div>
                                </div>
                            <?php if($last_card['file_to_download']): ?>
                                <div class="btn_block">
                                    <a href="<?php echo $last_card['file_to_download']['url'] ?>" target="_blank" class="button button--white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="color-blue" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.14786 0H14.1719L20.9724 7.08846V20.8756C20.9724 22.6027 19.5752 24 17.854 24H6.14786C4.42073 24 3.02344 22.6027 3.02344 20.8756V3.12443C3.02341 1.3973 4.4207 0 6.14786 0V0Z"
                                                fill="" />
                                            <path class="color" opacity="0.302" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.1719 0V7.03449H20.9785L14.1719 0Z" fill="" />
                                            <path class="color"
                                                d="M6.5 17.9072V13.5234H8.36507C8.82685 13.5234 9.19267 13.6494 9.46853 13.9072C9.74439 14.1591 9.88233 14.501 9.88233 14.9267C9.88233 15.3525 9.74439 15.6944 9.46853 15.9462C9.19267 16.2041 8.82685 16.33 8.36507 16.33H7.62144V17.9072H6.5ZM7.62144 15.3765H8.23914C8.40704 15.3765 8.53898 15.3405 8.62895 15.2566C8.71889 15.1786 8.7669 15.0707 8.7669 14.9268C8.7669 14.7828 8.71892 14.6749 8.62895 14.5969C8.53901 14.513 8.40707 14.477 8.23914 14.477H7.62144V15.3765ZM10.3441 17.9072V13.5234H11.8973C12.2031 13.5234 12.491 13.5654 12.7609 13.6554C13.0307 13.7453 13.2766 13.8713 13.4925 14.0452C13.7084 14.2131 13.8823 14.441 14.0082 14.7288C14.1282 15.0167 14.1942 15.3465 14.1942 15.7183C14.1942 16.0842 14.1282 16.414 14.0082 16.7018C13.8823 16.9897 13.7084 17.2176 13.4925 17.3855C13.2766 17.5594 13.0307 17.6853 12.7609 17.7753C12.491 17.8652 12.2031 17.9072 11.8973 17.9072H10.3441ZM11.4415 16.9537H11.7654C11.9393 16.9537 12.1012 16.9358 12.2511 16.8938C12.395 16.8518 12.533 16.7858 12.6649 16.6959C12.7909 16.6059 12.8928 16.48 12.9648 16.3121C13.0367 16.1442 13.0727 15.9462 13.0727 15.7183C13.0727 15.4845 13.0367 15.2866 12.9648 15.1187C12.8928 14.9508 12.7909 14.8248 12.6649 14.7348C12.533 14.6449 12.3951 14.5789 12.2511 14.537C12.1012 14.495 11.9393 14.477 11.7654 14.477H11.4415V16.9537ZM14.7579 17.9072V13.5234H17.8763V14.477H15.8793V15.1786H17.4745V16.1261H15.8793V17.9072H14.7579Z"
                                                fill="" />
                                        </svg>
                                        Open PDF
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php 
    $image__text_block = get_field('image__text_block');
    $image = $image__text_block['image'];
    $logo_for_title = $image__text_block['logo_for_title'];
    $content = $image__text_block['content'];
    $left_button = $image__text_block['left_button'];
    $right_button = $image__text_block['right_button'];
    if($image || $logo_for_title || $content || $left_button || $right_button):
?>
<section class="two_col_img section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php if($logo_for_title): ?>
                <div class="title_wrapper">
                    <div class="title_img title">
                        <img src="<?php echo $logo_for_title; ?>" alt="">
                    </div>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <div class="col">
                    <?php if($image): ?>
                        <div class="image_block">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if($content): ?><?php echo $content; ?><?php endif; ?>
                    <?php if($left_button || $right_button): ?>
                        <div class="btn_block">
                            <?php if($left_button): ?>
                                <a href="<?php echo $left_button['url']; ?>" class="button button--secondary"><?php echo $left_button['title']; ?></a>
                            <?php endif; ?>
                            <a href="<?php echo $right_button['url']; ?>" class="button"><?php echo $right_button['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $text__img_cards = get_field('text__image_cards');
?>
<?php if($text__img_cards): ?>
<section class="involved section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $title = $text__img_cards['title'];
                $text = $text__img_cards['text'];
            ?>
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <?php if($text): ?>
                    <p class="subtitle"><?php echo $text; ?></p>
                <?php endif; ?>
                <div class="involved_wrapper">
                    <?php foreach($text__img_cards['cards_list'] as $card): ?>
                        <?php 
                            $title = $card['title'];
                            $subtitle = $card['subtitle'];
                            $text = $card['text'];
                            $button = $card['button'];
                            $image = $card['image'];
                        ?>
                        <div class="inner_block">
                            <div class="service_block">
                                <?php if($title): ?>
                                    <p><b><?php echo $title; ?></b></p>
                                <?php endif; ?>
                                <?php if($subtitle): ?>
                                    <p><?php echo $subtitle; ?></p>
                                <?php endif; ?>
                                <?php if($text): ?>
                                    <div class="text">
                                        <p><?php echo $text; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if($button): ?>
                                    <a href="<?php echo $button['url']; ?>" class="button"><?php echo $button['title']; ?></a>
                                <?php endif; ?>
                            </div>
                            <?php if($image): ?>
                                <div class="service_block img_block">
                                    <img src="<?php echo $image; ?>" alt="">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>