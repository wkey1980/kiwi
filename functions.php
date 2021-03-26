<?php
/**
 * Template to display packageTitle
 * 
 * packageDescription
 * 
 * @package kiwi
 */
?>

<?php

define( 'KIWI_THEME_DIR', get_template_directory() );
define( 'KIWI_THEME_URI', get_template_directory_uri() );

if ( ! function_exists( 'kiwi_setup' ) ): 
    function kiwi_setup() {
        load_theme_textdomain( 'kiwi', KIWI_THEME_DIR . '/Languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );
        add_image_size( 'kiwi-large', 500, 400, true ); // width, height, crop

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        // Custom header, custom background, custom logo
        $header_width  = 100;
        $header_height  = 100;
        add_theme_support(
            'custom-header',
            apply_filters( 'kiwi_custom_header_args',
            array(
                'default-color' => 'ffffff',   // Customize > Colors > Header Text Color
                'default-image' => '',
                'width'         => $header_width,
                'height'        => $header_height,
                'flex-height'   => true,
                'flex-width'    => true,
                )
            )
        );
        add_theme_support(
            'custom-background',
            apply_filters(
                'kiwi_custom_background_args',
                array(
                    'default-color' => 'ffffff',   // Customize > Colors > Background Color
                    'default-image' => '',
                )
            )
        );
        $logo_width = 50;
        $logo_height = 50;
        add_theme_support(
            'custom-logo',
            array(
                'width'       => $logo_width,
                'height'      => $logo_height,
                'flex-width'  => true,
                'flex-height' => true,
                'header-text' => array( 'title-tag', 'site-description' ),
            )
        );

        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'kiwi_setup' );

function kiwi_content_width() {
    $GLOBALS[ 'content-width' ] = apply_filters( 'kiwi_content_width', 1024 );
}
add_action( 'after_setup_theme', 'kiwi_content_width', 0 );

require KIWI_THEME_DIR . './inc/widgets/widgets.php';
require KIWI_THEME_DIR . './inc/menus/menus.php';
