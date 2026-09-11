<?php
/**
 * Template Name: Page EME Fallback
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $slug = get_post_field('post_name', get_the_ID());

        switch ($slug) {
            case 'home':
                echo do_shortcode('[eme_home]');
                break;
            case 'contato':
                echo do_shortcode('[eme_contato]');
                break;
            case 'professores':
                echo do_shortcode('[eme_professores]');
                break;
            case 'quem-somos':
                echo do_shortcode('[eme_quemsomos]');
                break;
            case 'eventos':
                echo do_shortcode('[eme_eventos]');
                break;
            case 'galeria':
                echo do_shortcode('[eme_galeria]');
                break;
            case 'aulas':
            case 'cursos':
                echo do_shortcode('[eme_cursos]');
                break;
            default:
                the_content();
                break;
        }
    }
} else {
    echo do_shortcode('[eme_home]');
}

get_footer();
