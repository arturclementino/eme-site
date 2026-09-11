<?php
/**
 * Template Name: Galeria EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_galeria]');
get_footer();
