<?php
/**
 * Template Name: Cocktails
 * Description: An archive page template
 *
 * @package Zoomify
 */

get_header();

$args = array( 'post_type' => 'galleries_sv', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );

?>
<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/fancybox/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/fancybox/jquery.fancybox.pack.js?v=2.1.6"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
	var id;
	jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
			prevEffect	: 'none',
			nextEffect	: 'none',
			helpers	: {
				title	: {
					type: 'outside'
				},
				thumbs	: {
					width	: 50,
					height	: 50
				}
			}
		});
		

		jQuery('.ifancybox').hover(
			 function() {
				id = jQuery(this).attr('href');
				console.log(id);
			 }, function() {
		});
		jQuery('.ifancybox').fancybox({
			 'width' : '75%',
			 'height' : '75%',
			 'autoScale' : false,
			 'type': 'ajax',
			 'ajax': {
				dataFilter: function(data) {
					return jQuery(data).find('#inline71')[0];
				}
			 }
		 });
		 
		 jQuery(document).keyup(function(e) {
			 if (e.keyCode == 27) { // escape key maps to keycode `27`
				parent.jQuery.fancybox.close();
			}
		});
	});
</script>

<div>
	<ul class="nav-sub-menu">
		<li class="active">Experience</li>
		<li><a href="<?php echo esc_url( home_url( '/category/press' ) ); ?>">Press</a></li>
	</ul>
</div>
<div class="experience">
	<?php /* Start the Loop */
	$cls = array("small" , "small" , "small" ,  "small" , "big" , "long" , "long" ,  "small" , "small"  );
	$current = $i = 0;
	?>
	<div class="Collage">
	<?php  while ( $loop->have_posts() ) : $loop->the_post();
				// gallery
				 if ( has_post_format( 'gallery' )):
					echo '<div class="'.get_post_format(get_the_ID()).' hover-cocktail-title" ><a href="'.get_the_post_thumbnail_url(get_the_ID()).'" class="fancybox fancybox-thumb'.get_the_ID().'" rel="fancybox-thumb'.get_the_ID().'" title="'.get_the_title(get_the_ID()).'" >';
					echo '<img src="'.get_the_post_thumbnail_url(get_the_ID()).'" />';
						echo '<span class="cocktail-title"><p>';
						the_title();
						echo '</p></span>';
					echo "</a></div>";
				
				// video
				 elseif ( has_post_format( 'video' )):
					echo '<div class="'.get_post_format(get_the_ID()).'" ><a href="#inline'.get_the_ID().'" class="ifancybox">';
					echo '<div class="'.get_post_format(get_the_ID()).'cont"></div>';
					echo '<img src="'.get_the_post_thumbnail_url(get_the_ID()).'" />';
						echo '<span class="cocktail-title"><p>';
						the_title();
						echo '</p></span>';
					echo "</a></div>";
					
				// default	
				 else:
					echo '<div class="'.get_post_format(get_the_ID()).' hover-cocktail-title" ><a href="'.get_the_post_thumbnail_url(get_the_ID()).'" class="fancybox fancybox-thumb'.get_the_ID().'" rel="fancybox-thumb'.get_the_ID().'" title="'.get_the_title(get_the_ID()).'" >';
					echo '<img src="'.get_the_post_thumbnail_url(get_the_ID()).'" />';
						echo '<span class="cocktail-title"><p>';
						the_title();
						echo '</p></span>';
					echo "</a></div>";
				endif;
					
				 
		   endwhile;
	?>
	</div>
	<?php
	while ( $loop->have_posts() ) : $loop->the_post();
		// gallery
		if ( has_post_format( 'gallery' )):
		/* Loop through all the image and output them one by one */
					 $gallery = get_post_gallery( get_the_ID(), false );
					 if($gallery !== false):
						 foreach( $gallery['src'] as $src ) : 
								$srcfull = explode("-150x150", $src);
								echo '<a href="'.$srcfull[0].$srcfull[1].'" class="fancybox fancybox-thumb'.get_the_ID().' hidden" rel="fancybox-thumb'.get_the_ID().'" title="'.get_the_title(get_the_ID()).'"  ><img src="'.$srcfull[0].$srcfull[1].'" alt="" /></a>';
						endforeach;
					 endif;
			 endif;
			 
			 /* Video */
				if ( has_post_format( 'video' )):
					
					echo '<div id="inline'.get_the_ID().'" class="video-over">';
						echo '<span class="d-cont">';
						the_content();
						echo '</span>';
					echo '</div>';
				 endif;	
				
			 
			 
	  endwhile;
					 ?>
	<?php  /*while ( $loop->have_posts() ) : $loop->the_post();
			$current = $current > 6 ? 0 : $current;
			$i++; $class = ($i==$loop->post_count)? "grid-sizer" : '';  
			echo '<div class="'.get_post_format(get_the_ID()).'cont entry-content '.$class.' cocktail sm '.$cls[$current].'" onclick="showDetail('.get_the_ID().')">';
				the_post_thumbnail();
				echo '<span class="cocktail-title">';
				the_title();
				echo '</span>';
		    echo '</div>';
			echo "<div class='".get_post_format(get_the_ID())."det detail-cocktail id_".get_the_ID()."' >";
				
				// Video	
				if ( has_post_format( 'video' )) {
					
					echo '<div class="video-over">';
						echo '<span class="d-closer btnStop" onclick="hideDetail()">x</span>';
						echo '<span class="d-cont">';
						the_content();
						echo '</span>';
					echo '</div>';
					
				// Gallery	
				}else if ( has_post_format( 'gallery' )) {
					echo '<div class="custom-detail">';
						echo '<span class="d-closer" onclick="hideDetail()">x</span>';
						echo '<span class="d-cont">';
						the_content();
						echo '</span>';
					echo '</div>';
					echo '<div class="custom-gallery">';
						the_post_thumbnail();
					echo '</div>';
					echo '<div class="custom-hover"><div class="custom-gallery-mask">';
						$gallery = get_post_gallery( get_the_ID(), false );
						  /* Loop through all the image and output them one by one *
						 echo '<div class="custom-gallery-items">';
						 foreach( $gallery['src'] as $src ) : 
							$srcfull = explode("-150x150", $src);
							echo '<a href="'.$srcfull[0].$srcfull[1].'" class="btn-gallery"><img src="'.$src.'" class="my-custom-class" alt="Gallery image" /></a>';
						 endforeach;
						 echo '</div>';
					echo '</div></div>';
				 
					
				// Default		 
				}else{
					echo '<div class="c-d-image">';
						the_post_thumbnail();
					echo '</div>';
					echo '<div class="c-d-detail">';
						echo '<span class="d-closer" onclick="hideDetail()">x</span>';
						echo '<span class="d-title">';
						the_title();
						echo '</span>';
						echo '<span class="d-cont">';
						
						echo '</span>';
						echo '<span class="d-exc">';
						the_excerpt();
						echo '</span>';
					echo '</div>';
				}
			echo '</div>';
			$current++;
		endwhile; // end of the loop. */ ?>
