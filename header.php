<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(  ) ?>>
    <div class="overlay"></div>
    <div class="site">
        <?php echo get_template_part('template-parts/header/header'); ?>
        <main id="main">