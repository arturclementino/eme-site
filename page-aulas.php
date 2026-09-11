<?php
/**
 * Template Name: Aulas EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_cursos]');
get_footer();
