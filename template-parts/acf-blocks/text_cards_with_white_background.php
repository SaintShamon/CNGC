<?php if(have_rows('cards')): ?>
    <section class="gift_white_cols section">
        <div class="container">
            <div class="main_block">
                <?php while(have_rows('cards')): the_row(); ?>
                    <?php 
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                    ?>
                    <div class="col content-block">
                        <?php if($title): ?>
                        <p class="text--size--26"><b><?php echo $title; ?></b></p>
                        <?php endif; ?>
                        <?php if($text): ?>
                           <?php echo $text; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>