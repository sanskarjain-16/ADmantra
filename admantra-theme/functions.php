<?php
/**
 * Admantra Media Theme Functions and Definitions
 *
 * @package Admantra
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function admantra_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Support custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'admantra' ),
        'footer'  => __( 'Footer Navigation', 'admantra' ),
    ) );

    // HTML5 markup support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Declare full Elementor support
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'admantra_setup' );

/**
 * Enqueue scripts and styles.
 */
function admantra_scripts() {
    // Google Fonts - Plus Jakarta Sans
    wp_enqueue_style( 'admantra-google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap', array(), null );

    // Google Material Symbols
    wp_enqueue_style( 'admantra-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

    // Theme main stylesheet
    wp_enqueue_style( 'admantra-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Tailwind CSS CDN with Forms & Container Queries plugins
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), '3.4.0', false );

    // Inline Tailwind Theme Configuration Script
    $tailwind_config = "
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            'surface-container-low': '#f2f3ff',
            'secondary-fixed-dim': '#cbbeff',
            'on-secondary-fixed-variant': '#4c00d3',
            'on-tertiary-fixed': '#3d0600',
            'inverse-primary': '#bac3ff',
            'on-error': '#ffffff',
            'primary': '#002eca',
            'error-container': '#ffdad6',
            'surface-dim': '#d4d9ef',
            'on-surface': '#151b2a',
            'secondary-fixed': '#e7deff',
            'primary-fixed': '#dee0ff',
            'on-primary-fixed': '#00105c',
            'on-tertiary': '#ffffff',
            'surface-variant': '#dce2f7',
            'on-surface-variant': '#444657',
            'surface-bright': '#faf8ff',
            'on-background': '#151b2a',
            'surface-container-lowest': '#ffffff',
            'surface-container': '#e9edff',
            'surface-container-highest': '#dce2f7',
            'surface': '#faf8ff',
            'background': '#faf8ff',
            'secondary-container': '#6c38ff',
            'secondary': '#5300e6',
            'tertiary-fixed': '#ffdad3',
            'on-secondary-fixed': '#1e0060',
            'on-secondary': '#ffffff',
            'on-primary-fixed-variant': '#002eca',
            'on-primary': '#ffffff',
            'primary-fixed-dim': '#bac3ff',
            'tertiary-fixed-dim': '#ffb4a4',
            'tertiary': '#8c1800',
            'inverse-on-surface': '#eef0ff',
            'surface-container-high': '#e2e7fd',
            'surface-tint': '#1242ff',
            'on-secondary-container': '#e8e0ff',
            'on-tertiary-container': '#ffcdc2',
            'tertiary-container': '#b72301',
            'outline-variant': '#c4c5da',
            'error': '#ba1a1a',
            'on-tertiary-fixed-variant': '#8c1800',
            'inverse-surface': '#2a3040',
            'on-error-container': '#93000a',
            'outline': '#747689',
            'on-primary-container': '#d1d6ff',
            'primary-container': '#1242ff'
          },
          fontFamily: {
            sans: ['\"Plus Jakarta Sans\"', 'sans-serif'],
            body: ['\"Plus Jakarta Sans\"', 'sans-serif']
          }
        }
      }
    };
    ";
    wp_add_inline_script( 'tailwind-cdn', $tailwind_config, 'after' );
}
add_action( 'wp_enqueue_scripts', 'admantra_scripts' );

/**
 * Register Elementor full-width and canvas template locations if supported.
 */
function admantra_elementor_support() {
    add_post_type_support( 'page', 'elementor' );
}
add_action( 'init', 'admantra_elementor_support' );
