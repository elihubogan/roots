<?php the_content(); ?>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>


<div class="container">
    image slider
    <?php echo do_shortcode('[metaslider id=573]'); ?>
</div>
<div class="container">
    our work
</div>
<div class="container">
    Introducing neve bien fait collection
</div>
<div class="container">
    the bien fait shop 
    <?php echo do_shortcode('[featured_products per_page="3" columns="3"]'); ?>
</div>
<div class="container">
    upcoming events and tastings
</div>
<div class="container">
    the neve journal 
</div>
<div class="container">
    testimonials    
</div>
<div class="container">
    Inquire
</div>
