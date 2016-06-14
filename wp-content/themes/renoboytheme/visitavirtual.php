<?php
/*
Template Name: Visita Virtual a la planta
*/
?>
	<?php include "header.php";?>

	<div class="col-xs-12 wrapper-contacto no-padding fondo-kilometros-generando-valor">
		<div class="container">
			<div class="col-xs-12 no-padding visitavirtual">
				<div class="col-sm-4 no-padding videocolumn">
					<div class="video-info">
						<h2 id="tituloplanta" class="text-center"><?php echo get_field( "titulo", 1085 );?></h2>
						<div class="col-xs-12">
							<p id="textoplanta"><?php echo get_field( "texto_descriptivo", 1085 );?></p>
						</div>
						<div id="videoplanta" class="col-xs-12 no-padding">
							<video class="img-responsive"  preload="auto" poster="<?php bloginfo('template_directory');?>/img/fondo_video_home.jpg" controls>
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1101 );?>.mp4" type="video/mp4">
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1102 );?>.webm" type="video/webm">
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1103 );?>.ogv" type="video/ogv">
								Your browser does not support the video tag.
							</video> 
						</div>		
						<div id="loader" class="col-xs-12 hidden" style="margin-top: 100px;">
							<div class="loading-spinner"></div>
						</div>				
					</div>
				</div>
				<div class="col-sm-8 has-feedback interactiveplanta">
					<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/planta.svg">
					<button data-postid="1101" class="button1">1</button>
					<button data-postid="1102" class="button2">2</button>
					<button data-postid="1103" class="button3">3</button>
					<button data-postid="1104" class="button4">4</button>
					<button data-postid="1107" class="button5">5</button>
					<button data-postid="1109" class="button6">6</button>
					<button data-postid="1110" class="button7">7</button>
					<button data-postid="1111" class="button8">8</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Registra tus datos para continuar realizando la visita virtual a la planta</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
		      	<form id="registrationform" class="form">
		      		<div class="col-sm-6">
			      		<div class="form-group">
				      	    <label for="nombresapellidos">Nombres y Apellidos</label>
				      	    <input type="text" class="form-control" id="nombresapellidos" placeholder="Nombres y Apellidos" name="nombresapellidos">
				      	</div>
				      	<div class="form-group">
				      	    <label for="nombreempresa">Si usted hace parte de una empresa, por favor ingrese el nombre de ella.</label>
				      	    <input type="text" class="form-control" id="nombreempresa" placeholder="Nombre Empresa" name="empresa" required>
				      	</div>
				      	<div class="form-group">
				      	    <label for="ciudad">Ciudad</label>
				      	    <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad" required>
				      	</div>
				      	<div class="form-group">
				      	    <label for="email">Email</label>
				      	    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				      	</div>
				      	
			      	</div>
			      	<div class="col-sm-6">
			      		<div class="form-group">
				      	    <label for="telefono">Teléfono</label>
				      	    <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" required>
				      	</div>
				      	<div class="form-group select">
				      		<select name="cantidadvehiculos">
				      			<option>
				      				¿Cuántos vehículos tiene?
				      			</option>
				      			<option>
				      				Menos de 10
				      			</option>
				      			<option>
				      				Más de 10
				      			</option>
				      		</select>
				      	</div>
				      	<div class="form-group select">
				      		<select name="tipovehiculos">
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
				      	<div class="form-group">
				      	    <label for="exampleInputPassword1">Contraseña</label>
				      	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
				      	</div>
				      	<div class="form-group">
				      	    <label for="exampleInputPassword2">Confirmar contraseña</label>
				      	    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
				      	</div>
				      	<div class="form-group">
					      	<div class="col-xs-12 checkbox-terminos-condiciones no-padding">
								<input id="checkbox-6" class="col-xs-1 checkbox-buscar" name="checkbox" type="checkbox" required>
								<label for="checkbox-6" class="col-xs-11 checkbox-custom-label no-padding">
									Acepto los <a href="<?php echo get_page_link(21); ?>" target="_blank">términos y condiciones</a></p>
								</label>
							</div>
						</div>
						<div class="pull-right">
							<button id="closeSubscribe" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        			<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
					</div>
		      	</form>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>
	<script type="text/javascript">
		(function($) {

			var dir = "<?php bloginfo('template_directory');?>";
			var postid;

			$(".interactiveplanta button").click(function(){
				$("#loader").removeClass("hidden");
				$("#videoplanta").addClass("hidden");
				postid = $(this).data('postid');	
				
				var data = {
				    'action': 'load_custom_planta',
				    'postid': postid
				};

				$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

			    	if(response.trim() == '"The cookie is false."' || response.trim() == '"1:The cookie is not set."' || response.trim() == '"2:The cookie is not set."'){
			    		console.log(response);
			    		$('#subscribeModal').modal('show');
			    		$("#loader").removeClass("hidden");
						$("#videoplanta").addClass("hidden");
			    	} else {
				    	var r = JSON.parse(response);	
					    $("#tituloplanta").html(r.titulo);   
					    $("#textoplanta").html(r.texto_descriptivo);    

					    $("#videoplanta").html('');
					    $("#videoplanta").prepend('<video class="img-responsive"  preload="auto" poster="'+dir+'/img/fondo_video_home.jpg" controls></video>');
						$("#videoplanta video").append('<source src="'+dir+r.video_link+'.mp4" type="video/mp4">"');
						$("#videoplanta video").append('<source src="'+dir+r.video_link+'.ogg" type="video/ogv">');
						$("#videoplanta video").append('<source src="'+dir+r.video_link+'.webm" type="video/webm">');

						$("#loader").addClass("hidden");
						$("#videoplanta").removeClass("hidden");
					}

				});

			});

			$('#closeSubscribe').click(function(){
			  	$("#loader").addClass("hidden");
				$("#videoplanta").removeClass("hidden");
			});

			 $('#registrationform').submit(function(evt) {
            	evt.preventDefault();
				
				var data = $( this ).serialize();
				
				var data = {
				    'action': 'subscribe_planta',
				    'data': data
				};

				$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

			    	console.log(response);
			    	/*$('#subscribeModal').modal('hide');

			    	var data = {
					    'action': 'load_custom_planta',
					    'postid': postid
					};

					$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

				    	if(response.trim() == '"The cookie is false."' || response.trim() == '"1:The cookie is not set."' || response.trim() == '"2:The cookie is not set."'){
				    		console.log(response);
				    		$('#subscribeModal').modal('show');
				    	} else {
					    	var r = JSON.parse(response);	
						    $("#tituloplanta").html(r.titulo);   
						    $("#textoplanta").html(r.texto_descriptivo);    

						    $("#videoplanta").html('');
						    $("#videoplanta").prepend('<video class="img-responsive"  preload="auto" poster="'+dir+'/img/fondo_video_home.jpg" controls></video>');
							$("#videoplanta video").append('<source src="'+dir+r.video_link+'.mp4" type="video/mp4">"');
							$("#videoplanta video").append('<source src="'+dir+r.video_link+'.ogg" type="video/ogv">');
							$("#videoplanta video").append('<source src="'+dir+r.video_link+'.webm" type="video/webm">');

							$("#loader").addClass("hidden");
							$("#videoplanta").removeClass("hidden");
						}

					});*/
			    	
				});

			});

			$("form").validate({
			  	submitHandler: function(form) {
			    	form.submit();
			  	}
			});

		})( jQuery );
	</script>

