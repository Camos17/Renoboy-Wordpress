<form role="search" method="get" class="col-md-12 no-padding" action="<?php echo home_url( '/' ); ?>">
	<label class="hidden" for="search">Search in <?php echo home_url( '/' ); ?></label>
	<button type="submit" class="col-lg-2 btn btn-default btn-header-busqueda"><img src="<?php bloginfo('template_directory');?>/img/iconoheader-buscar.svg" alt=""></button>
	<div class="col-lg-10 searchinput">
		<input type="text" class="form-control" placeholder="Buscar..." name="s">
	</div>					
	<input type="hidden" name="post_type[]" value="noticias" />
	<input type="hidden" name="post_type[]" value="diseños" />	
	<input type="hidden" name="post_type[]" value="faq" />			
</form>