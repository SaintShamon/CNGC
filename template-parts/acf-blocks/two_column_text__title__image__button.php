<section class="alone section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $button = get_sub_field('button');
                $image = get_sub_field('image');
                $left_text = get_sub_field('left_text');
                $right_text = get_sub_field('right_text');
            ?>
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
            <?php if($right_text || $left_text): ?>
                <div class="content_wrapper">
                    <?php if($left_text): ?>
                        <div class="col">
                            <?php echo $left_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($right_text): ?>
                        <div class="col">
                            <?php echo $right_text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if($image): ?>
                <div class="image_center_block">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>