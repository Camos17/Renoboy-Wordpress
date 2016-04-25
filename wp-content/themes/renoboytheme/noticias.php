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
							<div class="col-xs-12 noticia">
								<h2>Tu llanta nueva de nuevo</h2>
								<div class="col-xs-12">
									<hr>	
								</div>					
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br><span><i class="fa fa-clock-o"></i>Actualizado hace 3 horas</span>
								<a href="noticiasdesplegadas.php" title="">Leer más</a>	
								</p>
							</div>
							<div class="col-xs-12 noticia" >
								<h2>Tu llanta nueva de nuevo</h2>
								<div class="col-xs-12">
									<hr>	
								</div>					
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br><span><i class="fa fa-clock-o"></i>Actualizado hace 3 horas</span>
								<a href="noticiasdesplegadas.php" title="">Leer más</a>	
								</p>
							</div>
							<div class="col-xs-12 noticia">
								<h2>Tu llanta nueva de nuevo</h2>
								<div class="col-xs-12">
									<hr>	
								</div>					
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br><span><i class="fa fa-clock-o"></i>Actualizado hace 3 horas</span>
								<a href="noticiasdesplegadas.php" title="">Leer más</a>	
								</p>
							</div>
							<div class="col-xs-12 noticia">
								<h2>Tu llanta nueva de nuevo</h2>
								<div class="col-xs-12">
									<hr>	
								</div>					
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br><span><i class="fa fa-clock-o"></i>Actualizado hace 3 horas</span>
								<a href="noticiasdesplegadas.php" title="">Leer más</a>	
								</p>
							</div>
						</div>
					</div>
					<div class="hidden-xs col-sm-6 col-md-4 c2-noticias">
						<img class="img-responsive" src="http://placehold.it/225x350" alt="">	
					</div>
					<div class="col-xs-12 col-sm-4 hidden-xs hidden-sm noticia-desplegada">
						<h2>Tu llanta nueva de nuevo</h2>
						<div class="col-xs-12 col-sm-12 separador">
							<hr>	
						</div>
						<div id="noticias-desplegada" class="col-xs-12 col-sm-12 no-padding wrapper-noticia-desplegada mCustomScrollbar" data-mcs-theme="rounded-dark">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.	<br><br>
							</p>
						</div>			
					</div>
				</div>
			</div>
		</div>
		
		<?php include "menu-fijo.php";?>

		
		<?php include "footer.php";?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
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
				console.log(h);
				console.log(he);
				document.getElementById('noticias-wrapper').setAttribute("style","height:"+h+"px");
				document.getElementById('noticias-desplegada').setAttribute("style","height:"+he+"px");
				$("#noticias-wrapper").mCustomScrollbar("update");
				$("#noticias-desplegada").mCustomScrollbar("update");
			}
			
			window.onresize=function(){
				resizewindow();
			};
		</script>
	</body>	
</html>	

