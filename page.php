<?php while (have_posts()) : the_post(); ?>
<?php
$url = $_SERVER[REQUEST_URI];
$view = explode('view=',$url)[1];
 ?>
<?php if( $view == 'content'): ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content-manager', 'content'); ?>
<?php endif; ?>
<?php if( $view == 'design'): ?>
  <?php get_template_part('templates/content-manager/content-wireframe'); ?>
<?php endif; ?>
<?php if( $view == 'final-signoff'): ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content-manager', 'final-signoff'); ?>
<?php endif; ?>

<?php endwhile; ?>
