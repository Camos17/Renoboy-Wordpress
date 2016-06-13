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
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#subscribeModal">
						  Launch demo modal
						</button>					
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
	      	<form class="form">
	        <label>Por favor registre su correo electronico</label>
	        <input class="form-control" type="text" placeholder="ingrese su email"> 
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>
	<script type="text/javascript">
		(function($) {

			var dir = "<?php bloginfo('template_directory');?>";

			$(".interactiveplanta button").click(function(){
				var postid = $(this).data('postid');	
				
				var data = {
				    'action': 'load_custom_post',
				    'postid': postid
				};

				$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {
			    
				    var r = JSON.parse(response);	
				    $("#tituloplanta").html(r.titulo);   
				    $("#textoplanta").html(r.texto_descriptivo);    

				    $("#videoplanta").html('');
				    $("#videoplanta").prepend('<video class="img-responsive"  preload="auto" poster="'+dir+'/img/fondo_video_home.jpg" controls></video>');
					$("#videoplanta video").append('<source src="'+dir+r.video_link+'.mp4" type="video/mp4">"');
					$("#videoplanta video").append('<source src="'+dir+r.video_link+'.ogg" type="video/ogv">');
					$("#videoplanta video").append('<source src="'+dir+r.video_link+'.webm" type="video/webm">');

				});

			});

		})( jQuery );
	</script>

