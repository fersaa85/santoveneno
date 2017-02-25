<?php
/**
 * The themes Header file.
 *
 * Displays all of the <head> section and everything up till <div id="main-wrap">
 *
 * @package Zoomify
 */
 ?><!DOCTYPE html>
<html id="doc" <?php language_attributes(); ?> <?php zoomify_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/trade/stylesheet.css" media="screen" title="no title" charset="utf-8">
<?php wp_head(); ?>
<?php if(strpos($_SERVER['REQUEST_URI'], 'cocktails') !== false): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/pagePiling.js-master/jquery.pagepiling.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/pagePiling.js-master/jquery.pagepiling.min.js"></script>
<?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php
	$_SESSION['language'] = Weglot::Instance()->getCurrentLang();

    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
	foreach($items as $item => $values) { 
        $_product = $values['data']->post; 
        $quantity = $values['quantity'];
    } 
	
	
	function currentMenu($menu){
		$_GET['current'] = isset($_GET['current'])? $_GET['current'] : 1 ;
		echo ($_GET['current']== $menu)? 'current-menu-item page_item page-item-22 current_page_item' : '';
	}
		
?>


	<div class="search-overlay">
		<div class="search-wrap">
			<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <input type="text" class="field mainsearch" name="s" id="s" autofocus="autofocus" placeholder="<?php echo esc_attr_x( 'Type to Search &hellip;', 'placeholder', 'zoomify' ); ?>" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'zoomify' ); ?>" />
      </form>
			<div class="search-close"></div>
			<p class="search-info"><?php _e('Type your search terms above and press return to see the search results.', 'zoomify') ?></p>
		</div><!-- end .search-wrap -->
	</div><!-- end .search-overlay -->

	<header class="tr-header clearfix" role="banner">
		<div id="site-title">

	  	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		  	<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" />
		  </a>

    	</div>


	    <button class="menu-toggle"></button>
	    <nav id="site-navigation" class="main-navigation" role="navigation">
			
			<!--
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			-->
			<div class="menu-main-container">
				<ul id="menu-main" class="menu nav-menu">
						<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18 <?php  currentMenu(1) ?>">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>?current=1">HOME</a>
						</li>
						<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50  <?php  currentMenu(2) ?>">
							<a href="<?php echo esc_url( home_url( '/shop-online' ) ); ?>?current=2">SHOP ONLINE</a>
						</li>
						<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35  <?php  currentMenu(3) ?>">
							<a href="<?php echo esc_url( home_url( '/experience' ) ); ?>?current=3">EXPERIENCE</a>
						</li>
						<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25  <?php  currentMenu(4) ?>">
							<a href="<?php echo esc_url( home_url( '/bottle-tour' ) ); ?>?current=4">BOTTLE TOUR</a>
						</li>
						<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36  <?php  currentMenu(5) ?>">
							<a href="<?php echo esc_url( home_url( '/cocktails' ) ); ?>?current=5">COCKTAILS / CREATIONS</a>
						</li>
						<li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113  <?php  currentMenu(6) ?>">
							<a href="<?php echo esc_url( home_url( '/find' ) ); ?>?current=6">FIND</a>
						</li>
						<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29  <?php  currentMenu(7) ?>">
							<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>?current=7">CONTACT</a>
						</li>
						<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
							<div class="content-cart">
								<a class="icon-cart" href="<?php echo esc_url( home_url( '/cart/?set-cart-qty_10=1&current=0' ) ); ?>"></a>
								<div class="icon-cart-text"><?php echo $quantity; ?></div>
								</div class="clear"></div>
							</div>
						</li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
		
		<div class="icons-social-network">
			<a href="" class="facebook"></a>
			<a href="" class="twitter"></a>
			<a href="" class="instangram"></a>
		</div>
	</header>

<?php zoomify_page_header($post->ID); ?>

<main class="site-content" role="main">
