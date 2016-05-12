<?php
/*
Template Name: Noticias
*/
?>
		<?php include "header.php";?>
		<div class="col-xs-12 no-padding content-wrapper fondo-noticias">	
			<div class="container">
				<div class="col-xs-12 no-padding noticias">
					<div class="col-sm-6 col-md-4 col-md-offset-0 no-padding c1-noticias">
						<div class="col-xs-12 c1-noticias-headline">
							<h1 class="text-center">NOTICIAS DE INTERÉS</h1>	
						</div>
						<div id="noticias-wrapper" class="col-xs-12 no-padding noticias-wrapper mCustomScrollbar" data-mcs-theme="rounded-dark">

							<?php 

								// get posts
								$posts = get_posts(array(
									'post_type'			=> 'noticias'
								));

								if( $posts ): ?>
									
										
									<?php foreach( $posts as $post ): 
										
										setup_postdata( $post )
										
										?>
											<div class="col-xs-12 noticia" data-postid="<?php echo $post->ID?>">
												<h2><?php the_field("titulo"); ?></h2>
												<div class="col-xs-12">
													<hr>	
												</div>					
												<p><?php the_field("descripcion_corta_noticia"); ?><br><span><i class="fa fa-clock-o"></i>Actualizado el <?php echo get_the_date( 'Y-m-d' ); ?></span>
												<a class="visible-xs" href="<?php echo get_permalink( $post->ID ); ?>">Leer más</a>	
												</p>
											</div>
									
									<?php endforeach; ?>
									
									<?php wp_reset_postdata(); ?>

							<?php endif; ?>
							<a id="more_posts">Cargar Más</a>
						</div>
					</div>
					
					<?php
							$args = array( 'post_type'=>'noticias', 'numberposts' => '1' );
							$recent_posts = get_posts( $args );
							foreach( $recent_posts as $recent ){

								echo '<div class="hidden-xs col-sm-6 col-md-4 c2-noticias">';
									echo '<img id="img-noticia" class="img-responsive" src="'.get_field('imagen_noticia', $recent->ID).'" alt="'.get_field('titulo', $recent->ID).'">';	
								echo '</div>';

								echo '<div class="col-xs-12 col-sm-4 hidden-xs hidden-sm noticia-desplegada">';
									
											echo '<h2 id="noticia-titulo">'.get_field('titulo', $recent->ID).'</h2>';
											echo '<div class="col-xs-12 col-sm-12 separador"><hr></div>';
											echo '<div id="noticias-desplegada" class="col-xs-12 col-sm-12 no-padding wrapper-noticia-desplegada mCustomScrollbar" data-mcs-theme="rounded-dark">'.get_field('texto_noticia', $recent->ID).'</div>';
										
								echo '</div>';

							}
					?>		

				</div>
			</div>
		</div>
		
		<?php include "menu-fijo.php";?>

		
		<?php include "footer.php";?>

		<script>
			$( document ).ready(function() {
				resizewindow();
				$("#noticias-wrapper").mCustomScrollbar("update");
				$("#noticias-desplegada").mCustomScrollbar("update");
				$("#noticias-wrapper").mCustomScrollbar({
		            	// contentTouchScroll: 25
		        });
		        $("#noticias-desplegada").mCustomScrollbar({
		        	// contentTouchScroll: 25
		        });	
			});
			function resizewindow() {
				var h = window.innerHeight-94;
				var he = h-52;
				document.getElementById('noticias-wrapper').setAttribute("style","height:"+h+"px");
				document.getElementById('noticias-desplegada').setAttribute("style","height:"+he+"px");
				$("#noticias-wrapper").mCustomScrollbar("update");
				$("#noticias-desplegada").mCustomScrollbar("update");
			}
			
			window.onresize=function(){
				resizewindow();
			};

			$( ".noticia" ).click(function() {
			  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.width <= 768) {

			  } else {
				  $(this).css("cursor", "wait");
				  var pid = $(this).data('postid');
				  var data = {
				      'action': 'load_custom_post',
				      'postid': pid
				  };
				  // since 2.8 ajaxurl is aways defined in the admin header and points to admin-ajax.php
				  $.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {
				      $('.noticia').css("cursor", "pointer");
				      
				      var r = JSON.parse(response);
				      $('#img-noticia').attr("src", r.imagen_noticia);
				      $('#noticia-titulo').html(r.titulo);
				      $('#noticias-desplegada').html(r.texto_noticia);

				  });
		      }
		    });

		    var ppp = 3; // Post per page
			var ptype = 'noticias'; // Post type
			var pageNumber = 1;


			function load_posts(){
			    pageNumber++;
			    var data = {
                    'action': 'load_custom_post',
                    'ptype':  ptype,
                    'ppp': ppp,
                    'pageNumber': pageNumber
                };
                // since 2.8 ajaxurl is aways defined in the admin header and points to admin-ajax.php
                $.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {                   
                    
                    var r = JSON.parse(response);
                    $("#more_posts").attr("disabled",false);
                    pageNumber++;

                });
			    
			    return false;
			}

			$("#more_posts").on("click",function(){ // When btn is pressed.
			    $("#more_posts").attr("disabled",true); // Disable the button, temp.
			    load_posts();
			});
		</script>
	</body>	
</html>	

