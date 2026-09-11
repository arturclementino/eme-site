<?php
/**
 * Template Name: Front Page EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_home]');
get_footer();
