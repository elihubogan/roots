<?php the_content(); ?>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>


<div class="container">
    <?php echo do_shortcode('[metaslider id=573]'); ?>
</div>
<div id="about" class="container text-center">
    <div class="col-sm-12"><h3>WHO WE ARE</h3></div>
    <div class="row">
        <div class="col-sm-6 col-lg-3 blurb">
            <h3>OUR BELIEFS</h3>
            <p>We believe that artists who create extraordinary work should have extraordinary albums.</p>
            <p>We believe that fast is slow, and that album design and production, like photography, is an art form that takes a lifetime to master.</p>
            <p>We believe in our collectors, and support everything that they do.</p>
        </div>
        <div class="col-sm-6 col-lg-3 blurb">
            <h3>OUR PROCESS</h3>
            <p>As a small boutique, we create all of our products by hand, one at a time. Each giclée page is individually examined, and we work with our clients to ensure true color in printing.</p>
            <p>Our albums and boxes are bound start-to-finish by master binders, which gives us superior quality control and pride of ownership.</p>
            <p>There are no shortcuts to true quality. Neve produces heirloom albums, boxes, and prints, and we stand behind our products with a lifetime guaranty.</p>
        </div> 
        <div class="col-sm-6 col-lg-3 blurb">
            <h3>OUR COLLECTORS</h3>
            <p>Neve works with fine-art photographers and other visual artists who are in need of exceptional products for their clients.</p>
            <p>Our collectors hone their art one image at a time, and we work together with them to make each image as impactful as possible.</p>
            <p>Our custom-built albums and boxes are exclusive to the trade, and we make a point to explore new ideas constantly with our partners.</p>
        </div>
        <div class="col-sm-6 col-lg-3 blurb">
            <h3>OUR MESSAGE</h3>
            <p>You are an artist. Value your time above all things.</p>
            <p>Less is more. Over-designed mosaics distract rather than enhance.</p>
            <p>Each image should stand alone on its own merits. Together they should tell the story.</p>
        </div>
    </div>

</div>
<div class="container text-center">
  <h3>INTRODUCTING NEVE BIEN FAIT</h3>
    <p>Our 'ready-to-wear' collection is available for the first time to the general public</p>
    <p style="padding-bottom:25px;">The Bien Fait collection includes a hand-picked selection of fabrics and styles, which ship within a week</p>
    <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-bien-fait.jpg" />
    <p style="padding:25px 0 0;">SHOP NOW</p>
    </a>

    
</div>
<div class="container text-center hidden">
    <div class="col-sm-12">
        <h3>NEWLY LAUNCHED FOR INDUSTRY ONLY</h3>
    </div>
    <div class="col-sm-4 col-sm-offset-2">
        <?php echo do_shortcode('[featured_products per_page="1" columns="1"]'); ?>
    </div>
    <div class="col-sm-4">
        <?php echo do_shortcode('[featured_products per_page="1" columns="1"]'); ?>
    </div>
</div>
<div class="container text-center hidden">
    <h3>NEW TO THE BIEN FAIT SHOP</h3>
    <?php echo do_shortcode('[featured_products per_page="3" columns="3"]'); ?>
</div>
<div id="events" class="container text-center">
    <h3>UPCOMING EVENTS</h3>
    <p>We travel quite a bit spreading the good word. Let us know where you are and we'll let you know when we're coming!</p>
    <div class="row">
        <div class="col-sm-3 boxed">
            <a href="http://nevealbums.dev/neve-wppi-2015/">
                <h3 style="min-height: 30px">WPPI</h3>
                <p>Las Vegas, NV</p>
                <p>March 2-4, 2015</p>
            </a>
        </div>
        <div class="col-sm-3 boxed">
            <a href="http://nevealbums.dev/jen-huang-artist-holiday-2015/">
                <h3 style="min-height: 30px">ARTIST HOLIDAY<br/>WITH JEN HUANG</h3>
                <p>Santa Barbara, CA</p>
                <p>April 20-23, 2015</p>
            </a>
        </div>
        <div class="col-sm-3 boxed">
            <a href="http://nevealbums.dev/neve-albums-bliss-and-bokeh/">
                <h3 style="min-height: 30px">BLISS AND BOKEH</h3>
                <p>Charleston, SC</p>
                <p>May 4-7, 2015</p>
            </a>
        </div>
        <div class="col-sm-3 boxed">
            <a href="http://nevealbums.dev/fount-workshop-2015/">
                <h3 style="min-height: 30px">FOUNT WORKSHOP</h3>
                <p>Wiscasset, ME</p>
                <p>May 19-21, 2015</p>
            </a>
        </div>
    </div>
