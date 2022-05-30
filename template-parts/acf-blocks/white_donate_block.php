<section class="donate_white section">
    <div class="container">
        <div class="main_block">
            <?php 
                $text = get_sub_field('text');
                $button = get_sub_field('button');
                $small_text_left_column = get_sub_field('small_text_left_column');
                $small_text_right_column = get_sub_field('small_text_right_column');
            ?>
            <?php if($text): ?>
                <div class="text--size--26"><?php echo $text; ?></div>
            <?php endif; ?>
            <div class="donate_wrap">
                <?php if($small_text_left_column): ?>
                    <div class="donate_col">
                        <?php echo $small_text_left_column; ?>
                    </div>
                <?php endif; ?>
                <?php if($small_text_right_column): ?>
                    <div class="donate_col">
                        <?php echo $small_text_right_column; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($button): ?>
                <a href="<?php echo $button['url']; ?>" class="button button--secondary"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>