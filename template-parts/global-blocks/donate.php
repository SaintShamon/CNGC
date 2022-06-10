<?php 
$donate_block = get_field('donate_block', 'options'); 
if($donate_block):
    $title = $donate_block['title'];
    $text = $donate_block['text'];
    $small_text = $donate_block['small_text'];
    $button = $donate_block['button']; ?>

    <div class="event_block_blue box_blue">
        <?php if($title): ?><p><b><?php echo $title; ?></b></p><?php endif; ?>

        <?php if($text): ?>
            <?php echo $text; ?>
        <?php endif; ?>

        <?php if($small_text): ?>
            <p class="small_text"><?php echo $small_text; ?></p>
        <?php endif; ?>
        
        <?php if($button): ?>
            <a href="<?php echo $button['url']; ?>" class="button"><?php echo $button['title']; ?></a>
        <?php endif; ?>
    </div>

<?php endif; ?>