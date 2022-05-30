<section class="issue_big_white section">
    <div class="container">
        <div class="main_block content-block">
            <?php 
                $title = get_sub_field('title');
                $text = get_sub_field('text');
            ?>
            <?php if($title): ?>
                <h3><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if($text): ?>
                <?php echo $text; ?>
            <?php endif; ?>
        </div>
    </div>
</section>