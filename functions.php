<?php

/**
 * Theme customizations
 *
 * @package      GeezLouise! Studio
 * @author       Greta Louise Anderson
 * @link         http://www.geezlouisestuidio.com
 * @copyright    Copyright (c) 2016, Greta Anderson
 * @license      GPL-2.0+
 */


add_action( 'wp_enqueue_scripts', 'parent_theme_styles' );
function parent_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Load child theme textdomain.
load_child_theme_textdomain( 'geez' );

