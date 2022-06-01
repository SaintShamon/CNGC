<?php
/**
 * CNGC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CNGC
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


add_action('wp_ajax_filter', 'filter_post_asb');
add_action('wp_ajax_nopriv_filter', 'filter_post_asb');

require get_template_directory().'/inc/theme-setup.php';
require get_template_directory().'/inc/theme-support.php';
require get_template_directory().'/inc/theme-cleanup.php';
require get_template_directory().'/inc/theme-enqueue.php';

require get_template_directory().'/inc/custom-post-types.php';
require get_template_directory().'/inc/custom-taxonomies.php';

require get_template_directory().'/inc/acf.php';
require get_template_directory().'/inc/theme-functions.php';
require get_template_directory().'/inc/theme-components.php';
require get_template_directory().'/inc/theme-shortcodes.php';
require get_template_directory().'/inc/theme-ajax.php';
require get_template_directory().'/inc/theme-year-filter.php';

