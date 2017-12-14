<?php
/* 
 *
 * Template Name: checkout 
 *
 */

	get_header(); 
	get_template_part( 'template/parts/header/suscription', 'checkout' );

	get_footer(); 
 
	if( !isset($_SESSION) ){ session_start(); }

	$CARRITO = unserialize( $_SESSION["CARRITO"] );

	$TOTAL_PAGO = $CARRITO["total"];
?>

<section class="container">
	<?php if ( !is_user_logged_in() ){ ?>
		<aside class="col-md-6 col-xs-12 hidden col-md-offset-3 alert alert-danger" id="login-mensaje"></aside>
		<aside class="col-md-12 ">
			<?php get_template_part( 'template/parts/page/login', 'page' ); ?>
		</aside>
		<aside class="col-md-12 hidden" id="content-register-checkout">
			<?php get_template_part( 'template/parts/page/register', 'page' );  ?>
		</aside>
	<?php	
		}else{
			get_template_part( 'template/parts/page/checkout', 'page' ); 
		}
	?>
</section>

<?php get_template_part( 'template/parts/footer/suscription', 'page' ); ?>

<script type="text/javascript">
	$(function($){
		$('[data-action="prev"]').addClass('hidden');
		$('#register').addClass('hidden');
		$('#title').addClass('hidden');
		$('#section-msg').addClass('hidden');
		$('#link-registro').attr( 'href', '#registro' );
		$('#link-login').attr( 'href','#inicio-sesion' );
	});
</script>