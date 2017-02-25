<?php
/**
 * The template used for displaying page content.
 *
 * @package Zoomify
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?> 			
		<?php if($_GET['set-cart-qty_10'] == 1 or (strpos($_SERVER['REQUEST_URI'],'checkout') !== false)){ 
				echo '<a href="javascript:history.go(-1);" class="icon-close-white"></a></h2>'; 
			} ?> 
		</h2>	
	</header><!-- end .entry-header -->

	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- end .entry-content -->

</article><!-- end post-<?php the_ID(); ?> -->