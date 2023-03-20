<?php


// Pattern filters
require_once 'includes/pattern-filters.php';
require_once 'includes/pattern-filters/menu.php';
require_once 'includes/pattern-filters/header.php';
require_once 'includes/pattern-filters/footer.php';
require_once 'includes/pattern-filters/hero.php';
require_once 'includes/pattern-filters/content.php';

// Register patterns
require_once 'includes/register-patterns.php';

// Downgrade functions
require_once 'includes/downgrade-functions.php';

add_action( 'wp_enqueue_scripts', 'directory_enqueue_styles' );
function directory_enqueue_styles() {
	 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}