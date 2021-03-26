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
function kiwi_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Header Widget', 'kiwi' ),
            'id'            => 'headerWidget',
            'description'   => esc_html__( 'Widget to display content in the header section' ),
            'before_widget' => '<section id="%1%s" class="%2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget', 'kiwi' ),
            'id'            => 'footerWidget',
            'description'   => esc_html__( 'Widget to be displayed on in the footer' ),
            'before_widget' => '<section id="%1%s" class="%2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'kiwi_widgets_init' );
?>