<div class="news_block" <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="display: flex; flex-direction: column;"<?php endif; ?>>
    <?php if(!empty(get_the_post_thumbnail_url(  ))): ?>
        <div class="img_block">
            <img src="<?php the_post_thumbnail_url(  ); ?>" alt="">
        </div>
    <?php endif; ?>
    <div class="inner_block" <?php if(empty(get_the_post_thumbnail_url(  ))): ?>style="margin-top: auto;"<?php endif; ?>>
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
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
    <a href="<?php the_permalink(); ?>"></a>
</div>