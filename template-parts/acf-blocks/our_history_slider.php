<?php 
    $title = get_sub_field('title');
?>
<?php if(have_rows('history_slider')): ?>
<section class="history section">
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
            <div class="content_wrapper history_row">
                <?php while(have_rows('history_slider')): the_row(); ?>
                    <?php 
                        $year = get_sub_field('year');
                        $content = get_sub_field('content');
                    ?>
                    <div class="history_block">
                        <?php if($year): ?>
                            <h3><?php echo $year; ?></h3>
                        <?php endif; ?>
                        <?php if($content): ?>
                            <div class="content_block">
                                <?php echo $content; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>