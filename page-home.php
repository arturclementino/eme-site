<?php
/**
 * Template Name: Home EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_home]');
get_footer();
