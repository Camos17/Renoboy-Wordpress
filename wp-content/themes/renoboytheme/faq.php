<?php
/*
Template Name: Pensando en reencauchar
*/
?>

	<?php include "header.php";?>
		<div class="col-xs-12 no-padding fondo-faq">
			<div class="col-xs-12">
				<h1 class="text-center">¿PENSANDO EN REENCAUCHAR?</h1>
			</div>
			<div class="col-sm-10 col-sm-offset-1 faq-wrapper">				
			
				<?php 

					// get posts
					$posts = get_posts(array(
						'post_type'			=> 'faq',
	                    'numberposts'       =>  24
					));

					if( $posts ): ?>
						
							
						<?php foreach( $posts as $post ): 
							
							setup_postdata( $post )
							
							?>
								<div class="faq-c col-xs-12 col-sm-6">
								  <div class="faq-q"><span class="faq-t">+</span><?php the_field("pregunta"); ?></div>
								  <div class="faq-a">
								    <?php the_field("respuesta"); ?>
								  </div>
								</div>
						
						<?php endforeach; ?>
						
						<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
		</div>	
	<?php include "menu-fijo.php";?>

	<?php include "footer.php";?>
	<script type="text/javascript">
		$(".faq-q").click( function () {
		  var container = $(this).parents(".faq-c");
		  var answer = container.find(".faq-a");
		  var trigger = container.find(".faq-t");
		  
		  answer.slideToggle(200);
		  
		  if (trigger.hasClass("faq-o")) {
		    trigger.removeClass("faq-o");
		  }
		  else {
		    trigger.addClass("faq-o");
		  }
		});
	</script>
	</body>	
</html>	
