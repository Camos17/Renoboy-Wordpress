<?php
/*
Template Name: Generando Valor
*/
?>
	<?php include "header.php";?>

			<div class="col-xs-12 wrapper-contacto no-padding fondo-generando-valor">
				<div class="col-xs-12 layer-fondo-generando-valor">
					<div class="col-xs-12 col-md-10 col-md-offset-1 contenido-generando-valor no-padding">
						<div class="col-xs-12 text-center headline-generando-valor">
							<h2><?php the_field('titulo'); ?></h2>
						</div>
						<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 contenido-generando-valor1">
							<div class="row">
								<div class="col-xs-8 col-xs-offset-2 no-padding imagen-titulo">
									<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/logorenoboy.svg" alt="Logo Renoboy">
								</div>
							</div>
							<p class="col-xs-12"><?php the_field('descripcion'); ?></p>
							<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 btn-regresar-kilometros">
								<a class="col-xs-12 btn no-padding btn-regresar-kilometros2" href="<?php echo get_page_link(7); ?>" >
									<i class="fa fa-angle-left" aria-hidden="true"></i> 
									REGRESAR 
								</a>
						</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-0 layer-imagen-trayectoria">
							<img class="img-responsive" src="<?php the_field('imagen'); ?>" alt="Historia Renoboy">
						</div>
					</div>
				</div>
			</div>


		<?php include "menu-fijo.php";?>		
		<?php include "footer.php";?>

	</body>
</html>
