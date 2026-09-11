<?php
/**
 * Template Name: Professores EME
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
echo do_shortcode('[eme_professores]');
get_footer();
