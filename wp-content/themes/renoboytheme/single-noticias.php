	<?php include "header.php";?>

		
		<div class="col-xs-12 no-padding content-wrapper noticias">
			<div class="col-sm-5 col-sm-offset-1 col-md-4 img-noticia-desplegada">
				<img class="img-responsive" src='<?php the_field("imagen_noticia"); ?>' alt="">	
			</div>
			<div class="col-xs-12 col-sm-5 noticia-desplegada">
				<h2><?php the_field("titulo"); ?></h2>
				<div class="col-xs-12 col-sm-12 separador">
					<hr>	
				</div>
				<div class="col-xs-12 col-sm-12 no-padding wrapper-noticia-desplegada">
					<?php the_field("texto_noticia"); ?>
				</div>
				<div class="col-xs-12 col-sm-12 no-padding btn-regreso-noticia">
					<a href="<?php echo get_page_link(15); ?>"><i class="fa fa-chevron-circle-left"></i>Noticias de Interés</a>
				</div>			
			</div>
		</div>
		
		<?php include "menu-fijo.php";?>

		
		<?php include "footer.php";?>

	</body>	
</html>	

