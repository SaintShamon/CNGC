<section class="involved section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $text = get_sub_field('text');
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
                <?php if(have_rows('cards')): ?>
                    <div class="involved_wrapper">
                        <?php while(have_rows('cards')): the_row(); ?>
                            <?php 
                                $title = get_sub_field('title');
                                $subtitle = get_sub_field('subtitle');
                                $text = get_sub_field('text');
                                $button = get_sub_field('button');
                                $image = get_sub_field('image');
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
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
