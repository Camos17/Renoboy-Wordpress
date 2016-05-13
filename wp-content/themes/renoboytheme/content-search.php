
<article id="post-<?php the_ID(); ?>" class="col-xs-12">
	
	<div class="col-xs-1">
		<?php if ( 'noticias' == get_post_type() ) : ?>
			<?php echo '<a href='. get_permalink( $post->ID ) .'><img class="img-responsive" src="'.get_field('imagen_noticia').'" alt="'.get_field('titulo').'"></a>';	?>
		<?php elseif ( 'productos' == get_post_type() ) : ?>
			<?php echo '<img class="img-responsive" src="'.get_field('figura', the_ID()).'" alt="'.get_field('titulo', the_ID()).'">';	?>
		<?php elseif ( 'diseños' == get_post_type() ) : ?>
			<?php echo '<img class="img-responsive" src="'.get_field('figura', the_ID()).'" alt="'.get_field('titulo', the_ID()).'">';	?>
		<?php elseif ( 'pages' == get_post_type() ) : ?>
			<?php echo '<img class="img-responsive" src="'.get_field('figura', the_ID()).'" alt="'.get_field('titulo', the_ID()).'">';	?>
		<?php else : ?>
			<p>dog</p>
		<?php endif; ?>
	</div>
	<div class="col-xs-10">
		<?php if ( 'noticias' == get_post_type() ) : ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="'.get_permalink( $post->ID ).'" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="/" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>
	</div>
</article><!-- #post-## -->

