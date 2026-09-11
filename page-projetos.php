<?php
/**
 * Template Name: Projetos EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_projetos]');
get_footer();
