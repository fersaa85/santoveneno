<?php
/**
 * Zoomify functions and definitions
 *
 * @package Zoomify
 */


/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';
//include_once('advanced-custom-fields/acf.php');
/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */


add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'cocktails_sv',
    array(
      'labels' => array(
        'name' => __( 'Cocktails' ),
        'singular_name' => __( 'Cocktail' )
      ),
	  'rewrite' => array('slug' => 'cocktail'),
	  'supports' => array( 'title', 'editor', 'thumbnail' , 'excerpt' , 'custom-fields'),
	  'taxonomies' => array('category' , 'tags'),
      'public' => true,
      'has_archive' => true,
    )
  );

  add_theme_support( 'post-formats', array( 'aside', 'gallery'  , 'video' , 'status') );

	register_post_type( 'galleries_sv',
    array(
      'labels' => array(
        'name' => __( 'Galleries' ),
        'singular_name' => __( 'Gallery' )
      ),
	  'rewrite' => array('slug' => 'galleries'),
	  'supports' => array( 'title', 'editor', 'thumbnail' , 'custom-fields' , 'post-formats',),
	  'taxonomies' => array('category' , 'tags'),
      'public' => true,
      'has_archive' => true,
    )
  );
  /*   
   * Agregamos al admin WP   
   * seccion para cargar las ubicaciones   
   */ 
  register_post_type( 'find_sv',    
	  array(  	 
	  'labels' => array(        
			  'name' => __( 'Finds' ),       
			  'singular_name' => __( 'Find' )      ),	
	  'rewrite' => array('slug' => 'find'),	
	  'supports' => array( 'title', 'editor', 'thumbnail' , 'excerpt' , 'custom-fields'),
	  'taxonomies' => array('category' , 'tags'),   
	  'public' => true,     
	  'has_archive' => true,    )	
	  );	
}

/** * Set cart item quantity action *
 * Only works for simple products (with integer IDs, no colors etc) *
 * @access public
 * @return void */
function woocommerce_set_cart_qty_action() {
  global $woocommerce;
  foreach ($_REQUEST as $key => $quantity) {
    // only allow integer quantities
    if (! is_numeric($quantity)) continue;

    // attempt to extract product ID from query string key
    $update_directive_bits = preg_split('/^set-cart-qty_/', $key);
    if (count($update_directive_bits) >= 2 and is_numeric($update_directive_bits[1])) {
      $product_id = (int) $update_directive_bits[1];
      $cart_id = $woocommerce->cart->generate_cart_id($product_id);
      // See if this product and its options is already in the cart
      $cart_item_key = $woocommerce->cart->find_product_in_cart( $cart_id );
      // If cart_item_key is set, the item is already in the cart
      if ( $cart_item_key ) {
        $woocommerce->cart->set_quantity($cart_item_key, $quantity);
      } else {
        // Add the product to the cart
        $woocommerce->cart->add_to_cart($product_id, $quantity);
      }
    }
  }
}

add_action( 'init', 'woocommerce_set_cart_qty_action' );




/*
 * ACF galeria
 */
 if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_galeria',
		'title' => 'Galeria',
		'fields' => array (
			array (
				'key' => 'field_586b560767268',
				'label' => 'Galeria',
				'name' => 'galery',
				'type' => 'image',
				'instructions' => 'Ingrese las imagenes de la galeria',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}



if (!session_id())
    session_start();
