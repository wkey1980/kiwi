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

// Register menu locations

function kiwi_register_menu() {
    register_nav_menus(
        array(
            'header' => __( 'Header Menu', 'kiwi' ),
            'header' => __( 'Footer Menu', 'kiwi' ),
            'header' => __( 'Social Menu', 'kiwi' ),
        )
    );
}
add_action( 'init', 'kiwi_register_menu' );
?>