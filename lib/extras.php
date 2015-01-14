<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
/**
 * WooCommerce
 *
 * Unhook sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


/* 20150114 - hide category from shop */
add_action( 'pre_get_posts', 'bogdev_hide_shop_category' );
function bogdev_hide_shop_category( $q ) {

    if ( ! $q->is_main_query() ) return;
    if ( ! $q->is_post_type_archive() ) return;
    
    if ( ! is_admin() && is_shop() ) {

        $q->set( 'tax_query', array(array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => array( 'professional' ), // Don't display products in the knives category on the shop page
            'operator' => 'NOT IN'
        )));
    
    }

    remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

}
