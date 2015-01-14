<?php the_content(); ?>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>


<div class="container">
    <?php echo do_shortcode('[metaslider id=573]'); ?>
</div>
<div class="container text-center">
<div class="col-sm-12">our work</div>
<div class="row">
<div class="col-sm-3">OUR MISSION</div>
<div class="col-sm-3">OUR HISTORY</div> 
<div class="col-sm-3">OUR COLLECTION</div>
<div class="col-sm-3">YOUR FACE</div>
</div>

</div>
<div class="container text-center">
   INTRODUCTING NEVE BIEN FAIT 
    <p>Our 'ready-to-wear' collection is available for the first time to the general public</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-bien-fait.jpg" />
</div>
<div class="container text-center">
    <div class="col-sm-12">NEW DESIGNS</div>
    <div class="col-sm-4 col-sm-offset-4">
    <?php echo do_shortcode('[featured_products per_page="1" columns="1"]'); ?>
    </div>
</div>
<div class="container text-center">
    the bien fait shop 
    <?php echo do_shortcode('[featured_products per_page="3" columns="3"]'); ?>
</div>
<div class="container text-center">
    upcoming events and tastings
    <p>[WP LOOP WITH EVENTS]</p>
    <div class="row">
        <div class="col-sm-3">MCVEY WORKSHOP BEND</div>
        <div class="col-sm-3">MCVEY WORKSHOP ELK</div> 
        <div class="col-sm-3">KURT BOOMER WORKSHOP</div>
        <div class="col-sm-3">Artist Holiday with Jen Huang
            <p>Santa Barbara, CA</p>
            <p>April 20-23, 2015</p>
        </div>
    </div>
</div>
<div class="container text-center">
    the neve journal 
    <p>[WP LOOP WITH BLOG POSTS]</p>
    <div class="row">
        <div class="col-sm-3">NEW GUESTBOOK</div>
        <div class="col-sm-3">HOW TO USE INDESIGN</div> 
        <div class="col-sm-3">SMART ALBUMS</div>
        <div class="col-sm-3">DROP SHIPPING</div>
    </div>
</div>
<div class="container text-center">
    <div class="col-sm-12">TESTIMONIALS</div>
    <div class="row">
        <div class="col-sm-3">JEN HUANG</div>
        <div class="col-sm-3">ERICH MCVEY</div> 
        <div class="col-sm-3">RYLEE HITCHNER</div>
        <div class="col-sm-3">TEC PETAJA</div>
    </div>
</div>
<div class="container text-center">
    Inquire
    <p>[INQUIRE FORM]</p>
</div>
