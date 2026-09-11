<?php
/**
 * Template Name: Amigos da EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_amigos]');
get_footer();
