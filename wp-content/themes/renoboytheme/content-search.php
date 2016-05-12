
<article id="post-<?php the_ID(); ?>" class="col-xs-12">
	
	<div class="col-xs-2">
		<?php if ( 'noticias' == get_post_type() ) : ?>
			<?php 
			echo '<img class="img-responsive" src="'.get_field('imagen_noticia', the_ID()).'" alt="'.get_field('titulo', the_ID()).'">';	
			?>
		<?php else : ?>
		
		<?php endif; ?>
	</div>
	<div class="col-xs-10">
		<h2 class="col-xs-8">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		</h2>
	</div>

</article><!-- #post-## -->
