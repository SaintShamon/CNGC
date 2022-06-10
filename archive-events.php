<?php get_header(); ?>

<?php 
$hero_banner = get_field('events_hero_banner', 'options');
if($hero_banner):
?>
<section class="inner_first_section section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="text_block">
                <?php 
                        $image = $hero_banner['events_hero_banner_image'];
                        $top_award_image = get_field('top_award_image', 'options');
                        $bottom_award_image = get_field('bottom_award_image', 'options');
                    ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h1><?php echo $hero_banner['title']; ?></h1>
                    </div>
                </div>
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
        style="background: center / cover no-repeat url('<?php echo $image; ?>'), top center repeat url('/wp-content/themes/CNGC/wp-content/themes/CNGC/assets/images/fill.png');">
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

$args = array(
    'post_type' => 'events',
    'meta_key'  => 'event_date',
	'orderby'   => 'meta_value',
	'order'     => 'ASC'
);
$query = new WP_Query( $args );

?>


<?php if($query->have_posts()): ?>
<section class="events_main section">
    <div class="container">
        <div class="main_block">
            <?php $i = 1; ?>
            <?php while($query->have_posts()): $query->the_post(); ?>
            <div class="event_block box<?php echo $i; ?>">
                <?php 
                        $date_string = get_field('event_date'); 
                        $date = DateTime::createFromFormat('Ymd', $date_string);
                        $time = get_field('event_time');
                        $link = get_field('event_link');
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
                <a href="<?php if(!empty( $link )){echo $link;}else{ the_permalink(); } ?>"></a>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php get_template_part('template-parts/global-blocks/donate'); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $cards_block = get_field('text__image_cards', 'options');
    if($cards_block):
?>
<section class="involved section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                    $title = $cards_block['title'];
                    $text = $cards_block['text'];
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
                    <?php foreach($cards_block['cards_list'] as $card): ?>
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