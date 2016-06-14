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
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1085 );?>.mp4" type="video/mp4">
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1085 );?>.webm" type="video/webm">
								<source src="<?php bloginfo('template_directory');?><?php echo get_field( "video_link", 1085 );?>.ogv" type="video/ogv">
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
					<button data-postid="1085" class="button1">1</button>
					<button data-postid="1087" class="button2">2</button>
					<button data-postid="1088" class="button3">3</button>
					<button data-postid="1089" class="button4">4</button>
					<button data-postid="1090" class="button5">5</button>
					<button data-postid="1091" class="button6">6</button>
					<button data-postid="1092" class="button7">7</button>
					<button data-postid="1093" class="button8">8</button>
					<button data-postid="1094" class="button9">9</button>
					<button data-postid="1096" class="button10">10</button>
					<button data-postid="1097" class="button11">11</button>
					<button data-postid="1098" class="button12">12</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">¿Desea continuar realizando la visita virtual a la planta?</h4>
	      </div>
	      <div class="modal-body">
	      	<form id="registrationform" class="form">
	      		<div class="form-group">
		      	    <label for="nombresapellidos">Nombres y Apellidos</label>
		      	    <input type="text" class="form-control" id="nombresapellidos" placeholder="Nombres y Apellidos" name="nombresapellidos">
		      	</div>
		      	<div class="form-group">
		      	    <label for="nombreempresa">Si usted hace parte de una empresa, por favor ingrese el nombre de ella.</label>
		      	    <input type="text" class="form-control" id="nombreempresa" placeholder="Nombre Empresa" name="nombreempresa">
		      	</div>
		      	<div class="form-group">
		      	    <label for="exampleInputEmail1">Email address</label>
		      	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		      	</div>
	      	  <div class="form-group">
	      	    <label for="exampleInputPassword1">Password</label>
	      	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	      	  </div>
	      	  <div class="form-group">
	      	    
	      	  </div>
	      	  <div class="checkbox">
	      	    <label>
	      	      <input type="checkbox"> Check me out
	      	    </label>
	      	  </div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button id="closeSubscribe" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button id="submitregistration" type="button" class="btn btn-primary">Registrar</button>
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

			$("#submitregistration").click(function(){
				var email = $("#emailregister").val();	
				
				var data = {
				    'action': 'subscribe_planta',
				    'email': email
				};

				$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

			    	console.log(response);
			    	$('#subscribeModal').modal('hide');

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

					});
			    	
				});

			});

		})( jQuery );
	</script>

