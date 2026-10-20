<?php
/**
 * WordPress Stubs for IDE, Intelephense and Static Analysis
 * These stubs are only loaded in static analysis / IDE environment if WordPress is not active.
 */

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

if (!function_exists('esc_url')) {
    function esc_url($url, $protocols = null, $_context = 'display') { return (string)$url; }
}
if (!function_exists('esc_html')) {
    function esc_html($text) { return (string)$text; }
}
if (!function_exists('esc_attr')) {
    function esc_attr($text) { return (string)$text; }
}
if (!function_exists('home_url')) {
    function home_url($path = '', $scheme = null) { return (string)$path; }
}
if (!function_exists('admin_url')) {
    function admin_url($path = '', $scheme = 'admin') { return (string)$path; }
}
if (!function_exists('add_shortcode')) {
    function add_shortcode($tag, $callback) {}
}
if (!function_exists('do_shortcode')) {
    function do_shortcode($content, $ignore_html = false) { return (string)$content; }
}
if (!function_exists('add_action')) {
    function add_action($hook_name, $callback, $priority = 10, $accepted_args = 1) {}
}
if (!function_exists('add_filter')) {
    function add_filter($hook_name, $callback, $priority = 10, $accepted_args = 1) {}
}
if (!function_exists('add_theme_support')) {
    function add_theme_support($feature, ...$args) {}
}
if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style($handle, $src = '', $deps = [], $ver = false, $media = 'all') {}
}
if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script($handle, $src = '', $deps = [], $ver = false, $in_footer = false) {}
}
if (!function_exists('wp_localize_script')) {
    function wp_localize_script($handle, $object_name, $l10n) { return true; }
}
if (!function_exists('get_stylesheet_directory_uri')) {
    function get_stylesheet_directory_uri() { return ''; }
}
if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri() { return ''; }
}
if (!function_exists('wp_send_json_success')) {
    function wp_send_json_success($data = null, $status_code = null, $options = 0) { exit; }
}
if (!function_exists('wp_send_json_error')) {
    function wp_send_json_error($data = null, $status_code = null, $options = 0) { exit; }
}
if (!function_exists('wp_mail')) {
    function wp_mail($to, $subject, $message, $headers = '', $attachments = []) { return true; }
}
if (!function_exists('sanitize_text_field')) {
    function sanitize_text_field($str) { return (string)$str; }
}
if (!function_exists('sanitize_email')) {
    function sanitize_email($email) { return (string)$email; }
}
if (!function_exists('sanitize_textarea_field')) {
    function sanitize_textarea_field($str) { return (string)$str; }
}
if (!function_exists('wp_unslash')) {
    function wp_unslash($value) { return $value; }
}
if (!function_exists('get_header')) {
    function get_header($name = null, $args = []) {}
}
if (!function_exists('get_footer')) {
    function get_footer($name = null, $args = []) {}
}
if (!function_exists('have_posts')) {
    function have_posts() { return false; }
}
if (!function_exists('the_post')) {
    function the_post() {}
}
if (!function_exists('the_content')) {
    function the_content($more_link_text = null, $strip_teaser = false) {}
}
if (!function_exists('the_title')) {
    function the_title($before = '', $after = '', $echo = true) {}
}
if (!function_exists('get_the_ID')) {
    function get_the_ID() { return 0; }
}
if (!function_exists('is_front_page')) {
    function is_front_page() { return false; }
}
if (!function_exists('is_home')) {
    function is_home() { return false; }
}
if (!function_exists('is_page')) {
    function is_page($page = '') { return false; }
}
if (!function_exists('wp_head')) {
    function wp_head() {}
}
if (!function_exists('wp_footer')) {
    function wp_footer() {}
}
if (!function_exists('language_attributes')) {
    function language_attributes($doctype = 'html') {}
}
if (!function_exists('bloginfo')) {
    function bloginfo($show = '') {}
}
if (!function_exists('body_class')) {
    function body_class($class = '') {}
}
