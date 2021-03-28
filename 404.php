<?php
/**
 * Template to display packageTitle
 * 
 * packageDescription
 * 
 * @package kiwi
 */
?>
<?php get_header(); ?>

    <section>

        <div class="error-404 not-found">
            <h1><?php esc_html_e( 'No Content Found', 'textDomain' ); ?></h1>
            <a href="<?php echo esc_url( home_url() ); ?>">Go Home!</a>
        </div>

    </section>


<?php get_footer(); ?>