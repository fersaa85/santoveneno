<?php
/**
 * Template Name: Product
 * Description: An archive page template
 *
 * @package Zoomify
 */

get_header(); ?>

	<div class="product">
		<div class="descrp">						<!--
			<h2 class="title">TEQUILA BLANCO</h2>
			<h3 class="subtitle">SANTOVENENO</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
				do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				 Ut enim ad minim veniam, quis nostrud exercitation ullamco
				 laboris nisi ut aliquip ex ea commodo consequat. Duis aute
				 irure dolor in reprehenderit in voluptate velit esse cillum
				 dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
				 non proident, sunt in culpa qui officia deserunt mollit anim
				 id est laborum.
			</p>			-->			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acerca-de.png" />

			<a class="btn_pro" href="<?php echo get_site_url(); ?>/cart?set-cart-qty_10=1"> COMPRAR </a>
			<a class="btn_pro" href="<?php echo get_site_url(); ?>/tour"> TOUR DE LA BOTELLA </a>
		</div>
	</div>


<?php get_footer(); ?>
