<?php
/*
Template Name: Contacto
*/
?>
	<?php include "header.php";?>

	<div class="col-xs-12 wrapper-contacto no-padding fondo-contacto">
		<div class="col-xs-12 layer-fondo-contacto">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 contenido-contacto">
							
				<form id="clienteform" method="post" action="<?php bloginfo('template_url'); ?>/mailer.php"  class="col-xs-12 no-padding contenido-contacto-cliente">
					<div class="col-xs-12 headline-contacto-cliente">
						<h2>Contacto Cliente / Distribuidor</h2>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente1">
						<div id="form-messages"></div>
						<div class="col-xs-12 no-padding dropdown filtro-asunto">
							<div class="col-xs-12 select">
								<select class="col-xs-6 form-control" name="asunto">
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
										Otros
									</option>
								</select>
							</div>							
						</div>									
						<div class="col-xs-12 no-padding formulario-contacto-cliente">
							<div class="form-group">								
								<input type="text" class="form-control" id="razon-social" name="razonsocial" placeholder="Nombre Empresa*" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Contacto (Nombre y Apellidos)*" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad*" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="e-mail" name="email" placeholder="E-mail*" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número de Teléfono">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente2">
						<div class="col-xs-12 col-sm-10 no-padding">
							<textarea id="mensajeone" class="form-control" name="mensaje" rows="7" placeholder="MENSAJE"></textarea>
						</div>
						<p class="col-xs-12 parrafo1 no-padding">Limite de carácteres 0 a 250</p>

						<div class="col-xs-12 checkbox-terminos-condiciones">
							<input id="checkbox-4" class="col-xs-1 checkbox-buscar" name="terminos" type="checkbox" checked="" required>
        					<label for="checkbox-4" class="col-xs-11 checkbox-custom-label">
        						Aceptas los <a href="<?php echo get_page_link(21); ?>" target="_blank" title="">terminos y condiciones</a></p>
        					</label>
        				</div>
						<div class="col-xs-12 checkbox-promociones">
							<input id="checkbox-5" class="col-xs-1 checkbox-buscar" name="ofertasnoticias" type="checkbox" checked="">
        					<label for="checkbox-5" class="col-xs-11 checkbox-custom-label">Deseo recibir, ofertas especiales y noticias <span class="span1">Renoboy</span>.<br>Tu información está protegida por la estricta Política de Privacidad <span class="span2">Renoboy S.A.</span> y no será entregada a terceros bajo ninguna circunstancia.</label>
        					<label class="col-sm-11 col-sm-offset-1">Contacto Súper Intendencia Industria y Comercio: (Por favor haga clic <a href="http://www.sic.gov.co" target="_blank">aquí</a>)</label>
        				</div>
        				<button id="btnenvio" type="submit" class="col-xs-4 col-xs-push-8 col-sm-3 col-sm-push-0 btn btn-default btn-enviar-formulario">
        					Enviar
        				</button>
					</div>
					<div class="col-xs-12 col-sm-4 btn-regresar-contacto">
						<a class="col-xs-12 no-padding btn btn-regresar-contacto2" href="#" title=""><span> <i class="fa fa-angle-left" aria-hidden="true"></i> REGRESAR A CONTÁCTENOS</span></a>
					</div>				
				</form>
				<form id="noclienteform" method="post" action="<?php bloginfo('template_url'); ?>/nomailer.php" class="col-xs-12 no-padding contenido-contacto-nocliente">
					<div class="col-xs-12 headline-contacto-cliente">
						<h2>Contacto</h2>
						<div id="formno-messages"></div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 no-padding contenido-contacto-cliente1">
						<div class="col-xs-12 no-padding dropdown filtro-asunto">
							<div class="col-xs-12 select">
								<select class="col-xs-6 form-control" name="asunto">
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
										Otros
									</option>
								</select>
							</div>
						</div>									
						<div class="col-xs-12 no-padding formulario-contacto-cliente">
							<div class="form-group">
								<input type="" class="form-control" id="nombres" placeholder="Nombres*" name="nombre" required>
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="apellidos" placeholder="Apellidos*" name="apellido" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="nombre-empresa" placeholder="¿Es empresa?, en caso de que si colocar el nombre de la empresa" name="empresa">
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="direccion" placeholder="Dirección*" name="direccion" required>
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="ciudad" placeholder="Ciudad*" name="ciudad" required>
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="e-mail" placeholder="E-mail*" name="email" required>
							</div>
							<div class="form-group">
								<input type="" class="form-control" id="telefono" placeholder="Número de Teléfono*" name="telefono" required>
							</div>
						</div>
						<div class="col-xs-12 filtro-numero-vehiculos select">
							<select class="col-xs-6 form-control" name="numvehiculos" required>
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
							<select class="col-xs-6 form-control" name="tipovehiculos" required>
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
							<textarea id="mensaje" class="form-control" name="mensaje" rows="7" placeholder="MENSAJE" required></textarea>
						</div>
						<p class="col-xs-12 parrafo1 no-padding">Limite de carácteres 0 a 250</p>		
						<div class="col-xs-12 checkbox-terminos-condiciones">
							<input id="checkbox-6" class="col-xs-1 checkbox-buscar" name="checkbox-6" type="checkbox" required>
							<label for="checkbox-6" class="col-xs-11 checkbox-custom-label">
								Aceptas los <a href="<?php echo get_page_link(21); ?>" target="_blank" title="">términos y condiciones</a></p>
							</label>
						</div>
						<div class="col-xs-12 checkbox-promociones">
							<input id="checkbox-7" class="col-xs-1 checkbox-buscar" name="checkbox-7" type="checkbox" checked="">
        					<label for="checkbox-7" class="col-xs-11 checkbox-custom-label">Deseo recibir, ofertas especiales y noticias <span class="span1">Renoboy</span>.<br>Tu información está protegida por la estricta Política de Privacidad <span class="span2">Renoboy S.A.</span> y no será entregada a terceros bajo ninguna circunstancia.</label>
        					<label class="col-sm-11 col-sm-offset-1">Contacto Súper Intendencia Industria y Comercio: (Por favor haga clic <a href="http://www.sic.gov.co" target="_blank">aquí</a>)</label>
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
							<p>Encuentre su distribuidor más cercano <a href="<?php echo get_page_link(11); ?>" title="">aquí</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	


	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>

	<script type="text/javascript">
		(function($) {
	
		/********************************************
		*********************************************
						EVENTS
		*********************************************	
		*********************************************/


			/*$("#checkbox-empresas").click( function(){
			   if( $(this).is(':checked') ){
			   	 $("#nombre-empresa").fadeIn(600);
			   	 // $("#nombre-empresa").removeClass("hidden");
			   } else {
			   	$("#nombre-empresa").fadeOut(600);
			   	// $("#nombre-empresa").addClass("hidden");
			   }
			});*/

			// $("checkbox-empresas").onchange = function() {
			//     // Check if the checkbox is checked, and show/hide the text field.
			//     $("nombre-empresa").hidden = this.checked ? false : true;
			// };		

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

			/*FORM CLIENTE*/
	   
	        // Get the form.
	        var form = $('#clienteform');

	        // Get the messages div.
	        var formMessages = $('#form-messages');

	        // Set up an event listener for the contact form.
	        $(form).submit(function(event) {
	            // Stop the browser from submitting the form.
	            event.preventDefault();

	            

	            $('#btnenvio').prop('disabled', true);

	            var formData = $(form).serialize();
	            $.ajax({
	                type: 'POST',
	                url: $(form).attr('action'),
	                data: formData
	            })
	            .done(function(response) {
	                console.log(response);
	                // Make sure that the formMessages div has the 'success' class.
	                $(formMessages).removeClass('error');
	                $(formMessages).addClass('success');

	                // Set the message text.
	                $(formMessages).text('Gracias! Tu mensaje ha sido enviado.');

	                // Clear the form.
	                $('#razon-social').val('');
	                $('#nombre').val('');
	                $('#ciudad').val('');
	                $('#e-mail').val('');
	                $('#telefono').val('');
	                $('#mensajeone').val('');
	                $('#btnenvio').prop('disabled', false);
	            })
	            .fail(function(data) {
	                console.log('error');
	                console.log(data);
	                // Make sure that the formMessages div has the 'error' class.
	                $(formMessages).removeClass('success');
	                $(formMessages).addClass('error');

	                // Set the message text.
	                if (data.responseText !== '') {
	                    $(formMessages).text(data.responseText);
	                } else {
	                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
	                }
	            });
	        });

			/*FORM CLIENTE*/
	   
	        // Get the form.
	        var formnocliente = $('#noclienteform');

	        // Get the messages div.
	        var formMessages = $('#form-messages-no');

	        // Set up an event listener for the contact form.
	        $(formnocliente).submit(function(event) {
	            // Stop the browser from submitting the form.
	            event.preventDefault();

	            console.log('enviado');

	            $('#btnenvio').prop('disabled', true);

	            var formData = $(form).serialize();
	            $.ajax({
	                type: 'POST',
	                url: $(form).attr('action'),
	                data: formData
	            })
	            .done(function(response) {
	                // Make sure that the formMessages div has the 'success' class.
	                $(formMessages).removeClass('error');
	                $(formMessages).addClass('success');

	                // Set the message text.
	                $(formMessages).text(response);

	                // Clear the form.
	                $('#razon-social').val('');
	                $('#nombre').val('');
	                $('#ciudad').val('');
	                $('#e-mail').val('');
	                $('#telefono').val('');
	                $('#mensajeone').val('');
	                $('#btnenvio').prop('disabled', false);
	            })
	            .fail(function(data) {
	                console.log('error');
	                console.log(data);
	                // Make sure that the formMessages div has the 'error' class.
	                $(formMessages).removeClass('success');
	                $(formMessages).addClass('error');

	                // Set the message text.
	                if (data.responseText !== '') {
	                    $(formMessages).text(data.responseText);
	                } else {
	                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
	                }
	            });
	        });

	    })( jQuery );
	    
	</script>