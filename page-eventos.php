<?php
/**
 * Template Name: Eventos EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_eventos]');
get_footer();
