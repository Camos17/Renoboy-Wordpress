<?php
/*
Template Name: Inicio
*/
?>

		<?php include "header.php";?>

		
		<div class="col-xs-12 no-padding content-wrapper">
			<video class="hidden-xs hidden-sm img-responsive video_home"  preload="auto" poster="img/fondo_video_home.jpg" autoplay loop>
				<source src="https://s3-us-west-2.amazonaws.com/cannedhead.renoboy/videohome.mp4" type="video/mp4">
				<source src="https://s3-us-west-2.amazonaws.com/cannedhead.renoboy/videohome.webm" type="video/webm">
				<source src="https://s3-us-west-2.amazonaws.com/cannedhead.renoboy/videohome.ogv" type="video/ogv">
				Your browser does not support the video tag.
			</video> 
			<!-- <div class="hidden-xs hidden-sm col-xs-12 no-padding" data-vide-bg="https://s3-us-west-2.amazonaws.com/cannedhead.optica/optica" data-vide-options="loop: true, muted: false, position: 0% 0%">
			</div> -->

			<div id="carousel-contenido" class="col-xs-12 carousel slide no-padding" data-ride="carousel" data-interval="false">		
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="hidden-md hidden-lg img-responsive" src="<?php bloginfo('template_directory');?>/img/fondo_home.jpg" alt="...">
						<div class="carousel-caption">
							<p class="text-center texto1"><strong>tu llanta nueva de nuevo michelin</strong></p>
							<p class="text-center texto2">1.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a class="btn btn-default btn-carousel-contenido">
								<strong>ver más</strong>
							</a>
	      				</div>
					</div>
					<div class="item">
						<img class="hidden-md hidden-lg img-responsive" src="<?php bloginfo('template_directory');?>/img/fondo_home.jpg" alt="...">
						<div class="carousel-caption">
							<p class="text-center texto1"><strong>seguimiento en línea de la flota</strong></p>
							<p class="text-center texto2">2.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a class="btn btn-default btn-carousel-contenido">
								<strong>ver más</strong>
							</a>
	      				</div>
	      			</div>
	      			<div class="item">
						<img class="hidden-md hidden-lg img-responsive" src="<?php bloginfo('template_directory');?>/img/fondo_home.jpg" alt="...">
						<div class="carousel-caption">
							<p class="text-center texto1"><strong>¿Pensando en Reencauchar?</strong></p>
							<p class="text-center texto2">3.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a class="btn btn-default btn-carousel-contenido">
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
					
					<a class="col-xs-12 col-sm-4 col-md-4" href="#" title="">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/botónimagen1.jpg" alt="">
						<p class="text-center"><strong>
						</strong><br>
						Tres vidas de tu llanta MICHELIN	
						</p>
					</a>
					<a class="col-xs-12 col-sm-4 col-md-4" href="#" title="">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/botónimagen2.jpg" alt="">
						<p class="text-center"><strong>MY TYRE CARE<br> PROGRAM</strong>
						</p>
					</a>
					<a class="col-xs-12 col-sm-4 col-md-4" href="#" title="">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/botónimagen3.jpg" alt="">
						<p class="text-center"><strong>¿PENSANDO EN <br> REENCAUCHAR?</strong>	
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

