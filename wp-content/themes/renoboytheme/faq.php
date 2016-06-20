<?php
/*
Template Name: Pensando en reencauchar
*/
?>

	<?php include "header.php";?>
		<div class="col-xs-12 no-padding fondo-faq">
			<div class="col-xs-12 text-center">
				<h1 class="text-center">¿PENSANDO EN REENCAUCHAR?</h1>
			</div>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 faq-wrapper">				
			
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
		jQuery(function ($) {

			$(".faq-q").click( function () {
			  var container = $(this).parents(".faq-c");
			  var answer = container.find(".faq-a");
			  var trigger = container.find(".faq-t");
			  
			  	answer.slideDown(500);

			  	$(document).mouseup(function (e)
				{			    

				   if (!answer.is(e.target) // if the target of the click isn't the container...
				        && answer.has(e.target).length === 0) // ... nor a descendant of the container
				    {
				        answer.slideUp(500);
				    }
				});

				$(document).bind( "mouseup touchend", function(e) {

					if (!answer.is(e.target) // if the target of the click isn't the container...
				        && answer.has(e.target).length === 0) // ... nor a descendant of the container
				    {
				        answer.slideUp(500);
				    }
				});

				
			  // answer.slideToggle(200);
			 
			  if (trigger.hasClass("faq-o")) {
			    trigger.removeClass("faq-o");
			  } else {
			    trigger.addClass("faq-o");
			  }
			  
			});
		
			function getParameterByName(name) {
		        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		            results = regex.exec(location.search);
		        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		    }
	    
		});

		
		
	</script>
	</body>	
</html>	
