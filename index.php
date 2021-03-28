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

    <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
            <h1>Testing second if statement</h1>
        <?php endif; ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( '/template-parts/content/content' ); ?>

        <?php endwhile ?>

    <?php else : ?>

        <?php get_template_part( '/template-parts/content/content-none' ); ?>

    <?php endif; ?>

<?php get_footer(); ?>