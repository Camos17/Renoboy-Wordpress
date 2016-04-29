<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>RENOBOY</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		 <?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="col-xs-12 col-md-3 no-padding navbar-header">
					<button type="button" class="navbar-toggle collapsed menu-desplegable" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="va navbar-brand" href="/"><img class="img-height-responsive" src="<?php bloginfo('template_directory');?>/img/logorenoboy.svg" alt=""></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="col-md-4 col-lg-2 no-padding"><a href="<?php echo get_page_link(15); ?>">Noticias de Interés<span class="sr-only">(current)</span></a></li>
							<li class="col-md-4 col-lg-3 no-padding">
								<a href="http://renoboy.herokuapp.com" target="_blank">
									<img  class="hidden-xs icon-header" src="<?php bloginfo('template_directory');?>/img/iconoheader1.svg" alt="">Acceso a Distribuidores
								</a>
							</li>
							<li class="col-md-4 col-lg-3 no-padding"><a href="<?php echo get_page_link(7); ?>"><img class="hidden-xs icon-header" src="<?php bloginfo('template_directory');?>/img/iconoheader2.svg" alt="">Pensando en Reencauchar</a></li>
							<li class="col-lg-4 no-padding hidden-xs hidden-sm hidden-md">
								<form class="col-md-12 no-padding" role="search">
									<button type="submit" class="col-lg-2 btn btn-default btn-header-busqueda"><img src="<?php bloginfo('template_directory');?>/img/iconoheader-buscar.svg" alt=""></button>
									<div class="col-lg-10 searchinput">
										<input type="text" class="form-control" placeholder="Buscar...">
									</div>									
								</form>
							</li>
							<hr class="hidden-xs">						
							<li class="col-sm-2 no-padding"><a href="<?php echo get_page_link(13); ?>">Productos</a></li>
							<li class="col-sm-3 no-padding"><a href="<?php echo get_page_link(11); ?>">Red de Distribución</a></li>
							<li class="col-sm-5 col-md-4 no-padding"><a href="<?php echo get_page_link(7); ?>"><img class="hidden-xs icon-header" src="<?php bloginfo('template_directory');?>/img/iconoheader3.svg" alt="">Kilometros Generando Valor</a></li>
							<li class="col-sm-2 no-padding"><a href="<?php echo get_page_link(9); ?>">Contacto</a></li>	
						</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>