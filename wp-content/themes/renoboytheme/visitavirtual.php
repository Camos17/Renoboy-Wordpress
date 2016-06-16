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
						<h2 id="tituloplanta" class="text-center"><?php echo get_field( "titulo", 1101 );?></h2>
						<div class="col-xs-12">
							<p id="textoplanta"><?php echo get_field( "texto_descriptivo", 1101 );?></p>
						</div>
						<div id="videoplanta" class="col-xs-12 no-padding">
							<video class="img-responsive"  preload="auto" poster="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1101 );?>.jpg" controls>
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1101 );?>.mp4" type="video/mp4">
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1101 );?>.webm" type="video/webm">
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1101 );?>.ogv" type="video/ogv">
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
	<!-- Login Modal -->
	<div id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;     </button>
	        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
	        <h4 class="modal-title"> <img src="<?php bloginfo('template_directory');?>/img/logorenoboy.svg" alt="Renoboy"/></h4>
	        </div>
	      </div>
	      <div class="modal-body">
	        <form id="loginform" role="form">
	          <div class="row">
	          	<div id="loginmessage"></div>
	            <div class="col-md-6 col-md-offset-3">
	              <div class="form-group">  
	                <label for="loginEmail">Email                          </label>
	                <input id="loginEmail" type="email" name="email" placeholder="Email" class="form-control"/>
	              </div>
	              <div class="form-group">
	                <label for="loginPassword">Contraseña</label>
	                <input id="loginPassword" type="password" name="password" placeholder="Contraseña" class="form-control"/>
	              </div>
	              <div class="form-group">
	                <a data-toggle="modal" data-target="#forgotPswdModal" href="/#" data-dismiss="modal">¿Olvidó su contraseña?</a>
	              </div>
	              <div class="input-group col-md-12">
	                <input type="submit" value="Iniciar sesión" class="col-md-12 btn btn-primary btn-lg"/>
	              </div>
	            </div>
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <div class="textleft">¿Aun no esta registrado? <a data-toggle="modal" data-target="#subscribeModal" href="/#" data-dismiss="modal">Registrate</a></div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Forgot Password Modal -->
	<div id="forgotPswdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;     </button>
	        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
	        	<h4 class="modal-title"> <img src="<?php bloginfo('template_directory');?>/img/logorenoboy.svg" alt="Renoboy"/></h4>
	        </div>
	      </div>
	      <div class="modal-body">
	        <form  method="post" role="form">
	          <div class="form-group">
	            <div class="row">
	              <div class="col-md-10 col-md-offset-1">
	                <p class="forgot-heading">¿Olvidó su contraseña?, Ingresa el email asociado a tu cuenta, nosotros enviaremos un link para reestablecer tu contraseña.</p>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-6 col-md-offset-3">                                  
	                <div class="form-group">  
	                  <label for="loginInputEmail">Email</label>
	                  <input id="forgotInputEmail" type="email" name="email" placeholder="Email" class="form-control"/>
	                </div><br/>
	                <div class="input-group col-md-12">
	                  <input type="submit" value="Reestablecer" class="col-md-12 btn btn-primary btn-lg"/>
	                </div>
	              </div>
	            </div>
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Registration Modal -->
	<div class="modal fade" id="validationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
	        	
	        	<h4 class="modal-title"> <img src="<?php bloginfo('template_directory');?>/img/logorenoboy.svg" alt="Renoboy"/></h4>
	        	
	        </div>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div id="validationsuccess" class="col-xs-12 col-md-8 col-md-offset-2 hidden">
	      			<p class="text-center success-check">
	      				<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
	      				<br>
	      				Gracias! Hemos verificado tu correo, ya puedes continuar navegando en nuestra planta virtual.
	      			</p>
	      			<button id="closeSubscribe" type="button" class="btn btn-primary btn-lg center-block" data-dismiss="modal">Cerrar</button>
	      		</div>
	      		<div id="validationerror" class="col-xs-12 col-md-8 col-md-offset-2 hidden">
	      			<p class="text-center error-check">
	      				<i class="fa fa-lock" aria-hidden="true"></i>
	      				<br>
	      				Lo sentimos, tu link pudo haber caducado.
	      				<br>
	      				<br>
	      				<a data-toggle="modal" data-target="#loginModal" href="/#" data-dismiss="modal">Click aqui para loggearse <span class="fa fa-long-arrow-right"></a>
	      				<br>
	      				<a data-toggle="modal" data-target="#forgotPswdModal" href="/#" data-dismiss="modal">¿Olvidó su contraseña?</a>	      				
	      			</p>
					<button id="closeSubscribe" type="button" class="btn btn-default center-block" data-dismiss="modal">Cerrar</button>		        			
	      		</div>		      	
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Registration Modal -->
	<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
	        	<div class="col-sm-10 col-sm-offset-1">
	        		<h4 class="modal-title"> <img src="<?php bloginfo('template_directory');?>/img/logorenoboy.svg" alt="Renoboy"/></h4>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div id="subscribesuccess" class="col-xs-12 col-md-6 col-md-offset-3 hidden">
	      			<p class="text-center success-check">
	      				<i class="fa fa-check-circle" aria-hidden="true"></i>
	      				<br>
	      				En unos minutos recibirá un correo con las instrucciones para continuar.
	      			</p>
	      			<button id="closeSubscribe" type="button" class="btn btn-primary btn-lg center-block" data-dismiss="modal">Cerrar</button>
	      		</div>
	      		<div id="subscribeerror" class="col-xs-12 col-md-6 col-md-offset-3 hidden">
	      			<p class="text-center error-check">
	      				<i class="fa fa-lock" aria-hidden="true"></i>
	      				<br>
	      				Lo sentimos, verifique que no se encuentre ya registrado.
	      				<br>
	      				<br>
	      				<a id="backtoregistration" href="#"><span class="fa fa-long-arrow-left"></span> Regresar al formulario</a>
	      				<br>
	      				<a data-toggle="modal" data-target="#loginModal" href="/#" data-dismiss="modal">Click aqui para loggearse</a>
	      				<br>
	      				<a data-toggle="modal" data-target="#forgotPswdModal" href="/#" data-dismiss="modal">¿Olvidó su contraseña?</a>	      				
	      			</p>
					<button id="closeSubscribe" type="button" class="btn btn-default center-block" data-dismiss="modal">Cerrar</button>		        			
	      		</div>
		      	<form id="registrationform" class="form">
		      		<div class="col-xs-12">
		      			<h5>Registre sus datos para continuar realizando la visita virtual a la planta<br><br></h5>
		      		</div>
		      		<div class="col-sm-6">
			      		<div class="form-group">
				      	    <label for="nombresapellidos">Nombres y Apellidos</label>
				      	    <input type="text" class="form-control" id="nombresapellidos" placeholder="Nombres y Apellidos" name="nombresapellidos" required>
				      	</div>
				      	<div class="form-group">
				      	    <label for="nombreempresa">¿Hace parte usted de alguna empresa?*</label>
				      	    <input type="text" class="form-control" id="nombreempresa" placeholder="Nombre Empresa [opcional]" name="empresa">
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
				      	    <label for="pswd">Contraseña</label>
				      	    <input type="password" class="form-control" id="pswd" placeholder="Contraseña" name="password" name="password" required>
				      	</div>
				      	<div class="form-group">
				      	    <label for="cpswd">Confirmar contraseña</label>
				      	    <input type="password" class="form-control" id="cpswd" placeholder="Confirmación contraseña" name="cpassword" required>
				      	     <p id="help" class="help-block" style="display:none;">Verificar que ambas contraseñas concuerden.</p>
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
		        			<button type="submit" class="btn btn-primary btn-lg">Registrar</button>
						</div>						
					</div>
		      	</form>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <div class="textleft">¿Ya se encuentra registrado?<a data-toggle="modal" data-target="#loginModal" href="/#" data-dismiss="modal"> Hacer click aqui para loggearse</a></div>
	      </div>
	    </div>
	  </div>
	</div>

	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>
	<script type="text/javascript">
		(function($) {
			var emailparam = '-';
			var tokenparam = '-';

			$(document).ready(function() { 
	            emailparam = getParameterByName('email');
	            tokenparam = getParameterByName('token');
	            console.log(emailparam+"-"+tokenparam);
	            if(tokenparam != '-' && emailparam != '-'){

	            	var data = {
					    'action': 'validate_token',
					    'email': emailparam,
					    'token': tokenparam
					};

	            	$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

	            		console.log(response);
	            		if(response.trim() == 'match'){
	            			$('#validationsuccess').removeClass("hidden");
	            		} else {
	            			$('#validationerror').removeClass("hidden");
	            		}
	            		$('#validationModal').modal('show');    	

	            	});
	            	
	            }
	        });

	        function getParameterByName(name) {
	            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	                results = regex.exec(location.search);
	            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	        }

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
			    		$('#subscribeModal').modal('show');
			    		$("#loader").removeClass("hidden");
						$("#videoplanta").addClass("hidden");
			    	} else {
				    	var r = JSON.parse(response);	
					    $("#tituloplanta").html(r.titulo);   
					    $("#textoplanta").html(r.texto_descriptivo);    

					    $("#videoplanta").html('');
					    $("#videoplanta").prepend('<video class="img-responsive"  preload="auto" poster="'+dir+r.video_link+'.jpg" controls></video>');
						$("#videoplanta video").append('<source src="'+dir+r.video_link+'.mp4" type="video/mp4">"');
						$("#videoplanta video").append('<source src="'+dir+r.video_link+'.ogg" type="video/ogv">');
						$("#videoplanta video").append('<source src="'+dir+r.video_link+'.webm" type="video/webm">');

						$("#loader").addClass("hidden");
						$("#videoplanta").removeClass("hidden");
					}

				});

			});

			$("#backtoregistration").click(function(){
			    $("#subscribeerror").addClass("hidden");
			    $('#registrationform').removeClass("hidden");
			});

			$('#subscribeModal').on('hidden.bs.modal', function (e) {
			  	$("#loader").addClass("hidden");
				$("#videoplanta").removeClass("hidden");
				$('#registrationform').removeClass("hidden");
			    $("#subscribeerror").addClass("hidden");
			    $("#subscribesuccess").addClass("hidden");
			});

			$('#registrationform').submit(function(evt) {
            	evt.preventDefault();

            	var pass1 = $("#pswd").val(); 
				var pass2 = $("#cpswd").val(); 
					
				if(pass1 == pass2 && pass1.length !== 0 && pass2.length !== 0){

					var data = $( this ).serialize();
					
					var data = {
					    'action': 'subscribe_planta',
					    'data': data
					};

					$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {
						var r = JSON.parse(response);	
				    	console.log(r);
				    	if(r == "registro exitoso"){
				    		console.log("opcion1");
				    		$('#registrationform').addClass("hidden");
				    		$("#subscribesuccess").removeClass("hidden");
				    		document.getElementById("registrationform").reset();
				    		$("#help").fadeOut("slow");

				    	} else if(r == "ya se encuentra registrado"){
				    		console.log("opcion2");
				    		$('#registrationform').addClass("hidden");
				    		$("#subscribeerror").removeClass("hidden");
				    	} else {
				    		console.log("opcion3");
				    		$('#registrationform').addClass("hidden");
				    		$("#subscribeerror").removeClass("hidden");
				    	}
				    	
					});
				} else {
					$("#cpswd").focus();
					$("#help").fadeIn("slow");
				}

			});

			$('#loginform').submit(function(evt) {
            	
            	evt.preventDefault();

    	    	var data = {
    			    'action': 'login_planta',
    			    'data': $( this ).serialize()
    			};

    			$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {
    				if(response.trim() == '"YES, Matched"'){
    					$('#loginModal').modal('hide');
    				} else {
    					console.log(response);
    					$("#loginmessage").html("<p class='text-center text-danger form-group'>"+response+"</p>");
    				}

    		    	/*if(response.trim() == '"The cookie is false."' || response.trim() == '"1:The cookie is not set."' || response.trim() == '"2:The cookie is not set."'){
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
    				}*/

    			});
            });


			$("form").validate({
			  	submitHandler: function(form) {
			    	
			  	}
			});

		})( jQuery );
	</script>

