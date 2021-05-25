<?php

// archive page code 
// add shortcode for woocommerce fitlers above the main content
add_action('woocommerce_before_main_content', 'add_woocommerce_filter', 10); 

function add_woocommerce_filter(){
  // check if the page is category page
  if(is_product_category()){
    echo do_shortcode('[woof sid="auto_shortcode" autohide=1 taxonomies=product_cat:9]');
    }
}

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
add_action('woocommerce_after_main_content', 'add_row_container', 20); 
add_action('woocommerce_after_main_content', 'closing_div', 40);
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