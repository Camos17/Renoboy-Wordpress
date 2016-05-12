<?php
/*
Template Name: Inicio
*/
?>

		<?php include "header.php";?>

		
		<div class="col-xs-12 no-padding content-wrapper">
			<video class="hidden-xs hidden-sm img-responsive video_home"  preload="auto" poster="<?php bloginfo('template_directory');?>/videos/videobg.png" autoplay loop>
				<source src="<?php bloginfo('template_directory');?>/videos/videobg.mp4" type="video/mp4">
				<source src="<?php bloginfo('template_directory');?>/videos/videobg.webm" type="video/webm">
				<source src="<?php bloginfo('template_directory');?>/videos/videobg.ogv" type="video/ogv">
				Este navegador no soporta este video tag.
			</video> 
			<!-- <div class="hidden-xs hidden-sm col-xs-12 no-padding" data-vide-bg="https://s3-us-west-2.amazonaws.com/cannedhead.optica/optica" data-vide-options="loop: true, muted: false, position: 0% 0%">
			</div> -->

			<div id="carousel-contenido" class="col-xs-12 carousel slide no-padding" data-ride="carousel" data-interval="false">		
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="hidden-md hidden-lg img-responsive" src="<?php bloginfo('template_directory');?>/img/fondo_home.jpg" alt="...">
						<div class="carousel-caption">
							<p class="text-center texto1"><strong><?php the_field("titulo_primer_slide"); ?></strong></p>
							<p class="text-center texto2"><?php the_field("texto_primer_slide"); ?></p>
							<a href="<?php the_field("link_slide_1"); ?>" class="btn btn-default btn-carousel-contenido">
								<strong>ver más</strong>
							</a>
	      				</div>
					</div>
					<div class="item">
						<img class="hidden-md hidden-lg img-responsive" src="<?php bloginfo('template_directory');?>/img/fondo_home.jpg" alt="...">
						<div class="carousel-caption">
							<p class="text-center texto1"><strong><?php the_field("titulo_segundo_slide"); ?></strong></p>
							<p class="text-center texto2"><?php the_field("texto_segundo_slide"); ?></p>
							<a href="<?php the_field("link_slide_2"); ?>" class="btn btn-default btn-carousel-contenido">
								<strong>ver más</strong>
							</a>
	      				</div>
	      			</div>
	      			<div class="item">
						<img class="hidden-md hidden-lg img-responsive" src="<?php bloginfo('template_directory');?>/img/fondo_home.jpg" alt="...">
						<div class="carousel-caption">
							<p class="text-center texto1"><strong><?php the_field("titulo_tercer_slide"); ?></strong></p>
							<p class="text-center texto2"><?php the_field("texto_tercer_slide"); ?></p>
							<a href="<?php the_field("link_slide_3"); ?>" class="btn btn-default btn-carousel-contenido">
								<strong>ver más</strong>
							</a>
	      				</div>	
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-contenido" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-contenido" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				
				<div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 home-opts">
					
					<a class="col-xs-12 col-sm-4 col-md-4" href='<?php the_field("link_slide_1"); ?>'>
						<img class="img-responsive" src='<?php the_field("imagen_primer_slide"); ?>' alt="">
						<p class="text-center">
							<strong><?php the_field("titulo_primer_slide"); ?></strong>	
						</p>
					</a>
					<a class="col-xs-12 col-sm-4 col-md-4" href="<?php the_field("link_slide_2"); ?>" title="">
						<img class="img-responsive" src="<?php the_field("imagen_segundo_slide"); ?>" alt="">
						<p class="text-center"><strong><?php the_field("titulo_segundo_slide"); ?></strong>
						</p>
					</a>
					<a class="col-xs-12 col-sm-4 col-md-4" href="<?php the_field("link_slide_3"); ?>" title="">
						<img class="img-responsive" src="<?php the_field("imagen_tercer_slide"); ?>" alt="">
						<p class="text-center"><strong><?php the_field("titulo_tercer_slide"); ?></strong>	
						</p>
					</a>	
				</div>
			</div>
			<div class="hidden-xs hidden-sm col-md-12 layer-video-home">

			</div>
		</div>
		
		<?php include "menu-fijo.php";?>		
		<?php include "footer.php";?>
		
		<script src="js/jquery.vide.js"></script>
		

	</body>	
</html>	

