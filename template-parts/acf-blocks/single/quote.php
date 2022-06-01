<?php 
$name = get_sub_field('author_name');
$position = get_sub_field('position');
$quote = get_sub_field('quote_text');
?>
<blockquote> 
    <?php if($name): ?>
        <p><?php echo $name; ?></p> 
    <?php endif; ?>
    <?php if($position): ?>
        <p><?php echo $position; ?></p> 
    <?php endif; ?>
    <?php if($quote){echo $quote;} ?>
</blockquote>