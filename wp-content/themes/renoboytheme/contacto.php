<?php
/*
Template Name: Contacto
*/
?>
	<?php include "header.php";?>

	<div class="col-xs-12 wrapper-contacto no-padding fondo-contacto">
		<div class="col-xs-12 layer-fondo-contacto">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 contenido-contacto">
							
				<form class="col-xs-12 no-padding contenido-contacto-cliente">
					<div class="col-xs-12 headline-contacto-cliente">
						<h2>Contacto Cliente / Distribuidor</h2>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente1">
						<div class="col-xs-12 no-padding dropdown filtro-asunto">
							<div class="col-xs-12 select">
								<select class="col-xs-6 form-control">
									<option>
										Asunto
									</option>
									<option>
										Felicitaciones, quejas, reclamos y comentarios
									</option>
									<option>
										Comprar reencauche
									</option>
									<option>
										Producto
									</option>
									<option>
										Promociones vigentes
									</option>
									<option>
										Publicidad y Patrocinio
									</option>
									<option>
										Información sobre Centros de Servicio
									</option>
									<option>
										Información de Garantía
									</option>
									<option>
										Contacto Súper Intendencia Industria y Comercio: http://www.sic.gov.co/drupal/proteccion-del-consumidor (este es un link al sitio de la SIC)3
									</option>
									<option>
										Otros
									</option>
								</select>
							</div>							
						</div>									
						<div class="col-xs-12 no-padding formulario-contacto-cliente">
							<div class="form-group">
								<input type="" class="form-control" id="razon-social" placeholder="Razón Social*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="nombres-apellidos" placeholder="Contacto (Nombre y Apellidos)*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="ciudad" placeholder="Ciudad*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="e-mail" placeholder="E-mail*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="telefono" placeholder="Número de Teléfono">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente2">
						<div class="col-xs-12 col-sm-10 no-padding">
							<textarea class="form-control" name="" rows="7" placeholder="MENSAJE"></textarea>
						</div>
						<p class="col-xs-12 parrafo1 no-padding">Limite de carácteres 0 a 250</p>

						<div class="col-xs-12 checkbox-terminos-condiciones">
							<input id="checkbox-4" class="col-xs-1 checkbox-buscar" name="checkbox-4" type="checkbox" checked="">
        					<label for="checkbox-4" class="col-xs-11 checkbox-custom-label">
        						Aceptas los <a href="#" title="">terminos y condiciones</a></p>
        					</label>
        				</div>
						<div class="col-xs-12 checkbox-promociones">
							<input id="checkbox-5" class="col-xs-1 checkbox-buscar" name="checkbox-5" type="checkbox" checked="">
        					<label for="checkbox-5" class="col-xs-11 checkbox-custom-label">Deseo recibir, ofertas especiales y noticias <span class="span1">Renoboy</span>.<br>Tu información está protegida por la estricta Política de Privacidad <span class="span2">Renoboy S.A.</span> y no será entregada a terceros bajo ninguna circunstancia.</label>
        				</div>
        				<button type="button" class="col-xs-4 col-xs-push-8 col-sm-3 col-sm-push-0 btn btn-default btn-enviar-formulario">
        					Enviar
        				</button>
					</div>
					<div class="col-xs-12 col-sm-4 btn-regresar-contacto">
						<a class="col-xs-12 no-padding btn btn-regresar-contacto2" href="#" title=""><span> <i class="fa fa-angle-left" aria-hidden="true"></i> REGRESAR A CONTÁCTENOS</span></a>
					</div>				
				</form>
				<form class="col-xs-12 no-padding contenido-contacto-nocliente">
					<div class="col-xs-12 headline-contacto-cliente">
						<h2>Contacto</h2>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente1">
						<div class="col-xs-12 no-padding dropdown filtro-asunto">
							<div class="col-xs-12 select">
								<select class="col-xs-6 form-control">
									<option>
										Asunto
									</option>
									<option>
										Felicitaciones, quejas, reclamos y comentarios
									</option>
									<option>
										Comprar reencauche
									</option>
									<option>
										Producto
									</option>
									<option>
										Promociones vigentes
									</option>
									<option>
										Publicidad y Patrocinio
									</option>
									<option>
										Información sobre Centros de Servicio
									</option>
									<option>
										Información de Garantía
									</option>
									<option>
										Contacto Súper Intendencia Industria y Comercio: http://www.sic.gov.co/drupal/proteccion-del-consumidor (este es un link al sitio de la SIC)3
									</option>
									<option>
										Otros
									</option>
								</select>
							</div>
						</div>									
						<div class="col-xs-12 no-padding formulario-contacto-cliente">
							<div class="form-group">
								<input type="" class="form-control" id="nombres" placeholder="Nombres*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="apellidos" placeholder="Apellidos*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="razon-social" placeholder="Razón Social*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="direccion" placeholder="Dirección*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="ciudad" placeholder="Ciudad*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="e-mail" placeholder="E-mail*">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="telefono" placeholder="Número de Teléfono*">
							</div>
						</div>
						<div class="col-xs-12 filtro-numero-vehiculos select">
							<select class="col-xs-6 form-control">
								<option>
									Cuántos vehículos tiene?
								</option>
								<option>
									Menos de 10
								</option>
								<option>
									Más de 10
								</option>
							</select>
						</div>
						<div class="col-xs-12 filtro-tipo-vehiculo select">
							<select class="col-xs-6 form-control">
								<option>
									Tipo de Vehículo
								</option>
								<option>
									Buses
								</option>
								<option>
									Camiones
								</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente2">
						<div class="col-xs-12 col-sm-10 no-padding">
							<textarea class="form-control" name="" rows="7" placeholder="MENSAJE"></textarea>
						</div>
						<p class="col-xs-12 parrafo1 no-padding">Limite de carácteres 0 a 250</p>		
						<div class="col-xs-12 checkbox-terminos-condiciones">
							<input id="checkbox-6" class="col-xs-1 checkbox-buscar" name="checkbox-6" type="checkbox" checked="">
        					<label for="checkbox-6" class="col-xs-11 checkbox-custom-label">
        						Aceptas los <a href="#" title="">terminos y condiciones</a></p>
        					</label>
        				</div>
						<div class="col-xs-12 checkbox-promociones">
							<input id="checkbox-7" class="col-xs-1 checkbox-buscar" name="checkbox-7" type="checkbox" checked="">
        					<label for="checkbox-7" class="col-xs-11 checkbox-custom-label">Deseo recibir, ofertas especiales y noticias <span class="span1">Renoboy</span>.<br>Tu información está protegida por la estricta Política de Privacidad <span class="span2">Renoboy S.A.</span> y no será entregada a terceros bajo ninguna circunstancia.</label>
        				</div>
        				<button type="button" class="col-xs-4 col-xs-push-8 col-sm-3 col-sm-push-0 btn btn-default btn-enviar-formulario">
        					Enviar
        				</button>
					</div>
					<div class="col-xs-12 col-sm-4 btn-regresar-contacto">
						<a class="col-xs-12 btn no-padding btn-regresar-contacto2" href="#" title=""><span> <i class="fa fa-angle-left" aria-hidden="true"></i> REGRESAR A CONTÁCTENOS</span></a>
					</div>		
				</form>

				<div class="col-xs-12 col-sm-10 col-sm-offset-1 no-padding contenido1 contenido-escribenos">
					<div class="col-xs-3 col-sm-2 no-padding icono">
						<span class="col-xs-12">
							<i class="col-xs-12 no-padding fa fa-envelope"></i>
						</span>
					</div>
					<div class="col-xs-8 col-xs-offset-1 col-sm-9 col-sm-offset-0">
						<div class="col-xs-12 col-sm-8 no-padding texto-contenido">
							<p>Escríbanos</p>
							<p>Es Distribuidor o Cliente actual de Renoboy?</p>
						</div>
						<div class="col-xs-12 col-sm-4 btns-opciones">
							<a class="col-xs-3 col-xs-push-5 col-sm-push-1 btn btn-opcion-si" href="#" title="">Si</a>
							<a class="col-xs-3 col-xs-push-5 col-sm-push-1 btn btn-opcion-no" href="#" title="">No</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 no-padding contenido1">
					<div class="col-xs-3 col-sm-2 no-padding icono contacto-icono2">
						<span class="col-xs-12">
							<i class="col-xs-12 no-padding fa fa-phone"></i>
						</span>
					</div>
					<div class="col-xs-8 col-xs-offset-1 col-sm-9 col-sm-offset-0">
						<div class="col-xs-12 no-padding texto-contenido">
							<p>Llámenos</p>
							<p>Línea <a href="tel: 018000 510  141" title="">018000 510  141</a> <br>
							Lunes a Viernes  de 8:00 a.m. a 5:00 p.m. <br>
							Sábado  8:00 a.m.  a 12:00 	p.m. </p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 no-padding contenido1 contenido-ubicar">
					<div class="col-xs-3 col-sm-2 no-padding icono">
						<span class="col-xs-12">
							<i class="col-xs-12 no-padding fa fa-map-marker"></i>
						</span>
					</div>
					<div class="col-xs-8 col-xs-offset-1 col-sm-9 col-sm-offset-0">
						<div class="col-xs-12 no-padding texto-contenido">
							<p>Ubicar un Centro de  Servicio</p>
							<p>Encuentre su distribuidor más cercano <a href="reddedistribuidores.php" title="">aquí</a></p>
						</div>
					</div>
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

			$(".btn-regresar-contacto2").click(function(){
				$(".contenido-contacto-cliente").fadeOut(1000, function(){
					$(".contenido1").fadeIn(1000);
				});
				$(".contenido-contacto-nocliente").fadeOut(1000, function(){
					$(".contenido1").fadeIn(1000);		
				});	
			});

			$(".btn-opcion-si").click(function(){
				$(".contenido1").fadeOut(1000, function(){
					$(".contenido-contacto-cliente").fadeIn(1000);		
				});
			});

			$(".btn-opcion-no").click(function(){
				$(".contenido1").fadeOut(1000, function(){
					$(".contenido-contacto-nocliente").fadeIn(1000);
				});
			});

	</script>