<?php
/**
 * Template Name: Shop Online
 * Description: An archive page template
 *
 * @package Zoomify
 */

get_header(); 

function isMoviel(){
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
		return true;
	}
	return false;
}
	
?>

<style>
    .popbk{background-color:rgba(0,0,0,.6);position:fixed;top:0;left:0;width:100%;height:100%;z-index:998;-webkit-transform:translateZ(0)}
    /* .pop360 {z-index:999;position:fixed;top:0;right:0;bottom:0;left:0;margin:auto;-webkit-transform:translateZ(0);box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.6)} */
	
	.pop360{ float: left; }
    .pop360:after {content: "Click/Swipe and drag or use arrow keys to rotate";width: 100%;position: absolute;left: 0;top: 0;text-align: center;color: #999;font-size: .8em;border: 0 none}
    .pop360 .x-closer{z-index: 999;position:absolute;top:-22px;right:-22px;height:44px;width:44px;border-radius:22px;background-color:#979797;color:#494949;font-size:44px;line-height:44px;text-align:center;cursor:pointer}
    .pop360 .x-closer:hover{color:#fff}
    [href="#pop360"] {display: inline-block;margin: 3%;}
</style>

<script>
	var site_domine = 'http://tiempocreativo.com.mx/santoveneno/';
<?php
	if(isMoviel()):
	?>	
	jQuery(document).ready(function(){
		jQuery('.about-is').width(jQuery( window ).width());
	});
	<?php
			endif;
			?>
</script>


<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/canvas360.js"></script>

	
		<div class="about-is moviel">
			<div class="btn-content">
				<a class="btn_pro" href="<?php echo get_site_url(); ?>/sobre-el-envio"> EL ENVIO </a>
				<a class="btn_pro" href="<?php echo get_site_url(); ?>/cart?set-cart-qty_10=1"> COMPRAR </a>
			</div>
			
			<?php
			if(isMoviel()):
			?>
			<div class="pop360Moviel"></div>
			<?php
			endif;
			?>
			
			
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acerca-de.png" />
			
			<div class="btn-content">
				<a class="btn_pro" href="<?php echo get_site_url(); ?>/bottle-tour"> BOTTLE TOUR</a>
			</div>
		</div>
		
		
	<?php
	if(!isMoviel()):
	?>
	<div class="product tour">
		<div class="pop360"></div>
		<!--
		<div class="loader">
			<div class="bar">
				<span class="pro"></span>
			</div>
		</div>
		<div class="arrows btn-animate-bottle">
			<a class="icon-arrow-left" href="decrement"></a>
			<a class="icon-arrow-right" href="increment"></a>
			<div class="clear"></div>
		</div>
		
		
		<div class="descrp one">
			<h2 class="title"></h2>
			<h3 class="subtitle">TAPÓN</h3>
			<p>
				Tapón de madera con dosificador y logo grabado a laser
			</p>
		</div>
		<div class="descrp two">
			<h2 class="title"></h2>
			<h3 class="subtitle">DENOMINACIÓN DE ORIGEN</h3>
			<p>
				Tequila, Jalisco
			</p>
		</div>
		<div class="descrp three">
			<h2 class="title"></h2>
			<h3 class="subtitle">Blanco, Suave, Premium. Tres Diamantes</h3>
			<p>
			</p>
		</div>
		<div class="descrp four">
			<h2 class="title"></h2>
			<h3 class="subtitle">100% AGAVE</h3>
			<p>
				100% Agave Tequilana Weber. 38% Alc. Vol.
			</p>
		</div>
		<div class="descrp five">
			<h2 class="title"></h2>
			<h3 class="subtitle">UNICA</h3>
			<p>
				Botellas numeradas y firmadas por Maestra tequilera, Antonieta Ibarrola
			</p>
		</div>
		<div class="descrp six">
			<h2 class="title"></h2>
			<h3 class="subtitle">CRISTAL CON DOBLE FONDO</h3>
		</div>
		-->
		<div class="about-is">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acerca-de.png" />
			<div class="btn-content">
				<a class="btn_pro" href="<?php echo get_site_url(); ?>/sobre-el-envio"> EL ENVIO </a>
				<a class="btn_pro" href="<?php echo get_site_url(); ?>/cart?set-cart-qty_10=1"> COMPRAR </a>
				<a class="btn_pro" href="<?php echo get_site_url(); ?>/bottle-tour"> BOTTLE TOUR</a>
			</div>
		</div>
	</div>	
	<?php
	endif;
	?>
	
	

	
<!--
<script type="text/javascript">
	var time = 0;
	function pad_with_zeroes(number, length) {

	    var my_string = '' + number;
	    while (my_string.length < length) {
	        my_string = '0' + my_string;
	    }

	    return my_string;

	}
	var timerBotel = null;	var site_domine = 'http://tiempocreativo.com.mx/santoveneno/';	
	var frames = 108;
	var frames_ext = '';
	var interval;
	var option;
	var arrayImg = new Array();
	jQuery(document).ready(function(){
		for( var a = 0 ; a < frames ; a++ ){
			var my_image = new Image();						
			my_image.src = site_domine + "wp-content/themes/zoomify/img/animation/Animacion"+pad_with_zeroes( a+1 , 4)+frames_ext;
			my_image.onload = n_complete;
			
			arrayImg.push(my_image);
		}
		
		
		
	
		jQuery(document).on('click', '.btn-animate-bottle > a', function(e){
			e.preventDefault();
			option = jQuery(this).attr('href');
			interval = setInterval(customAnimateBottle, 200);
		});
			
			
		
		
		
	});

	var progress = 0;
	function n_complete(){
		progress++;
		if( progress < frames){
			jQuery(".loader .bar").css("width", ((progress / frames )*100)+"%" );
			jQuery(".loader .bar .pro").text(parseInt((progress / frames) *100) +" %")
			console.log( "Progress" , (progress / frames ) , " %");
		}else{
			jQuery(".loader .bar").css("width", "100%");
			jQuery(".loader .bar .pro").text(parseInt((progress / frames )*100)+ " %")
			console.log( "Progress" , (progress / frames ) , " %");
			jQuery(".loader .bar").fadeOut("slow");
			animateBottle()
		}

	}

	function animateBottle(){
		timerBotel = setInterval( function(){
			time = time < frames?time+1:1;
			elements = jQuery(".product.tour .descrp")
			if( elements[time / 20] != undefined ){
				jQuery( elements[(time / 20)-1] ).fadeIn();
			}

			if( time + 1 < (frames + 1) ){
				jQuery(".product.tour.after").css("background-image" ,
				"url('"+site_domine+"wp-content/themes/zoomify/img/animation/Animacion"+pad_with_zeroes( time+1 , 4)+frames_ext+"')");
			}

			jQuery(".product.tour:not(.after)").css("background-image" ,
			"url('"+site_domine+"wp-content/themes/zoomify/img/animation/Animacion"+pad_with_zeroes( time , 4)+frames_ext+"')");
			if( time == frames ){
				jQuery('.arrows').fadeIn();
				clearInterval( timerBotel );
				jQuery( elements[(time / 20)-1] ).fadeIn();
				
			}

		} ,90 );
	}
	
	
	function customAnimateBottle(){
		
		if(option == 'decrement'){
			time =		 time-1;
		}
		
		if(option == 'increment'){
			time =		 time+1;
		}
		
		if(time > frames ||  time == 0){
			clearInterval(interval);
			return ;
		}
		
		jQuery(".product.tour:not(.after)").css("background-image" ,
				"url('"+arrayImg[time].src+frames_ext+"')");
				
			
	}
</script>
-->


<?php get_footer(); ?>
