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