</div>
<div id="journal" class="container text-center">
    <div class="row">
        <h3>LES NOUVELLES</h3>
        <div class="col-sm-6 col-lg-3 blurb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-journal.jpg" width:150px style="padding:10px" />
            <h3 style="min-height: 30px">GUESTBOOKS AVAILABLE!</h3>
            <p>Coming soon to Neve Bien Fait are custom-stamped guestbooks for wedding guests or for newly-married couples to install at home for callers</p>
            <p>Bound using the same exacting standards as our albums, printed on 100% acid-free wood pulp papers</p>
        </div>
        <div class="col-sm-6 col-lg-3 blurb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-journal.jpg" width:150px style="padding:10px" />
            <h3 style="min-height: 30px">ADOBE INDESIGN<br />FOR FUN AND PROFIT</h3>
            <p>In this article we give you a few tips on using InDesign for album layout.</p>
            <p>While other commercial products abound, we consistently return to InDesign for its flexibility and ease-of-use.</p>
            <p>Hint: if layout takes more than an hour, you're doing it wrong!</p>
        </div> 
        <div class="col-sm-6 col-lg-3 blurb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-journal.jpg" width:150px style="padding:10px" />
            <h3 style="min-height: 30px">SMART(er) ALBUMS</h3>
            <p>Neve Albums were recently added to the Smart Albums collection, and we wanted to point out a few tips about how to get the most out of this program</p>
            <p>With Smart Albums 2.0, most of our reservations have been resolved and we can happily say we love their product!</p>
        </div>
        <div class="col-sm-6 col-lg-3 blurb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-journal.jpg" width:150px style="padding:10px" />
            <h3 style="min-height: 30px">DROP SHIPPING</h3>
            <p>Shipping takes time and money, and for our international clientele, customs duties can be prohibitive.</p>
            <p>Here we walk you through our white-branding and drop shipping process, showing you how you can trust us to deliver straight to your clients without undermining your brand.</p>
        </div>
    </div>
</div>
<div id="testimonials" class="container text-center hidden">
    <div class="col-sm-12"><h3>TESTIMONIALS</h3></div>
    <div class="row">
        <div class="col-sm-3">
            <p>"Neve is the only company I trust with my best work"</p>
            <a href="http://jenhuangblog.com" target="_blank">
            <img class="circular" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg"/>
            <h3>JEN HUANG</h3>
            </a>
        </div>
        <div class="col-sm-3">
            <p>"This is hands-down the best album company on the market today. I feel like I have more than just a product supplier - I have a partner who is invested in helping my business grow"</p>
            <a href="http://jenhuangblog.com" target="_blank">
            <img class="circular" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg"/>
            <h3>ERICH MCVEY</h3>
            </a>
        </div>
        <div class="col-sm-3">
            <p>"Worth every penny"</p>
            <a href="http://jenhuangblog.com" target="_blank">
            <img class="circular" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg"/>
            <h3>RYLEE HITCHNER</h3>
            </a>
        </div>
        <div class="col-sm-3">
            <p>"All I can say is - wait til you get your hands on one. I'm never going back to board books"</p>
            <a href="http://jenhuangblog.com" target="_blank">
            <img class="circular" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg"/>
            <h3>TEC PETAJA</h3>
            </a>
        </div>
    </div>
</div>
<div class="container text-center">
    <h3>CONTACT US</h3>
    <p style="padding-bottom:25px">Neve Albums are available exclusively to the professional artist and photographer community. Send us a note with your website for access!</p>
    <?php echo do_shortcode('[contact-form-7 id="583" title="Contact form 1"]'); ?>
</div>
