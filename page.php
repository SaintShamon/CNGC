<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNGC
 */

get_header();
    if ( ! post_password_required() ) :
        // Your custom code should here
        get_template_part('template-parts/page/content','page');
        the_acf_loop();
    else :
      // we will show password form here
      echo get_the_password_form();
    endif;
get_footer();
