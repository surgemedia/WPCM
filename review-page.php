<?php
/**
 * Template Name: WPCM - Review Page
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php
$url = $_SERVER[REQUEST_URI];
$view = explode('view=',$url)[1];
 ?>
<?php if( $view == 'view-text'): ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content-manager', 'content-view-text'); ?>
<?php endif; ?>
<?php if( $view == 'edit-text'): ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content-manager', 'content-edit-text'); ?>
<?php endif; ?>


<?php if( $view == 'bugs'): ?>
 <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endif; ?>
<?php if( $view == 'signoff'): ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content-manager', 'bugs'); ?>
<?php endif; ?>

<?php endwhile; ?>
