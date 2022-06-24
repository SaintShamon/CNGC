<section class="volonteer_main section">
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $left_text_col = get_sub_field('left_text_col');
                $right_text_col = get_sub_field('right_text_col');
                $image = get_sub_field('image');
                $donate_card_title = get_sub_field('donate_card_title');
                $donate_card_text = get_sub_field('donate_card_text');
                $donate_card_button = get_sub_field('donate_card_button');
            ?>
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <?php if($left_text_col || $right_text_col): ?>
                    <div class="top_row">
                        <?php if($left_text_col): ?>
                            <div class="col">
                                <?php echo $left_text_col; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($right_text_col): ?>
                            <div class="col">
                               <?php echo $right_text_col; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="center_row">
                    <?php if($image): ?>
                        <div class="volonteer_block_img box_img"
                            style="background: center / cover no-repeat url('<?php echo $image; ?>');">
                        </div>
                    <?php endif; ?>
                    <?php if($donate_card_title || $donate_card_text || $donate_card_button): ?>
                        <div class="volonteer_block box1 blue_box">
                            <?php if($donate_card_title): ?>
                                <p class="text--size--26"><b><?php echo $donate_card_title; ?></b></p>
                            <?php endif; ?>
                            <?php if($donate_card_text): ?>
                                <?php echo $donate_card_text; ?>
                            <?php endif; ?>
                            <?php if($donate_card_button): ?>
                                <div class="btn_block">
                                    <a href="<?php echo $donate_card_button['url']; ?>" class="button button--white"><?php echo $donate_card_button['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(have_rows('volunteer_cards')): ?>
                        <?php 
                            $i = 2;
                            while(have_rows('volunteer_cards')): the_row();
                            $title = get_sub_field('card_title');
                            $text = get_sub_field('card_text');
                            $info_text = get_sub_field('card_info_text');
                        ?>
                            <div class="volonteer_block box<?php echo $i ?>">
                                <?php if($title): ?>
                                    <p class="text--size--26"><b><?php echo $title; ?></b></p>
                                <?php endif; ?>
                                <?php if($text): ?>
                                    <?php echo $text; ?>
                                <?php endif; ?>
                                <?php if($info_text): ?>
                                    <div class="down_block">
                                        <?php echo $info_text; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

