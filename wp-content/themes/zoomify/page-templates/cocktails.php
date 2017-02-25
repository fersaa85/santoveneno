<?php
/**
 * Template Name: Cocktails
 * Description: An archive page template
 *
 * @package Zoomify
 */

get_header();

$args = array( 'post_type' => 'cocktails_sv', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
$count = count( $loop->posts );

?>

<div id="pagepiling">
	<?php 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		echo '<div class="section">
				<div class="pull-left">
					<h3>';
				the_title();
		echo 		'</h3>';
				the_content();
		echo	'</div>
				 <div class="pull-right">';
					the_post_thumbnail('medium_large');
		echo	'</div>
			  </div>
			  <div class="clear"></div>';
	endwhile;
	?>
   
</div>

	<?php /* Start the Loop 
	<?php while ( $loop->have_posts() ) : $loop->the_post();
			echo '<div class="entry-content cocktail" onclick="showDetail('.get_the_ID().')">';
				the_post_thumbnail();
				echo '<span class="cocktail-title">';
				the_title();
				echo '</span>';
		    echo '</div>';
			echo "<div class='detail-cocktail id_".get_the_ID()."' >";

				echo '<div class="c-d-image">';
					the_post_thumbnail();
				echo '</div>';
				echo '<div class="c-d-detail">';
					echo '<span class="d-closer" onclick="hideDetail()">x</span>';
					echo '<span class="d-title">';
					the_title();
					echo '</span>';
					echo '<span class="d-cont">';
					the_content();
					echo '</span>';
					echo '<span class="d-exc">';
					the_excerpt();
					echo '</span>';
				echo '</div>';

			echo '</div>';
		endwhile; // end of the loop. */?>

<script type="text/javascript">
var count = 1;
var total = <?php echo $count ; ?>;
jQuery(document).ready(function() {
    jQuery('#pagepiling').pagepiling({ keyboardScrolling: true} );
	
	jQuery(document).keyup(function(e) {
		if(e.which == 38) { 
			--count;
			if(count <= 0){
				count = 1;
				return;
			} 
			jQuery.fn.pagepiling.moveTo(count);
		}
		if(e.which == 40) {
			++count;
			if(count > total){
				count = total;
				return;
			} 
			jQuery.fn.pagepiling.moveTo(count);
		}
	});
	
});
</script>
<?php get_footer(); ?>
