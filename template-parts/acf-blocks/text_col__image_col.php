<?php 
    $position = get_sub_field('text_position');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
    $button = get_sub_field('button');
    $bordered_button = get_sub_field('bordered_button');
?>
<?php if($position == 'Left'): ?>
<section class="understand section">
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
                <?php if($text || $button): ?>
                    <div class="col">
                        <?php if($text): ?>
                            <?php echo $text; ?>
                        <?php endif; ?>
                        <?php if($button): ?>
                            <a href="<?php echo $button['url']; ?>" class="button button--secondary"><?php echo $button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="col">
                    <?php if($image): ?>
                        <div class="image_block">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php elseif($position == 'Right'): ?>
<section class="recovery section">
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
                <?php if($image): ?>
                    <div class="col">
                        <div class="image_block">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($text || $button): ?>
                    <div class="col">
                        <div class="content-block"><?php if($text){ echo $text; } ?></div>
                        <?php if($button || $blue_button): ?>
                            <div class="btn_block">
                                <?php if($button): ?>
                                    <a href="<?php echo $button['url']; ?>" class="button button--secondary"><?php echo $button['title']; ?></a>
                                <?php endif; ?>
                                <?php if($bordered_button): ?>
                                    <a href="<?php echo $bordered_button['url']; ?>" class="button"><?php echo $bordered_button['title']; ?></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>