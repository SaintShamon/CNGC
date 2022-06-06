<?php 
$type = get_sub_field('type');
$title = get_sub_field('title');
$button = get_sub_field('button');

$args = array(
    'post_type' => 'sponsors',
    'posts_per_page' => '-1'
);
$the_query = new WP_Query($args);

if($type == 'Slider' && $the_query->have_posts()):
?>
<section class="sponsors section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php if($title || $button): ?>
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
            <?php endif; ?>
        </div>
    </div>
    <div class="sponsors_row">
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
                </div>
                <?php $rank = get_field('sponsor_rank'); ?>
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
</section>
<?php elseif($type == 'List' && $the_query->have_posts()): ?>
<section class="all_sponsors section">
    <div class="container">
        <div class="main_block">
            <?php if($title || $button): ?>
                <div class="title_wrapper">
                    <?php if($title): ?>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if($button): ?>
                        <div class="btn_block">
                            <a href="<?php echo $button['url']; ?>" class="button button--secondary"><?php echo $button['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <div class="sponsors_row">
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <?php $rank = get_field('sponsor_rank'); ?>
                        <div class="sponsors_block">
                            <?php if(!empty(get_the_post_thumbnail_url())): ?>
                                <div class="img_block">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                </div>
                            <?php endif; ?>
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
                    <?php endwhile; wp_reset_postdata(); ?>
                    
                    <div class="sponsors_block last_block">
                        <div class="img_block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sponsors/sponsor_your_company.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>