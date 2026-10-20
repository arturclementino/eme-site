<?php
/**
 * Template Name: FAQ EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_faq]');
get_footer();
