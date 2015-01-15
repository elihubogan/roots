<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
  <div class="row text-center">
      <a class='' href="<?php echo esc_url(home_url('/')); ?>">
        <?php //bloginfo('name'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg"? width=125 />
     </a>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if( is_front_page() ) {
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
      } else {
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(array('theme_location' => 'secondary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
      }
      ?>
<div class="navbar-login">
                <?php if ( is_user_logged_in() ) { ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('MY ACCOUNT','woothemes'); ?>"><?php _e('MY ACCOUNT','woothemes'); ?></a>
                <?php } 
                else { ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('LOGIN','woothemes'); ?>"><?php _e('LOGIN','woothemes'); ?></a>
                <?php } ?>
</div>
    </nav>
  </div>
</header>
