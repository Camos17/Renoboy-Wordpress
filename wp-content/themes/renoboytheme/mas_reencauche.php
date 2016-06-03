<?php
/*
Template Name: Mas sobre el reencauche
*/
?>
		<?php include "header.php";?>

			<div class="col-xs-12 no-padding fondo-mas-reencauche">
				<div class="col-xs-12 layer-fondo-mas-reencauche">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 contenido-mas-reencauche no-padding">
						<div class="col-xs-12 col-md-4 no-padding contenido-mas-reencauche1">
							<div class="col-xs-12 no-padding headline-mas-reencauche1">
								<h2><?php the_field("titulo_superior"); ?></h2>
							</div>
							<?php the_field("texto_mas_reencauche"); ?>
						</div>
						<div class="col-xs-12 col-md-8 hidden-xs hidden-sm contenido-mas-reencauche2">
							<img class="img-responsive" src='<?php the_field("imagen_nuestro_reencauche_desktop"); ?>' alt="Mas sobre nuestro Reencauche">
						</div>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 hidden-md hidden-lg contenido-mas-reencauche2">
							<img class="img-responsive" src='<?php the_field("imagen_nuestro_reencauche_movil"); ?>' alt="Mas sobre nuestro Reencauche Movil">
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 no-padding fondo-mas-reencauche2">
				<div class="col-xs-12 text-center no-padding headline-mas-reencauche2">
					<h2><?php the_field("titulo_superior"); ?></h2>
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 no-padding">
						<hr>
					</div>
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 hidden-xs img-proceso-reencauche">
					<img class="img-responsive" src='<?php the_field("imagen_servicio_de_reencauche_desktop"); ?>' alt="Servicio de Reencauche">
				</div>
				<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 hidden-sm hidden-md hidden-lg img-proceso-reencauche">
					<img class="img-responsive" src='<?php the_field("imagen_servicio_de_reencauche_movil"); ?>' alt="Servicio de Reencauche movil">
				</div>
				<div id="camioncontainer" class="col-xs-12 no-padding fondo-camino-reencauche">
					<img class="col-xs-12 no-padding img-fondo-camino-reencauche" src="<?php bloginfo('template_directory');?>/img/fondoverde.svg" alt="...">
					<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 camino-reencauche">
						<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/carretera.svg" alt="">
					</div>
					<div class="col-xs-12 no-padding frame-carretera">
						
					</div>
					<div id="camion" class="col-xs-2 col-xs-offset-5 no-padding ubicacion-camion-carretera">
						<div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4 no-padding">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/camion.svg" alt="">
						</div>
					</div>
					
					<div class="col-xs-4 col-lg-3 marco-cartel-mas-reencauche hidden-xs hidden-sm">
						<div class="col-xs-12 contenido-cartel-mas-reencauche">
							<div class="col-xs-9 no-padding cartel-mas-seguro">
								<div class="col-xs-8 no-padding img-cartel">
							    	<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/esseguro.svg" alt="">
							    </div>
							    <div class="col-xs-12 texto-cartel">
							    	<?php the_field("texto_es_seguro"); ?>
							    </div>
							</div>
							<div class="col-xs-3 no-padding modal-mas-reencauche-iconos-legal">
								<img  class="col-xs-11 col-sm-10 col-lg-11" src="<?php bloginfo('template_directory');?>/img/iqnet-2.svg" alt="">
								<img  class="col-xs-11 col-sm-10 col-lg-11" src="<?php bloginfo('template_directory');?>/img/certificaciondeprocesos.svg" alt="">
								<img  class="col-xs-11 col-sm-10 col-lg-11" src="<?php bloginfo('template_directory');?>/img/iso14001-2.svg" alt="">
								<img  class="col-xs-11 col-sm-10 col-lg-11" src="<?php bloginfo('template_directory');?>/img/iso9001-2.svg" alt="">
							</div>	
						</div>					
					</div>
					<div class="col-xs-4 col-lg-3 marco-cartel-mas-reencauche2 hidden-xs hidden-sm">
						<div class="col-xs-12 contenido-cartel-mas-reencauche">
							<div class="col-xs-12 img-cartel">
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/esunainversion.svg" alt="">
							</div>
							<div class="col-xs-12 texto-cartel">
								<?php the_field("texto_es_una_inversion"); ?>
							</div>
						</div>					
					</div>
					<div class="col-xs-4 col-lg-3 marco-cartel-mas-reencauche3 hidden-xs hidden-sm">
						<div class="col-xs-12 contenido-cartel-mas-reencauche">
							<div class="col-xs-12 img-cartel">
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/elclientenocompra.svg" alt="">
							</div>
							<div class="col-xs-12 texto-cartel">
								<?php the_field("texto_un_cliente_compra_carcasa"); ?>	
							</div>
						</div>					
					</div>
					<div class="col-xs-4 col-lg-3 marco-cartel-mas-reencauche4 hidden-xs hidden-sm">
						<div class="col-xs-12 contenido-cartel-mas-reencauche">
							<div class="col-xs-12 img-cartel">
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/elprocesoesflexible.svg" alt="">
							</div>
							<div class="col-xs-12 texto-cartel">
								<?php the_field("texto_el_proceso_es_flexible"); ?>
							</div>
							<div class="col-xs-10 col-xs-offset-2 col-sm-8 col-sm-offset-4">
								<a class="btn btn-block btn-cartel" href="<?php echo get_page_link(123); ?>" title="" >
								<i  class="fa fa-mouse-pointer"></i>
									¿Cómo lo hacemos?
								</a>
							</div>
						</div>					
					</div>
					<div class="col-xs-4 col-lg-3 marco-cartel-mas-reencauche5 hidden-xs hidden-sm">
						<div class="col-xs-12 contenido-cartel-mas-reencauche">
							<div class="col-xs-12 img-cartel">
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/leahorradinero.svg" alt="">
							</div>
							<div class="col-xs-12 texto-cartel">
								<?php the_field("texto_le_ahorra_dinero"); ?>
							</div>
							<!-- <div class="col-xs-10 col-xs-offset-2 col-sm-8 col-sm-offset-4">
								<a class=" btn btn-block btn-cartel" href="#" title="" >
									<i  class="fa fa-mouse-pointer"></i>
									¿Cuánto podría ahorrar?
								</a>
							</div> -->
						</div>					
					</div>

					<div class="col-md-2 hidden-xs hidden-sm arbol-reencauche">
						<img class="img-responsive" 	 src="<?php bloginfo('template_directory');?>/img/arbol_reencauche.svg" alt="">						
					</div>

					<div class="col-md-2 hidden-xs hidden-sm arbol-reencauche1">
						<img class="img-responsive" 	 src="<?php bloginfo('template_directory');?>/img/arbol_reencauche.svg" alt="">
					</div>

					<div class="col-md-2 hidden-xs hidden-sm arbol-reencauche2">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/arbol_reencauche.svg" alt="">
					</div>

					<div class="hidden-xs hidden-sm btn-regreso-arriba" id="ir-arriba">
						<a class="btn btn-block" href="#" title="">
							<i class="fa fa-caret-up" aria-hidden="true"></i>
						</a>
					</div>

					<div id="fin" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 btn-modal-reencauche hidden-md hidden-lg">
						<a class="btn btn-block" data-toggle="modal" data-target="#reencaucheModal">
						Conoce más de <br> nuestro reencauche
						</a>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade modal-reencauche hidden-md hidden-lg" id="reencaucheModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content col-sm-8 col-sm-offset-2 no-padding">
						<div class="modal-header headline-modal-reencauche">
							<button type="button" class="close cerrar-modal" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="ion-android-close"></i>
								</span>
							</button>
						</div>
						<div class="modal-body">
						<div class="row">
							<div class="col-xs-9 cartel-mas-seguro">
								<div class="col-xs-12 no-padding img-cartel">
							    	<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/esseguro.svg" alt="">
							    </div>
							    <div class="col-xs-12 texto-cartel">
							    	<p>Contamos con certificacion de calidad de Icontec que respaldan nuestro proceso. <br> <br>Adicionalmente contamos con la tecnología y procesos certificdos por Michelin, esto avala el serivcio de reencauche de Renoboy.</p>
								</div>
							</div>
							<div class="col-xs-3 no-padding modal-mas-reencauche-iconos-legal">
								<img  class="col-xs-11 col-sm-10" src="<?php bloginfo('template_directory');?>/img/iqnet-2.svg" alt="">
								<img  class="col-xs-11 col-sm-10" src="<?php bloginfo('template_directory');?>/img/certificaciondeprocesos.svg" alt="">
								<img  class="col-xs-11 col-sm-10" src="<?php bloginfo('template_directory');?>/img/iso14001-2.svg" alt="">
								<img  class="col-xs-11 col-sm-10" src="<?php bloginfo('template_directory');?>/img/iso9001-2.svg" alt="">
							</div>
							<hr class="col-xs-12 no-padding">
							<div class="col-xs-12 cartel-inversion">
								<div class="col-xs-12 img-cartel">
							    	<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/esunainversion.svg" alt="">
							    </div>
							    <div class="col-xs-12 texto-cartel">
							    	<p>Con el reencuache usted aprovecha al máximo el valor de la llanta, porque le permite optimizar el costo por kilómetro, del buen tratamiento  en el proceso de reencauche también depende que la llanta sea apta para ser reencauchada nuevamente.</p>
								</div>
							</div>
							<hr class="col-xs-12 no-padding">
							<div class="col-xs-12 cartel-cliente">
								<div class="col-xs-12 img-cartel">
							    	<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/elclientenocompra.svg" alt="">
							    </div>
							    <div class="col-xs-12 texto-cartel">
							    	<p>El 80% del valor se concentra en la carcasa, que es la parte fundamental de la llanta, el cuidado de este le permite sacar el máximo provecho  de la llanta. El 20% restante corresponde a la banda de rodamiento, que es la que se reemplaza en el proceso de reencauche.</p>
								</div>
							</div>
							<hr class="col-xs-12 no-padding">
							<div class="col-xs-12 cartel-proceso">
								<div class="col-xs-12 img-cartel">
							    	<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/elprocesoesflexible.svg" alt="">
							    </div>
							    <div class="col-xs-12 texto-cartel">
							    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							    	tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="col-xs-10 col-xs-offset-2 col-sm-8 col-sm-offset-4">
									<a class="btn btn-block btn-cartel" href="#" title="" >
									<i  class="fa fa-mouse-pointer"></i>
										¿Cómo lo hacemos?
									</a>
								</div>
							</div>
							<hr class="col-xs-12 no-padding">
							<div class="col-xs-12 cartel-ahorra">
								<div class="col-xs-12 img-cartel">
							    	<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/leahorradinero.svg" alt="">
							    </div>
							    <div class="col-xs-12 texto-cartel">
							    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							    	consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse
							    	cillum dolore eu fugiat nulla pariatur.</p>
								</div>
								<div class="col-xs-10 col-xs-offset-2 col-sm-8 col-sm-offset-4">
									<a class=" btn btn-block btn-cartel" href="#" title="" >
										<i  class="fa fa-mouse-pointer"></i>
										¿Cuánto podría ahorrar?
									</a>
								</div>
								
							</div>
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-cerrar-modal-reencauche" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>			
			</div>	

		<?php include "menu-fijo.php";?>		
		<?php include "footer.php";?>

		<script type="text/javascript">
	
			/********************************************
			*********************************************
							EVENTS
			*********************************************	
			*********************************************/
				$(document).ready(function(){

					$(window).scroll(function(){
						if ($(this).scrollTop() > 800) {
							$('#ir-arriba').fadeIn();
							// $(".btn-regreso-arriba").css({"bottom": "250px"});
						} else {
							$('#ir-arriba').fadeOut();
						}
					});

					$('#ir-arriba').click(function(){
						$('html, body').animate({scrollTop : 0},800);
						return false;
					});
					
				});

				$(document).scroll(function() {
				    checkOffset();
				});

				function checkOffset() {
				    if($('#camion').offset().top + $('#social-float').height() >= $('#fin').offset().top - 10){
				        $('#social-float').css('position', 'absolute');
				    }
				    if($(document).scrollTop() + window.innerHeight < $('#fin').offset().top){
				        $('#camion').css('position', 'fixed'); // restore when you scroll up
				    }
				}



		</script>

	</body>	
</html>	