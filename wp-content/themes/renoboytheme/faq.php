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

					$i = 0; 

					if( $posts ): ?>
						
							
						<?php foreach( $posts as $post ): 
							
							setup_postdata( $post )
							
							?>
								
								<?php
								if($i == 0) {
									echo '<div class="row">';
								}
								?>

								<div class="faq-c col-xs-12 col-sm-6">
								  <div class="faq-q"><span class="faq-t">+</span><?php the_field("pregunta"); ?></div>
								  <div class="faq-a">
								    <?php the_field("respuesta"); ?>
								  </div>
								</div>
								
								<?php
								$i++;
								if($i == 2) {
									$i = 0;
									echo '</div>';
								}
								?>
						
						<?php endforeach; ?>
						
						<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
		</div>	
	<?php include "menu-fijo.php";?>

	<?php include "footer.php";?>
	<script type="text/javascript">
		jQuery(function ($) {

			var qparam = '-'; 
			$(document).ready(function() { 
	            qparam = getParameterByName('q');
	            
	            if(qparam.trim()!="" && qparam != '-' && qparam=="92"){
					$( ".faq-wrapper .row:nth-child(5) .faq-c:nth-child(1) .faq-a").slideDown(500);
					$( ".faq-wrapper .row:nth-child(5) .faq-c:nth-child(1) .faq-q .faq-t").addClass("faq-o");
	            }
	        });

	        var selected;

			$(".faq-q").click( function (e) {

				var container = $(this).parents(".faq-c");
			  	var answer = container.find(".faq-a");
			  	var trigger = container.find(".faq-t");

				if(!selected){					
					answer.slideDown(500);
			  	    trigger.addClass("faq-o");
			  	    selected = $(this);
				} else {
					if(!selected.is(e.target)  && selected.has(e.target).length === 0){
						
						var selectedcontainer = selected.parents(".faq-c");
			  			var selectedanswer = selectedcontainer.find(".faq-a");
			  			var selectedtrigger = selectedcontainer.find(".faq-t");

			  			//closes selected
			  			selectedanswer.slideUp(500);
			  	    	selectedtrigger.removeClass("faq-o");

			  	    	//opens new one
			  	    	answer.slideDown(500);
				  		trigger.addClass("faq-o");

				  		selected = $(this);

					} else {

						if (trigger.hasClass("faq-o")){
							answer.slideUp(500);
			  	    		trigger.removeClass("faq-o");
						}else{
							answer.slideDown(500);
			  	    		trigger.addClass("faq-o");
						}

					}
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
