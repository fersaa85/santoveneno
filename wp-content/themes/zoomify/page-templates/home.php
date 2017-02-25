<?php
/**
 * Template Name: Home
 * Description: An archive page template
 *
 * @package Zoomify
 */

get_header();

$args = array( 'post_type' => 'galleries_sv', 'posts_per_page' => 3 );
$loop = new WP_Query( $args );
?>

	<div class="home">
		<div class="video">
			<a href="#">
				<span></span>
			</a>			<!--
			<div class="other">
				<div class="hold">
					<?php while ( $loop->have_posts() ) : $loop->the_post();
						echo '<div class="'.get_post_format(get_the_ID()).'cont entry-content cocktail home" onclick="showDetail('.get_the_ID().')">';
							the_post_thumbnail();
							echo '<span class="cocktail-title">';
							the_title();
							echo '</span>';
					    echo '</div>';
					endwhile; // end of the loop. ?>
					</div>
			</div>			-->
		</div>

	</div>

<?php get_footer(); ?>
