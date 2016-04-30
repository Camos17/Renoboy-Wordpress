<?php
/*
Template Name: Visita Virtual a la planta
*/
?>
	<?php include "header.php";?>

	<div class="col-xs-12 wrapper-contacto no-padding fondo-kilometros-generando-valor">
		<div class="container">
			<div class="col-xs-12 no-padding visitavirtual">
				<div class="col-sm-4 no-padding videocolumn">
					<div class="video-info">
						<h2 class="text-center">vulcanización</h2>
						<div class="col-xs-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis perspiciatis animi magnam beatae quas maiores id est dolorum earum corporis eos reprehenderit laborum cupiditate, atque, adipisci laudantium provident ad aperiam.</p>
						</div>
						<video class="img-responsive"  preload="auto" poster="img/fondo_video_home.jpg" controls>
							<source src="https://s3-us-west-2.amazonaws.com/cannedhead.renoboy/videohome.mp4" type="video/mp4">
							<source src="https://s3-us-west-2.amazonaws.com/cannedhead.renoboy/videohome.webm" type="video/webm">
							<source src="https://s3-us-west-2.amazonaws.com/cannedhead.renoboy/videohome.ogv" type="video/ogv">
							Your browser does not support the video tag.
						</video> 
					</div>
				</div>
				<div class="col-sm-8 has-feedback interactiveplanta">
					<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/planta.svg">
					<button id="button1">1</button>
					<button id="button2">2</button>
					<button id="button3">3</button>
					<button id="button4">4</button>
					<button id="button5">5</button>
					<button id="button6">6</button>
					<button id="button7">7</button>
					<button id="button8">8</button>
					<button id="button9">9</button>
					<button id="button10">10</button>
				</div>
			</div>
		</div>
	</div>

	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>

