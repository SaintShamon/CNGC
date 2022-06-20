<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CNGC
 */

get_header(); ?>
<section class="inner_first_section article_first_section section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <div class="text_block" <?php if (!$image) : echo 'style="max-width: 100%;"'; endif;?>>
                <?php 
                    $title = get_field('banner_title');
                    $image = get_field('banner_image');
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
                <div class="bottom_wrapper">
                    <div class="bottom_row">
                        <div class="date">
                            <span><?php echo get_the_date('F j, Y') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img_block"
        style="background: center / cover no-repeat url('<?php echo $image; ?>')">
        <?php if($top_award_image || $bottom_award_image): ?>
            <div class="right_work_img">
                <?php if($top_award_image): ?><img src="<?php echo $top_award_image; ?>" alt=""><?php endif; ?>
                <?php if($bottom_award_image): ?><img src="<?php echo $bottom_award_image ?>" alt=""><?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="article_section section">
    <div class="container">
        <div class="main_block">
            <div class="breadcrumbs_block">
                <a href="<?php echo get_post_type_archive_link( 'post' ); ?>">Back to all news</a>
            </div>
            <div class="content_wrapper content-block">
                <div class="main_content ">
                    <?php the_single_acf_loop() ?>
                </div>
                <div class="sidebar_block">
                    <aside>
                        <h2 class="h3">Latest News</h2>
						<?php 
						$id = get_the_ID();
						$args = array(
							'post_type' => 'post',
							'orderby' => 'date',
							'posts_per_page' => 3,
							'order'     =>'DESC',
							'post__not_in' => array($id),
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
						?>
                        <div class="latest_post">
								<?php while($the_query->have_posts()): $the_query->the_post(); ?>
									<div class="news_block">
										<?php if(!empty(get_the_post_thumbnail_url())): ?>
										<div class="img_block">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="">
										</div>
										<?php endif; ?>
										<div class="inner_block">
											<div class="date_block">
												<span><?php echo get_the_date('F j, Y') ?></span>
											</div>
											<div class="title_block">
												<?php 
													$post_title = get_the_title();
													if(!empty(get_the_post_thumbnail_url(  ))){
														$max = 79;
													}
													else{
														$max = 49;
													}
													if (strlen($post_title) > $max)
													$post_title = substr($post_title, 0, $max - 3) . '...';
												?>
												<h3><?php echo $post_title; ?></h3>
											</div>
											<div class="except_block">
												<?php the_excerpt(); ?>
											</div>
										</div>
										<a href="<?php the_permalink(); ?>"></a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						<?php endif; ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
	$link_cards = get_field('article_page_link_cards', 'options');
?>
<?php if($link_cards): ?>
<section class="userful_links section">
    <div class="container">
        <div class="main_block">
			<?php 
				$title = $link_cards['link_cards_block_title'];
				$cards = $link_cards['link_cards'];
			?>
			<?php if($title): ?>
				<div class="title_wrapper">
					<div class="title">
						<h2><?php echo $title; ?></h2>
					</div>
				</div>
			<?php endif; ?>
            <div class="content_wrapper">
                <div class="links_row">
					<?php foreach($cards as $card): ?>
						<?php 
							$title = get_sub_field('card_title');
							$button = get_sub_field('button');
						?>
						<div class="links_col">
							<?php if($title): ?>
								<h3><?php echo $title; ?></h3>
							<?php endif; ?>
							<?php if($button): ?>
								<a href="<?php echo $button['url']; ?>" class="button button--icon_right"><?php echo $button['title']; ?>
									<svg width="10" height="16" viewBox="0 0 10 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M2.43937 7.75746L0.875631 1.50252C0.629645 0.518582 1.83571 -0.164287 2.55288 0.552877L9.29289 7.29289C9.68342 7.68342 9.68342 8.31658 9.29289 8.70711L2.55288 15.4471C1.83572 16.1643 0.629645 15.4814 0.87563 14.4975L2.43937 8.24254C2.47918 8.0833 2.47918 7.9167 2.43937 7.75746Z"
											fill="#084074" />
									</svg>
								</a>
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
