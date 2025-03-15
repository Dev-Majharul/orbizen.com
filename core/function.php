<?php

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/**
 * URL and Path Functions
 */

function get_site_url() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'];
}

function get_current_url() {
    return get_site_url() . $_SERVER['REQUEST_URL'];
}

function get_theme_file_url($path = '') {
    return get_site_url() . '/' . ltrim($path, '/');
}

/**
 * Template Functions
 */

 function get_template($template) {
    $file = ABSPATH . '/core/' . $template . '.php';
    if (file_exists($file)) {
        include $file;
    }
}
