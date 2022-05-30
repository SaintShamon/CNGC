<section class="two_col_text section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $left_text_column = get_sub_field('left_text_column');
                $right_text_column = get_sub_field('right_text_column');
            ?>
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2>Some of the key problems</h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($left_text_column || $right_text_column): ?>
                <div class="content_wrapper">
                    <?php if($left_text_column): ?>
                        <div class="col content-block">
                            <?php echo $left_text_column;  ?>
                        </div>
                    <?php endif; ?>
                    <?php if($right_text_column): ?>
                        <div class="col content-block">
                            <?php echo $right_text_column; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>