</div>

<span class="d-bg" onclick="hideDetail()"></span>
<!--
<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>
-->

<script src="<?php echo get_template_directory_uri() ?>/js/collagePlus/jquery.collagePlus.min.js"></script>
<script type="text/javascript">
	 jQuery(window).load(function () {
        jQuery('.Collage').collagePlus();
    });

	jQuery(function(){
	
	});
	
	
	function showDetail( id ){
		jQuery(".d-bg , .id_" + id ).fadeIn();
		jQuery( ".id_" + id ).addClass("activeCOC")
	}
	function hideDetail( ){
		jQuery( " .d-bg , .activeCOC " ).fadeOut();
	}

	/*
	jQuery(function(){

		jQuery('.masonery').masonry({
		// options
		columnWidth: '.grid-sizer',
		itemSelector: '.entry-content',
		percentPosition: true
		});
	});
	*/
	
	
	jQuery(function(){
		jQuery( ".btn-gallery" ).click(function (e){
			e.preventDefault();
			$src = jQuery(this).attr('href');
			jQuery('.custom-gallery > img').fadeOut();
			
			jQuery('.custom-gallery').html('');
			jQuery('.custom-gallery').html('<img src="'+$src+'" class="my-custom-class" alt="Gallery image" />').fadeIn();
		});
	
	});
	
	
	jQuery(function(){ 
		var $this;
		jQuery( ".hover-cocktail-title" ).hover(
		   function() {
			$this = jQuery(this);
			$this = $this.find('span');
			$this.animate({
							top: -60,
						}, "slow");
		  }, function() {
			$this.animate({
							top: 0,
						}, "slow");
		  }
		);
	});
	
	
</script>

<?php get_footer(); ?>
