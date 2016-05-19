<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>RENOBOY</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory');?>/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_directory');?>/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#1975AA">
		<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#1975AA">

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
							<li class="col-sm-5 col-md-4 col-lg-3 no-padding"><a href="<?php echo get_page_link(7); ?>"><img class="hidden-xs icon-header" src="<?php bloginfo('template_directory');?>/img/iconoheader3.svg" alt="">Kilometros Generando Valor</a></li>
							<li class="col-sm-2 col-md-4 col-lg-2 no-padding"><a href="<?php echo get_page_link(13); ?>">Productos</a></li>
							<li class="col-sm-3 col-md-4 col-lg-3 no-padding"><a href="<?php echo get_page_link(11); ?>">Red de Distribución</a></li>
							<li class="col-lg-4 no-padding hidden-xs hidden-sm hidden-md">
								<?php get_search_form(); ?>
							</li>
							<li class="col-sm-2 no-padding visible-sm"><a href="<?php echo get_page_link(9); ?>">Contacto</a></li>

							<hr class="hidden-xs">

							<li class="col-md-4 col-lg-3 no-padding"><a href="<?php echo get_page_link(89); ?>"><img class="hidden-xs icon-header" src="<?php bloginfo('template_directory');?>/img/iconoheader2.svg" alt="">Pensando en Reencauchar</a></li>

							<li class="col-md-3 col-lg-3 no-padding">
								<a href="<?php echo get_page_link(15); ?>">Noticias de Interés<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="col-md-3 col-lg-3 no-padding">
								<a href="http://seguimiento-renoboy.herokuapp.com" target="_blank">
									<img  class="hidden-xs icon-header" src="<?php bloginfo('template_directory');?>/img/iconoheader1.svg" alt="">Acceso a Distribuidores
								</a>
							</li>

							<li class="col-sm-2 no-padding hidden-sm"><a href="<?php echo get_page_link(9); ?>">Contacto</a></li>						
						</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>