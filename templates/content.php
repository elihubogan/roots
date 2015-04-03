<article <?php post_class('clearfix'); ?>>
  <header>
    <h2 class="entry-title text-center"><?php the_title(); ?></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary col-sm-8 col-sm-offset-2">
    <?php //the_excerpt(); ?>
    <?php the_content(); ?>
  </div>
</article>
