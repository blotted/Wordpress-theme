<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'hero' ); ?>
<?php get_template_part( 'template-parts/content', 'optin' ); ?>
<?php get_template_part( 'template-parts/content', 'boost' ); ?>
<?php get_template_part( 'template-parts/content', 'benefit' ); ?>
<?php get_template_part( 'template-parts/content', 'course' ); ?>
<?php get_template_part( 'template-parts/content', 'project' ); ?>
<?php get_template_part( 'template-parts/content', 'video' ); ?>
<?php get_template_part( 'template-parts/content', 'instructor' ); ?>
<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

<?php get_footer(); ?>