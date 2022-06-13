<?php get_header(); ?>
<?php 
    $banner = get_field('programs_page_banner', 'options');
    if($banner):
?>
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
        style="background: center / cover no-repeat url('<?php echo $image; ?>'), top center repeat url('/wp-content/themes/CNGC/assets/images/fill.png');">
        <?php if($top_award_image || $bottom_award_image): ?>
        <div class="right_work_img">
            <?php if($top_award_image): ?><img src="<?php echo $top_award_image; ?>" alt=""><?php endif; ?>
            <?php if($bottom_award_image): ?><img src="<?php echo $bottom_award_image ?>" alt=""><?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php 
    $donate_block = get_field('programs_white_donate_block', 'options');
?>
<?php if($donate_block): ?>
<section class="programs_white_section section">
    <div class="container">
        <div class="main_block">
            <?php 
                $content = $donate_block['content'];
                $small_text = $donate_block['small_text'];
                $pdf_file = $donate_block['pdf_file'];
                $donate_button = $donate_block['donate_button'];
            ?>
            <?php if($content): ?>
            <div class="text--size--26">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
            <div class="bottom_block">
                <?php if($small_text): ?>
                <?php endif; ?>
                <?php if($pdf_file): ?>
                <a href="<?php echo $pdf_file['url'];  ?>" class="button button--secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <?php endif; ?>
                <?php if($donate_button): ?>
                <a href="<?php echo $donate_button['url']; ?>"
                    class="button button--white"><?php echo $donate_button['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $programs = get_field('our_programs', 'options');
    $title = $programs['title'];
    $left_text = $programs['left_column_text'];
    $right_text = $programs['right_column_text'];
?>
<section class="our_programs section">
    <div class="container">
        <div class="main_block">
            <?php if($title): ?>
            <div class="title_wrapper">
                <div class="title">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <?php if($left_text || $right_text): ?>
                <div class="top_row">
                    <?php if($left_text): ?>
                    <div class="col">
                        <div class="text--size--26">
                            <?php echo $left_text; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($right_text): ?>
                    <div class="col">
                        <div class="text--size--26">
                            <?php echo $right_text; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php 
                    $args = array(
                        'post_type' => 'programs',
                        'posts_per_page' => -1,
                    );
                    $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                <div class="programs_list" id="programs_list">
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
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
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php 
    $imageTextBlcok = get_field('programs_image__text_block', 'options');
?>
<?php if($imageTextBlcok): ?>
<section class="recovery section">
    <div class="section-bg"></div>
    <?php 
        $image = $imageTextBlcok['image'];
        $title = $imageTextBlcok['title'];
        $small_text = $imageTextBlcok['small_text'];
        $subtitle = $imageTextBlcok['subtitle'];
    ?>
    <div class="container">
        <div class="main_block">
            <?php if($title): ?>
            <div class="title_wrapper">
                <div class="title">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <?php if($image): ?>
                <div class="col">
                    <div class="image_block">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <div class="col">
                    <?php if($subtitle): ?>
                    <p class="text--size--26"><b><?php echo $subtitle; ?></b></p>
                    <?php endif; ?>
                    <?php if($small_text): ?>
                    <div class="date text--size--16">
                        <?php echo $small_text; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $cards = get_field('support_groups_cards', 'options');
?>
<?php if($cards): ?>
<section class="support_group section">
    <div class="container">
        <div class="main_block">
            <?php 
                $title = $cards['title'];
                $text = $cards['text'];
                $cards = $cards['cards']
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
                <div class="top_row">
                    <p class="text--size--26"><?php echo $text; ?></p>
                </div>
                <?php endif; ?>
                <div class="support_list">
                    <?php foreach($cards as $card): ?>
                    <?php 
                            $title = $card['title'];
                            $text = $card['text'];     
                            $image = $card['image'];     
                            $button = $card['button'];     
                        ?>
                    <div class="support_block">
                        <?php if($image): ?>
                        <div class="img_block">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                        <?php endif; ?>
                        <div class="content_block">
                            <?php if($title): ?>
                            <h3 class="text--size--26"><?php echo $title; ?></h3>
                            <?php endif; ?>
                            <?php if($text): ?>
                            <p class="text--size--26"><?php echo $text; ?></p>
                            <?php endif; ?>
                            <?php if($button): ?>
                            <div class="btn_block">
                                <a href="<?php echo $button['url'] ?>"
                                    class="button white--button"><?php echo $button['title']; ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>