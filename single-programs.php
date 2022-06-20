<?php get_header(); ?>
<?php $banner = get_field('hero_banner'); ?>
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
                    $font_size = $banner['decrease_font_size'];
                ?>
                <?php if($title): ?>
                    <div class="title_wrapper<?php if($font_size == true){echo ' sm_font_size';} ?>">
                        <div class="title h1">
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
$two_col_text = get_field('two_columns_text');
?>
<?php if($two_col_text): ?>
<section class="two_col_text section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $left_column_text = $two_col_text['left_column_text'];
                $right_column_text = $two_col_text['right_column_text'];
            ?>
            <div class="content_wrapper <?php if(empty($left_column_text) || empty($right_column_text)){echo 'full_width_col';} ?>">
                <?php if($left_column_text): ?>
                    <div class="col content-block">
                        <div class="text--size--26">
                            <?php echo $left_column_text; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($right_column_text): ?>
                    <div class="col content-block">
                        <div class="text--size--26">
                            <?php echo $right_column_text ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php 
$two_col_text__image = get_field('two_columns_text__image');
$title = $two_col_text__image['title'];
$image = $two_col_text__image['image'];
$left_column_text = $two_col_text__image['left_column_text'];
$right_column_text = $two_col_text__image['right_column_text'];
?>
<?php if($two_col_text__image && $left_column_text || $right_column_text): ?>
<section class="our_services section">
    <div class="section-bg"></div>
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
                <?php if($left_column_text): ?>
                    <div class="col content-block text--size--26">
                       <?php echo $left_column_text; ?>
                    </div>
                <?php endif; ?>
                <?php if($right_column_text): ?>
                    <div class="col content-block">
                       <?php echo $right_column_text; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($image && false): ?>
            <div class="image_center_block">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 

$blue_block = get_field('blue_block');
$title = $blue_block['title'];
$text = $blue_block['text'];
?>
<?php if($title || $text): ?>
<section class="mission section">
    <div class="section-bg"></div>
    <?php 
        
    ?>
    <div class="container">
        <div class="main_block">
            <?php if($title): ?>
                <div class="col">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($text): ?>
                <div class="col">
                    <?php echo $text; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $text_block = get_field('text_block_wrapper');
    $text_block = $text_block['text_block'];
?>
<?php if(!empty($text_block)): ?>
<section class="text_block">
    <div class="container">
        <div class="content-block">
            <?php echo $text_block; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
$text__white_background = get_field('text_with_white_background');

$title = $text__white_background['block_title'];
$text = $text__white_background['block_subtitle'];
$white_block_text = $text__white_background['white_block_text'];
$white_block_small_text = $text__white_background['white_block_small_text'];
$right_side_text = $text__white_background['right_side_text'];
$right_side_small_text = $text__white_background['right_side_small_text'];


if($text || $white_block_text || $right_side_text):

?>
<section class="refferal section">
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
                <?php if($text): ?>
                    <div class="top_row text--size--26">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
                <div class="center_row">
                    <div class="col_left">
                        <?php if($white_block_text): ?>
                            <div class="text--size--26">
                                <?php echo $white_block_text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($white_block_small_text): ?>
                            <div class="down_block">
                                <?php echo $white_block_small_text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col_right">
                        <?php if($right_side_text): ?>
                            <div class="text--size--26">
                                <?php echo $right_side_text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($right_side_small_text): ?>
                            <div class="tel_block">
                                <?php echo $right_side_small_text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>