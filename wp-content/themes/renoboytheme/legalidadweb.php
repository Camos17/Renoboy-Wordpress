<?php
/*
Template Name: Legal
*/
?>

	<?php include "header.php";?>

	<div class="col-xs-12 wrapper-contacto no-padding fondo-legalidad">
		<div class="col-xs-12 layer-fondo-legalidad">
			<h1 class="text-center headline-legalidad"><?php the_field("titulo"); ?></h1>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 no-padding container-legal">
				<?php the_field("texto_legal"); ?>
			</div>
		</div>
	</div>


	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>