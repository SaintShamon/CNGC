<section class="mission section">
    <div class="section-bg"></div>
    <div class="container">
        <?php 
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $image = get_sub_field('image');
        ?>
        <div class="main_block">
            <div class="col">
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($text || $image): ?>
            <div class="col">
                <?php echo $text; ?>
                <?php if($image): ?>
                    <img src="<?php echo $image; ?>" alt="">
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>