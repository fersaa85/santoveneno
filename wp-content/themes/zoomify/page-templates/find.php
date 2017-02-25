<?php
/**
 * Template Name: Find
 * Description: An archive page template
 *
 * @package Zoomify
 */
 


 
get_header();


$category = !empty($_GET['category']) ? $_GET['category'] : null;
if($category){
	$args = array( 'post_type' => 'find_sv', 
			   'category_name' => $category );
	$loop = new WP_Query( $args );
}




?>

	
	<div class="find">
	<?php 
		if($category):
		?>
		
		<div class="tr-container">
			<select name="nav_category">
				<option value="restaurante" <?php echo ($category == 'restaurante')? 'selected' : '' ; ?>>Restaurantes / Bares</option>
				<option value="antros" <?php echo ($category == 'antros')?  'selected' : '' ; ?>>Antros</option>
				<option value="retail" <?php echo ($category == 'retail')?  'selected' : '' ; ?>>Retail</option>
			</select>
		
			<div class="find-title">
				<h4><?php echo ($category == 'restaurante')? "Restaurantes / Bares" : $category ?></h4>
			</div>
		
		<?php 
			while ( $loop->have_posts() ) : $loop->the_post();
			
				echo   '<div class="find-post">';
							the_post_thumbnail('medium');
							echo '<h5>';
							the_title();
							echo '</h5>';
							echo '<div>';
							the_content();
							echo '</div>';
				echo '</div>';
				
			endwhile; // end of the loop. 
		?>	
		</div>
	<?php 
		else:
	?>
	<div class="bg-find">
		<div class="nav-find">
			<h3>FIND US</h3>
			<a href="?category=restaurante">Restaurantes / Bares</a>
			<a href="?category=antros">Antros</a>
			<a href="?category=retail"  >Retail</a>
		</div>
	</div>	
	<?php 
		endif	
	?>
	</div>	
	
	
<?php get_footer(); ?>