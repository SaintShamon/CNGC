<section class="col_text_col_white section">
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $white_block_title = get_sub_field('white_block_title');
                $white_block_text = get_sub_field('white_block_text');
                $white_block_button = get_sub_field('white_block_button');
            ?>
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <div class="col content-block">
                    <?php echo $text; ?>
                </div>
                <div class="col white_block">
                    <?php if($white_block_title): ?>
                        <p class="text--size--26"><b><?php echo $white_block_title; ?></b></p>
                    <?php endif; ?>
                    <?php if($white_block_text): ?>
                        <?php echo $white_block_text; ?>
                    <?php endif; ?>
                    <?php if($white_block_button): ?>
                        <div class="btn_block">
                            <a href="<?php echo $white_block_button['url']; ?>" class="button button--secondary"><?php echo $white_block_button['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>