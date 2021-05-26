<?php

// archive page code 
// add shortcode for woocommerce fitlers above the main content
// add_action('woocommerce_before_main_content', 'add_woocommerce_filter', 10); 

// function add_woocommerce_filter(){
//   // check if the page is category page
//   if(is_archive()){
//     echo do_shortcode('[woof sid="auto_shortcode" autohide=1 taxonomies=product_cat:9]');
//     }
// }

// archive page styling 
//add row-container div
add_action('woocommerce_before_main_content', 'add_row_container', 5); 

//add closing div for archive page
add_action('woocommerce_after_main_content', 'closing_div', 20); 

//add row container div
function add_row_container(){
  echo '<div class="row-container margin-row">';
}



// closing div
function closing_div(){
  echo '</div>'; 
}


//remove related product from summary 
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
// add related products 
add_action('woocommerce_after_main_content', 'add_row_container', 10); 
add_action('woocommerce_after_main_content', 'closing_div', 30);

  add_action('woocommerce_after_main_content','woocommerce_output_related_products', 20 );




// remove side bar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

// remove product tabs
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
// add product tabs
add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 40);

// remove product meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// add product meta under the title 
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 8);

// increase number of products shown in related section 
/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 6; // 4 related products
	$args['columns'] = 6; // arranged in 2 columns
	return $args;
}