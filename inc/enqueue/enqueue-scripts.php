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

function kiwi_enqueue_scripts() {
    wp_register_script( 'main-js', KIWI_THEME_URI . '/assets/dist/js/main.js', array(), filemtime( get_template_directory() . '/assets/dist/js/main.js' ), true );
    wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'kiwi_enqueue_scripts' );