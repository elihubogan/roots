<?php
/*
Template Name: Narrow Template
*/
?>
<div class="col-sm-8 col-sm-offset-2">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
