 <?php
/* 
 *
 * Template Name: Quiero mi Marca 
 *
 */

	get_header(); 

	$HTML = '


		<link rel="stylesheet" href="'.get_home_url().'/css/quiero.css">

		<div class="vlz_header">
			<a class="btn btn-sm btn-kmibox-white pull-left" id="btn-atras" href="#" data-value="0">
				<i class="fa fa-chevron-left" aria-hidden="true"></i> Atras
			</a>
			<label class="header_titulo" id="header">Prueba</label>
		</div>

		<div class="comprar_container">

			<section id="fase_1">
				<div class="comprar_box">
					<div id="vlz_carrousel" class="vlz_carrousel">
						<img src="'.get_home_url().'/img/edad/Adulto.png"  class="img-responsive"  width="400px" id="Grande" />
						<img src="'.get_home_url().'/img/edad/Mediano.png"  class="img-responsive" width="400px" id="Mediano" />	
						<img src="'.get_home_url().'/img/edad/Cachorro.png"  class="img-responsive" width="400px" id="Pequeño" />
					</div>
				</div>

				<div id="edad" class="comprar_footer">

					<button data-value="Cachorro">
						<b>Cachorro</b>
					</button>

					<button data-value="Adulto">
						<b>Adulto</b>
					</button>

					<button data-value="Maduro">
						<b>Maduro</b>
					</button>
				</div>

			</section>

			<section id="fase_2" class="hidden">
				<div class="comprar_box">
					<div id="vlz_carrousel_2" class="vlz_carrousel"></div>
				</div>

				<div id="presentaciones" class="comprar_footer" data-value="">

					<span id="nombre_producto"></span>


					<div id="presentacion-900g" class="button_presentacion">
						<button data-value="900g">
							<b>P (900g)</b>
						</button>
						<span class="separador_presentacion">|</span>
					</div>

					<div id="presentacion-2000g" class="button_presentacion">
						<button data-value="2000g">
							<b>M (2000g)</b>
						</button>
						<span class="separador_presentacion">|</span>
					</div>

					<div id="presentacion-4000g" class="button_presentacion">
						<button data-value="4000g">
							<b>G (4000g)</b>
						</button>
					</div>

					<span id="no_aparece">Si no aparece tu marca haz <a href="#">click aqui</a></span>
				</div>

			</section>

			<section id="fase_3" class="hidden">
				<div class="comprar_box" id="plan">
					<div id="planes">
						<article id="plan-Quincenal" class="text-center col-sm-4 separation-top">
							<img class="img-responsive" src="'.get_home_url().'/img/Quincenal.png" width="300px" height="370px">
							<button class="btn btn-sm-kmibox btn-sm-kmibox-price" data-value="Quincenal" style="border: solid 2px rgb(144, 14, 156); background: #ffffff; color: #777;" > Quincenal </button>
						</article>
						<article id="plan-Mensual" class="text-center col-sm-4 separation-top">
							<img class="img-responsive" src="'.get_home_url().'/img/Mensual.png" width="300px" height="370px">
							<button class="btn btn-sm-kmibox btn-sm-kmibox-price" data-value="Mensual" style="border: solid 2px rgb(144, 14, 156); background: #ffffff; color: #777;">Mensual</button>
						</article>
						<article id="plan-Bimestral" class="text-center col-sm-4 separation-top">
							<img class="img-responsive" src="'.get_home_url().'/img/Bimestral.png" width="300px" height="370px">
							<button class="btn btn-sm-kmibox btn-sm-kmibox-price" data-value="Bimestral" style="border: solid 2px rgb(144, 14, 156); background: #ffffff; color: #777;">Bimestral</button>
						</article>
					</div>
				</div>
				<div class="comprar_footer">
					<span class="text-center fontspan">Descuento en comparación con el precio unitario mensual*</span>
				</div>
			</section>

			<section id="fase_4" class="hidden">
				<div class="factura">

					<div class="cintillo_factura">
						<img id="izq" src="'.get_home_url().'/img/marca/store.png" />
						<img id="cen" src="'.get_home_url().'/img/marca/Line---escritorio.png" />
						<img id="der" src="'.get_home_url().'/img/marca/box.png" />
					</div>

					<div class="alerta" id="cart-content-alerta">
						<span id="cart-alerta"></span>
					</div>
					
					<table id="desglose" cellspacing=0 cellpadding=0>	
						<thead>
							<th width="40">&nbsp;</th>
							<th>Producto</th>
							<th>Descripci&oacute;n</th>
							<th>Frecuencia</th>
							<th>Total</th>
						</thead>
						<tbody id="cart-items"></tbody>
					</table>

					<div id="totales">
					
						<table cellspacing=0 cellpadding=0>	
							<tr>
								<th> Productos en esta compra </th>
								<td id="cant-item"> </td>
							</tr>
							<tr>
								<th> Total sin IVA </th>
								<td id="subtotal"> </td>
							</tr>
							<tr>
								<th> IVA </th>
								<td id="iva"> </td>
							</tr>
							<tr>
								<th class="style_total" > Total </th>
								<td class="style_total" id="total"> </td>
							</tr>
						</table>

					</div>

				</div>
				
				<article class="col-md-12 text-center">
					<span id="agregar_plan" >Agregar otro plan</span>
					<a href="#" data-toggle="modal" data-target="#suscription"><img src="'.get_home_url().'/img/Boton-2.png" width="220" height="60"/></a>
				</article>		
			</section>	

		</div>

		<div id="suscription" class="modal fade img-responsive" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" id="suscription">
				<div class="Modal content" id="suscription" >			     
					<div  class="btn btn-sm-kmibox"  style="border-color:#fffff1; border-style: solid; border-width: 14px;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="btn_cerrar">X</button>
						<div class="row" >
							<div  style="clear:both;"></div>
							<div style="float:left;width:50%;">    
								<img src="'.get_home_url().'/img/tarjeta.png"  alt="Cinque Terre" class="img-responsive" width="250" height="240"/>
								<a href="#"  id="pagar" role="button"  data-target="suscription"><img src="'.get_home_url().'/img/btn_tarjeta.png" class="img-responsive" alt="Cinque Terre" width="220" height="80"/></a>
							</div>
							<div style="float:left;width:50%;" >    
								<img src="'.get_home_url().'/img/efectivo.png"  alt="Cinque Terre" class="img-responsive" width="250" height="250"/>
								<a href="#" type="button" id="tienda" data-target="suscription"><img src="'.get_home_url().'/img/btn_efectivo.png"   alt="Cinque Terre"  width="220" height="60"/></a>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>	
	';

	echo comprimir($HTML);

	get_footer();

	echo comprimir('<script type="text/javascript" src="'.get_home_url().'/js/functions.js"></script>');
?>
