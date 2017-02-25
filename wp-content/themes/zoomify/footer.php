 <?php
/**
 * The template for displaying the footer.
 *
 * @package Zoomify
 */
?>

</main><!-- end .cd-content -->

<?php


if(isset($_GET["age_confirm"])){
	if( $_GET["age_confirm"] === "false" ){
		unset($_SESSION["age"]);
	}else{
		$_SESSION["age"] = true;
	}
}
 ?>
<?php if( !isset($_SESSION["age"] )){ ?>
<div class="intro">
	<span class="image"></span>
	<div class="option">
		<h1>
			DO YOU HAVE THE LEGAL DRINKING AGE IN YOUR COUNTRY ?
		</h1>
		<a href="?age_confirm=true">Yes</a>
		<a href="http://www.google.com">No</a>
	</div>
</div>
<?php } ?>
	<footer id="colophon" class="site-footer clearfix" role="contentinfo">

    <div class="tr-container">

		<?php get_sidebar( 'footer' ); ?>

		<div id="site-info">

    <?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="footer-social-nav" class="footer-social-nav" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<div class="icons-social-network-movil moviel">
			<a href="" class="facebook"></a>
			<a href="" class="twitter"></a>
			<a href="" class="instangram"></a>
			<div class="clear"></div>
		</div>
		
			<ul class="credit">
				<li> SLOGAN SANTO VENENO </li>
				<li> SANTO VENENO, its label, its bottle design and algo are trademarks and/or registered trademarks of Santo Veneno. © 2016, ALL RIGHTS RESERVED. </li>

			</ul><!-- end .credit -->

		</div><!-- end #site-info -->

    </div><!-- end .tr-container -->

	</footer><!-- end #colophon -->

<?php wp_footer(); ?>
<script>	
	(jQuery)(document).ready(function(){				
		 (jQuery)('select[name=nav_category]').change(function(){
				window.location = document.location.origin + document.location.pathname  +'?category='+ (jQuery)(this).val()
		 });
	 });
</script>
</body>
</html>
