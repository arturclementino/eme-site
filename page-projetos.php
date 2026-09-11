<?php
/**
 * Template Name: Projetos EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_amigos]');
get_footer();
