<?php
/**
 * Template Name: Bottle Tour
 * Description: An archive page template
 *
 * @package Zoomify
 */

get_header(); 
?>

	<div class="bottle-tour">
		
		<div class="content-accordion">
			<button class="accordion" data-action="tapon" data-index="1">Tapón <span class="icon-snake"></span></button>
			<div class="panel panel-1" >
			  <p>Madera de roble americano, labrada artesanalmente con grabado laser.</p>
			</div>

			<button class="accordion" data-action="logo" data-index="2">Bandera <span class="icon-snake"></span></button>
			<div class="panel panel-2" >
			  <p>Nuestro emblema, paliacate divino en el cual el mistico veneno de la sagrada serpiente, se fusiono con el tequila de Los Altos de Jalisco, dando vida al mejor tequila que la región jamas había conocido.  </p>
			</div>
			
			<button class="accordion" data-action="label" data-index="3">Botella <span class="icon-snake"></span></button>
			<div class="panel panel-3" >
			  <p> 100% Agave Tequilana Weber. Suave, notas cítricas y de agave cocido, ligeramente dulce. Denominación de origen en Tequila, Jalisco, México.  </p>
			</div>

			
			<button class="accordion" data-action="antonieta"  data-index="4">Cristal <span class="icon-snake"></span></button>
			<div class="panel panel-4">
			  <p>Molde único, creado por el diseñador mexicano, Gabriel Perez Figueroa. </p>
			</div>

			<button class="accordion" data-action="crystal" data-index="5">Veneno <span class="icon-snake"></span></button>
			<div class="panel panel-5">
			  <p>Finos cristales fundidos y soplados semi-industrialmente con una base de doble fondo.</p>
			</div>
			
			<button class="accordion" data-action="denomination" data-index="6">Tres Diamantes <span class="icon-snake"></span></button>
			<div class="panel panel-6">
			  <p>Blanco, Suave, Premium. </p>
			</div>
		</div>
		
		<div class="bottle">
			<div class="messages-bottle"> 
				<a href="" class="icon-close"></a>
				<p></p>
			</div>
			<div class="hover hover-tapon" data-text="Madera de roble americano, labrada artesanalmente con grabado laser. "></div>
			<div class="hover hover-denomination" data-text="Blanco, Suave, Premium."></div>
			<div class="hover hover-crystal" data-text="Finos cristales fundidos y soplados semi-industrialmente con una base de doble fondo."></div>
			<div class="hover hover-antonieta" data-text="Molde único, creado por el diseñador mexicano, Gabriel Perez Figueroa. "></div>
			<div class="hover hover-label" data-text=" 100% Agave Tequilana Weber. Suave, notas cítricas y de agave cocido, ligeramente dulce. Denominación de origen en Tequila, Jalisco, México.  "></div>
			<div class="hover hover-logo"  data-text="Nuestro emblema, paliacate divino en el cual el mistico veneno de la sagrada serpiente, se fusiono con el tequila de Los Altos de Jalisco, dando vida al mejor tequila que la región jamas había conocido.  "></div>
		</div>
		
		
	</div>
	<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].onclick = function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		  if (panel.style.maxHeight){
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + 'px';
		} 
	  }
	}
	
	jQuery(document).ready(function(){
		(jQuery)(document).on('click', '.hover', function(e){			
			e.preventDefault();	
			//(jQuery)('.messages-bottle').hidden();
			(jQuery)('.messages-bottle').show();
			

			(jQuery)('.messages-bottle > p').text('');
			(jQuery)('.messages-bottle > p').text( (jQuery)(this).data('text') );
		 });	
		  (jQuery)(document).on('click', '.icon-close', function(e){	
			 e.preventDefault();	
			(jQuery)('.messages-bottle').hide();
		  });
	
	
		jQuery('.accordion').click(function(){
			jQuery('span').removeClass('active');
			jQuery('.accordion').removeClass('active');
			for (i = 1; i <= 6; i++){
				if(jQuery(this).data('index') != i){
					if(jQuery('.panel-'+i).css('maxHeight') != '0px'){
						jQuery('.panel-'+i).css({'maxHeight': 0})
					}
				}
			
			}
			
			
			
			jQuery(this).find('span').addClass('active');
			jQuery(this).addClass('active');
			
			
			var $item = '.hover-'+jQuery(this).data('action');
			jQuery('.hover').removeClass('hover-active');
			jQuery($item).addClass('hover-active');
		});
	});
</script>

<?php get_footer(); ?>