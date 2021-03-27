<?php
function kiwi_setup_styles() {

    $kiwi_setup_style_ver = filemtime( get_template_directory() . '/assets/dist/css/main.css' );

    // $kiwi_setup_style_ver_old = wp_get_theme()->get( 'Version' );

    wp_register_style( 'main-css', KIWI_THEME_URI . '/assets/dist/css/main.css', array(), $kiwi_setup_style_ver, 'all' );
    wp_enqueue_style( 'main-css' );
}
add_action( 'wp_enqueue_scripts', 'kiwi_setup_styles' );
?>