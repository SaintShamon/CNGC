<section class="blue_col_img_col section">
    <div class="container">
        <div class="main_block">
            <?php 
                $image = get_sub_field('image');
                $donate_title = get_sub_field('donate_block_title');
                $donate_text = get_sub_field('donate_block_text');
                $donate_small_text = get_sub_field('donate_block_small_text');
                $donate_button = get_sub_field('donate_block_button');
            ?>
            <?php if($image): ?>
                <div class="col img_col"
                    style="background: center / cover no-repeat url('<?php echo $image; ?>'), top center repeat url('/assets/images/fill.png');">
                </div>
            <?php endif; ?>
            <div class="col">
                <?php if($donate_title): ?>
                    <h4><?php echo $donate_title; ?></h4>
                <?php endif; ?>
                <?php if($donate_text): ?>
                <div class="text--size--26"><?php echo $donate_text; ?></div>
                <?php endif; ?>
                <?php if($donate_small_text): ?>
                    <?php echo $donate_small_text; ?>
                <?php endif; ?>
                <?php if($donate_button): ?>
                    <div class="btn_block">
                        <a href="<?php echo $donate_button['url']; ?>" class="button button--white"><?php echo $donate_button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>