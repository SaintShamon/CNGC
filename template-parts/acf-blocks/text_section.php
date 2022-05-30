<section class="text_section section">
    <div class="container">
        <div class="main_block content-block">
            <?php 
                $title = get_sub_field('title');
                $text = get_sub_field('text');
            ?>
            <?php if($title): ?>
            <div class="title_wrapper">
                <div class="title">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
            <?php endif; ?>
            <?php if($text): ?>
            <div class="content_wrapper">
                <?php echo $text; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>