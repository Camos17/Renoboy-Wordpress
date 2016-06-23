<?php
/*
Template Name: Buscador Servicios
*/
?>
		<?php include "header.php";?>

		<div class="col-xs-12 no-padding content-wrapper fondo-buscador">
			<input type="text" style="display:none" id="hiddenVal"/>
			<div class="col-xs-12 col-md-12 headline-buscador-servicios">
				<h1>buscador de servicio renoboy</h1>
				<h2>Usa nuestra búsqueda guiada para encontrar el servicio perfecto que se adapte a tus necesidades
				</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 no-padding buscador-servicios">
				<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
					<div class="col-xs-12 col-sm-12 servicio-recomendado">
						<div class="col-xs-12 no-padding">	
							<h2>ENCUENTRE EL SERVICIO <br> RECOMENDADO</h2>
						</div>					
					</div>
					<div class="col-sm-6 col-md-12">		
						<div class="col-xs-12 no-padding seccion-servicio-utilizacion">	
							<div class="col-xs-12 no-padding">
								<li class="col-xs-6 titulo-seccion">
									SELECCIONE UNA UTILIZACIÓN
								</li>
								<li class="col-xs-6 seleccionartodas">
									<input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox" checked="">
        							<label for="checkbox-1" class="checkbox-custom-label">Seleccionar todas</label>
								</li>					
							</div>
							<div class="col-xs-12 icono-ayuda">
								<a id="ayuda-utilizacion" href="#" title="" data-toggle="modal" data-target="#ayuda-modal">
									<i class="col-xs-2 col-xs-offset-10 fa fa-question-circle"></i>
								</a>
							</div>
							<div id="iconos-servicios" class="col-xs-12 col-sm-12 iconos-servicio-recomendado">	
								<div class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 icono-recomendado">
									<button id="btn-regional" data-servicio="regional" type="button"class="col-xs-12 btn-servicio-regional active">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL.svg" alt="">
										<span class="col-xs-12 no-padding">Regional</span>	
									</button>
								</div>
								<div data-servicio="mixta" class="col-xs-6 col-sm-4 col-md-3 icono-recomendado">
									<button id="btn-mixta" type="button" class="col-xs-12 btn-servicio-mixta active">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/MIXTA.svg" alt="">
										<span class="col-xs-12 no-padding">Mixta</span>
									</button>
								</div>					
								<div data-servicio="urbano" class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 icono-recomendado">
									<button id="btn-urbano" type="button" class="col-xs-12 btn-servicio-urbano active">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/URBANO.svg" alt="">
										<span class="col-xs-12 no-padding">Urbano</span>
									</button>					
								</div>
								<div data-servicio="cantera" class="col-xs-6 col-sm-4 col-md-3 icono-recomendado">
									<button id="btn-cantera" type="button" class="col-xs-12 btn-servicio-cantera active">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/CANTERA.svg" alt="">
										<span class="col-xs-12 no-padding">Cantera</span>
									</button>				
								</div>														
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-12 buscador-columna2">
						<div class="col-xs-12 no-padding seccion-servicio-posicion">
							<li class="col-xs-12 titulo-seccion form-group">
									SELECCIONE UNA POSICIÓN
							</li>
							<li class="col-xs-10">
								 <select id="posicionselect" class="col-xs-12">
								 	<option value="%">Eje Libre / Tracción</option>
									<option value="TRACCIÓN">Tracción</option>
									<option value="EJE LIBRE">Eje libre</option>
								</select>
							</li>
							<li class="col-xs-2">
								<a id="ayuda-posicion" href="#" title="" data-toggle="modal" data-target="#ayuda-modal2">
									<i class="fa fa-question-circle"></i>
								</a>
							</li>
						</div>
						<div class="col-xs-12 no-padding seccion-servicio-dimension">
							<li class="col-xs-12 titulo-seccion form-group">
								SELECCIONE UNA DIMENSIÓN
							</li>
							<li class="col-xs-12">
								 <select id="dimensionselect" class="col-xs-12">
									<option value="%">Todas las dimensiones</option>
								</select>
							</li>
						</div>
						<div class="col-xs-12 no-padding seccion-servicio-categoria">
							<li class="col-xs-12 titulo-seccion">
								SELECCIONE UNA CATEGORÍA
							</li>
							<li class="col-xs-12 no-padding">
								<select id="categoriaselect" multiple class="form-control">
									<option value="TU LLANTA NUEVA DE NUEVO MICHELIN" selected="selected">TU LLANTA NUEVA DE NUEVO MICHELIN</option>
									<option value="LÍNEA PREMIUM RECAMIC">LÍNEA PREMIUM RECAMIC</option>
									<option value="LÍNEA PRE-Q">LÍNEA PRE-Q</option>
								</select>
							</li>
							<li class="col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-6 col-md-6 col-md-offset-5 no-padding btn-buscar-servicio">
								<button id="dbanda-btn" class="btn btn-default btn-buscar-servicio col-xs-12" type="submit">BUSCAR MI SERVICIO</button>
							</li>
						</div>
					</div>
				</div>
			</div>
			<div id="loader" class="col-xs-12 col-sm-12 col-md-7 hidden" style="margin-top: 100px;">
				<div class="loading-spinner"></div>
			</div>
			<div id="cat-llantas" class="col-xs-12 col-sm-12 col-md-7 cat-llantas">
					<?php 

						// get posts
						$posts = get_posts(array(
								'post_type'			=> 'd_bandas',
								'posts_per_page'   => 40,
								'meta_query'	=> array(
									array(
										'key'		=> 'categoria',
										'value'		=> 'TU LLANTA NUEVA DE NUEVO MICHELIN',
										'compare'	=> 'LIKE'
									)
								)
							)
						);

						if( $posts ): ?>
								
							<?php foreach( $posts as $post ): 
								setup_postdata( $post )
								?>
									
								<a href="#" class="col-xs-6 col-sm-4 col-md-3 cat-llanta" data-diseno="<?php the_field("diseño_de_banda");?>" data-descripcion="<?php the_field("descripcion");?>">
									<div class="col-xs-12 no-padding cat-llanta-wrapper">
										<?php 
											$value = get_field( "imagen" );
											if($value){
												echo '<img class="img-responsive" src="'.get_field('imagen').'" alt="">';
											}else{
												echo '<img class="img-responsive" src="'.get_template_directory_uri ().'/img/1.jpg" alt="diseño no disponible">';
											}
										?>

										<?php 
											$value = get_field( "utilizacion_recomendada" );

											if( $value == 'REGIONAL' ) {
											    
											    echo '<div class="col-xs-12 no-padding layer-cat-llanta regional">';

											} elseif($value == 'MIXTA'){

												echo '<div class="col-xs-12 no-padding layer-cat-llanta mixta">';

											}elseif($value == 'URBANO'){

												echo '<div class="col-xs-12 no-padding layer-cat-llanta urbano">';

											} elseif($value == 'CANTERA'){

												echo '<div class="col-xs-12 no-padding layer-cat-llanta cantera">';

											} else {

											    echo '<div class="col-xs-12 no-padding layer-cat-llanta otro">';
											    
											}
										?>

											<div class="col-xs-12 no-padding detail-layer-llanta">
												<p class="titulo-layer-llanta"><?php the_field("diseño_de_banda"); ?></p><br><br>
												<p class="subtitulo-layer-llanta hidden">West Hauler <br> Lug</p>
												<p class="texto-layer-llanta"><?php the_field("descripcion"); ?></p> 
											</div>			
										</div>
									</div>
									<div class="col-xs-4 img-abajo-derecha">
										<?php 
											$value = get_field( "utilizacion_recomendada" );
											if( $value == 'REGIONAL' ) {
											    
											    echo '<img class="img-responsive" src="'.get_template_directory_uri ().'/img/REGIONAL2.svg" alt="Regional">';

											} elseif($value == 'MIXTA'){

												echo '<img class="img-responsive" src="'.get_template_directory_uri ().'/img/MIXTA2.svg" alt="sin diseño">';

											}elseif($value == 'URBANO'){

												echo '<img class="img-responsive" src="'.get_template_directory_uri ().'/img/URBANO2.svg" alt="sin diseño">';

											} elseif($value == 'CANTERA'){

												echo '<img class="img-responsive" src="'.get_template_directory_uri ().'/img/CANTERA2.svg" alt="sin diseño">';

											} else {

											    echo '<img class="img-responsive" src="'.get_template_directory_uri ().'/img/1.jpg" alt="sin diseño">';
											    
											}
										?>
									</div>					
								</a>
							
							<?php endforeach; ?>
							
							<?php wp_reset_postdata(); ?>

					<?php endif; ?>
			</div>
		</div>
		
		<div class="modal fade" id="ayuda-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content contenido-ayuda">
		    	<div class="modal-header headline-ayuda-buscador">
		        	<button type="button" class="close cerrar-ayuda" data-dismiss="modal" aria-label="Close">
		        		<span aria-hidden="true">
		        			<i class="ion-android-close"></i>
		        		</span>
		        	</button>
		        	<h2 class="modal-title" id="myModalLabel">AYUDA</h2>
		    	</div>
		    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contenido-ayuda1">
		    		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-lg-10 col-lg-offset-1 no-padding contenido-ayuda2">	
						<div class="col-xs-3 col-lg-2">
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL.svg" alt="">
								<span class="col-xs-12 no-padding">Regional</span>
						</div>
						<div class="col-xs-9 col-lg-10 no-padding">
							<ul class="col-xs-12">
								<li>Recorridos por carreteras secundarias de doble sentido de circulación y en autopistas.</li>
								<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
								<li>Cargas medianas y pesadas.</li>
								<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
								<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
							</ul>
						</div>
						<div class="col-xs-3 col-lg-2">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/MIXTA.svg" alt="">
							<span class="col-xs-12 no-padding">Mixta</span>
						</div>
						<div class="col-xs-9 col-lg-10 no-padding">
							<ul class="col-xs-12">
								<li>Recorridos por carreteras secundarias de doble sentido de circulación y en autopistas.</li>
								<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
								<li>Cargas medianas y pesadas.</li>
								<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
								<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
							</ul>
						</div>
						<div class="col-xs-3 col-lg-2">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/URBANO.svg" alt="">
							<span class="col-xs-12 no-padding">Urbano</span>
						</div>
						<div class="col-xs-9 col-lg-10 no-padding">
							<ul class="col-xs-12">
								<li>Recorridos por carreteras secundarias de doble sentido de circulación y en autopistas.</li>
								<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
								<li>Cargas medianas y pesadas.</li>
								<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
								<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
							</ul>
						</div>
						<div class="col-xs-3 col-lg-2">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/CANTERA.svg" alt="">
							<span class="col-xs-12 no-padding">Cantera</span>
						</div>
						<div class="col-xs-9 col-lg-10 no-padding">
							<ul class="col-xs-12">
								<li>Recorridos por carreteras secundarias de doble sentido de circulación y en autopistas.</li>
								<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
								<li>Cargas medianas y pesadas.</li>
								<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
								<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
							</ul>
						</div>
					</div>
		    	</div>		    		
		    	<div class="modal-footer ayuda-modal-footer">
		        	<button type="button" class="btn btn-default cerrar-ayuda2" data-dismiss="modal">Cerrar</button>
		    	</div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="ayuda-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content contenido-ayuda">
		    	<div class="modal-header headline-ayuda-buscador">
		        	<button type="button" class="close cerrar-ayuda" data-dismiss="modal" aria-label="Close">
		        		<span aria-hidden="true">
		        			<i class="ion-android-close"></i>
		        		</span>
		        	</button>
		        	<h2 class="modal-title" id="myModalLabel">POSICIÓN</h2>
		    	</div>
		    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contenido-ayuda1">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1 no-padding posicion">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/ejelibre.jpg" alt="Eje Libre">
						<div class="col-xs-4 col-xs-offset-4 no-padding posicion2">				
							<label class="col-xs-12">
								<p>Eje Libre</p>
							</label>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1 no-padding posicion">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/traccion.jpg" alt="Tracción">
						<div class="col-xs-4 col-xs-offset-4 no-padding posicion2">
							<label class="col-xs-12"> 
								<p>Tracción</p>
							</label>
						</div>						
					</div>
		    	</div>		    		
		      <div class="modal-footer ayuda-modal-footer">
		    	<button id="dbanda-btn" type="button" class="btn btn-default cerrar-ayuda2" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div id="modal-producto" class="modal fade modal-producto" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="container-fluid no-padding">
							<div class="col-xs-12 modal-producto-wrapper no-padding">
								<button type="button" class="close btn-cerrar-modal hidden-md hidden-lg" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</button>
								<button type="button" class="close btn-cerrar-modal2 hidden-xs hidden-sm" data-dismiss="modal" aria-label="Close">
									<i class="ion-android-close" aria-hidden="true"></i>
								</button>
								
								<div class="col-xs-12 col-md-5 col-lg-4 no-padding headline-modal-producto">
									<div class="col-xs-12 no-padding headline-modal-producto2">
										<h2 class="col-xs-7 col-xs-offset-1 col-sm-6 col-sm-offset-2 col-md-7 col-md-offset-1">REGIONAL</h2>
							        	<div class="col-xs-3 col-sm-3 col-md-4  pull-right-1 icono-header">
							        		<div class="col-xs-10 col-sm-8 col-md-10 col-lg-12 no-padding">
							        			<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL.svg" alt="">	
							        		</div>			
										</div>
									</div>
									<div class="col-xs-12 col-sm-10 col-sm-offset-1 imagen-llanta">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/5.jpg" alt="">
									</div>	
								</div>

								<div class="col-xs-12 col-md-7 col-lg-8 no-padding contenido-modal-producto">
									<div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
										<div class="col-xs-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 logo-recamic">
				    						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/logo_recamic.jpg" alt="...">
				    					</div>
				    					<div class="col-xs-6 col-md-6 col-md-offset-0 col-lg-5 col-lg-offset-1 img-aplicacion">
				    						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/aplicacionrecomendada.svg" alt="...">
				    						<p class="va">aplicación <br> recomendada</p>
				    					</div>
									</div>
									
									<div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
										<div class="col-xs-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 img-cpt">
				    						<img class="img-responsive" src="http://placehold.it/350x150" alt="...">
				    					</div>
				    					<div class="col-xs-6 col-md-6 col-lg-5 col-lg-offset-1 img-aplicacion img-aplicacion2">
				    						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/aplicacionaceptada.svg" alt="...">
				    						<p class="va">aplicación <br> aceptada</p>
				    					</div>
									</div>

			    					<div class="col-xs-12 texto-modal-producto">
				    					<h3>carácteristicas y beneficios</h3>
				    					<div class="col-xs-12 no-padding">
				    						<hr>
				    					</div>
						    			<p id='descripcion-llantas'></p>
					    			</div>

					    			<div class="col-sm-10 col-sm-offset-1 table-responsive tabla-modal-producto no-padding">	
										<table class="table table-hover">
											<thead>
												<tr>
													<th>  DIMENSIÓN </th>
													<th>ANCHO DE BANDA (mm)</th>
													<th>PROFUNDIDAD (mm)</th>
													<th>CORRESPONDENCIA (CARCASA)</th>
												</tr>
											</thead>
											<tbody id='llantas-body'>
												<tr>
													<td>data</td>
													<td>data</td>
													<td>data</td>
													<td>data</td>
												</tr>
												<tr>
													<td>data</td>
													<td>data</td>
													<td>data</td>
													<td>data</td>
												</tr>
												<tr>
													<td>data</td>
													<td>data</td>
													<td>data</td>
													<td>data</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="col-xs-12 texto-modal-producto2">
										<div class="col-xs-12 texto-convenciones">
											<i class="col-xs-1 col-sm-offset-1 no-padding fa fa-usd" aria-hidden="true"></i>
											<p class="col-xs-11 col-sm-10">PRECIO: Consulte con su distribuidor.</p>
										</div>
										<div class="col-xs-12 texto-convenciones">
											<i class="col-xs-1 col-sm-offset-1 no-padding fa fa-file-text icono-documento" aria-hidden="true"></i>
											<p class="col-xs-11 col-sm-10">INVENTARIO: Producto sujeto a disponibilidad.</p>
										</div>
										<div class="col-xs-12 texto-convenciones">
											<i class="col-xs-1 col-sm-offset-1 no-padding fa fa-check-circle" aria-hidden="true"></i>
											<p class="col-xs-11 col-sm-10">GARANTÍA Y CONDICIONES DE USO: Link a PDF.</p>
										</div>
									</div>

									<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-5 col-lg-4 col-lg-offset-7 btn-modal-producto-comprar">
										<a class="col-xs-12 btn btn-block no-padding" href="<?php echo get_page_link(11); ?>" title="quiero comprar">
											<img class="va col-xs-2 no-padding" src="<?php bloginfo('template_directory');?>/img/carritodecompras.svg" alt="...">
											<p class="va">Quiero Comprar</p>
										</a>
									</div>
								</div>
							</div>	
						</div>							
					</div>					
				</div>
			</div>
		</div>

		<?php include "menu-fijo.php";?>
		<script src="js/clamp.min.js"></script>
		<?php include "footer.php";?>
		<script type="text/javascript">
			(function($) {
				
				$(document).ready(function() {

	            	var data = {
					    'action': 'getdimensiones'
					};

	            	$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

	            		var options = response;
	            		select = document.getElementById('dimensionselect');

	            		var opt;
						for (var i = 0; i<options.length; i++){
						    opt = document.createElement('option');
						    opt.value = options[i].dimension;
						    opt.innerHTML = options[i].dimension;
						    select.appendChild(opt);
						} 	
	            	});
		        });  

				$("#iconos-servicios button").click(function(){
		
					var buttonservice = $(this).data('servicio');

					if($(this).hasClass("active")){
						$(this).removeClass("active");
					} else {
						$(this).addClass("active");
						$("#checkbox-1").prop( "checked", false );
					}
				});

				$("#checkbox-1").click( function(){
				   if( $(this).is(':checked') ){
				   	 $("#iconos-servicios button").addClass("active");
				   } else {
				   	$("#iconos-servicios button").removeClass("active");
				   }
				});

				// al abrir diseno
				$(document).on('click', '.cat-llanta', function(){

					var diseno = $(this).data('diseno');
					var descripcion = $(this).data('descripcion');

					$(this).css("cursor", "wait");

					var data = {
					   'action': 'getproductos',
					   'diseno': diseno
					};
								
					$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {
					    var r = response;
					    //console.log(r); 
						
						$('#llantas-body').html('');
					  
					    for (i = 0; i < r.length; i++) {
					    	$('#descripcion-llantas').text(descripcion);
					    	$("#llantas-body").append('<tr><td>' + r[i].p_dimension + '</td><td>' + r[i].ancho + '</td><td>' + r[i].profundidad + '</td><td>' + r[i].correspon + '</td></tr>');
					    }

					    $(this).css("cursor", "default");
					    $('#modal-producto').modal('show');
					});
				});

				// al filtro : buscar mi servicio
				$("#dbanda-btn").click( function(){

					if(!$("#checkbox-1").is(':checked') && !$("#btn-regional").hasClass("active") && !$("#btn-mixta").hasClass("active") && !$("#btn-urbano").hasClass("active") && !$("#btn-cantera").hasClass("active") ) {
						alert("Por favor seleccione una utilización");
					} else {

						$("#loader").removeClass("hidden");
						$("#cat-llantas").addClass("hidden");
						var utilizacion = '';	
					
						var e = document.getElementById("posicionselect");
						var	posicion = e.options[e.selectedIndex].value;

						var d = document.getElementById("dimensionselect");
						var	dimension = d.options[d.selectedIndex].value;		

						var c = document.getElementById("categoriaselect");
						var	categoria = c.options[c.selectedIndex].value;			

						if($("#btn-regional").hasClass("active") || $("#checkbox-1").is(':checked') ){
							utilizacion="'REGIONAL'"; 
						} 
						if($("#btn-mixta").hasClass("active") || $("#checkbox-1").is(':checked')){
							if(!utilizacion){
								utilizacion = "'MIXTA'";
							} else {
								utilizacion += ",'MIXTA'" ;
							}
						} 
						if($("#btn-urbano").hasClass("active") || $("#checkbox-1").is(':checked')){
							if(!utilizacion){
								utilizacion = "'URBANO','AUTOPISTA / REGIONAL / URBANO'";
							} else {
								utilizacion += ",'URBANO'" ;
							}
						} 
						if($("#btn-cantera").hasClass("active") || $("#checkbox-1").is(':checked')){
							if(!utilizacion){
								utilizacion = "'CANTERA'";
							} else {
								utilizacion += ",'CANTERA'";
							}
						} 
						if($("#btn-regional").hasClass("active") || $("#btn-urbano").hasClass("active") || $("#checkbox-1").is(':checked')){
							if(!utilizacion){
								utilizacion = "'AUTOPISTA / REGIONAL / URBANO','REGIONAL / URBANO'";
							} else {
								utilizacion += ",'AUTOPISTA / REGIONAL / URBANO','REGIONAL / URBANO'" ;
							}
						} 
						if($("#btn-mixta").hasClass("active") || $("#btn-cantera").hasClass("active") || $("#checkbox-1").is(':checked') ){
							if(!utilizacion){
								utilizacion = "'MIXTA / CANTERA'";
							} else {
								utilizacion += ",'MIXTA / CANTERA'" ;
							}
						} 
					   
					   					
						var data = {
						   'action': 'getdisenos',
						   'utilizacion': utilizacion,
						   'posicion': posicion,
						   'dimension': dimension,
						   'categoria': categoria
						};
		
						$.post("<?php echo admin_url('admin-ajax.php'); ?>", data, function(response) {

						    var r = response;
							
							$("#cat-llantas").html("");
						    
						    var utilizacion = '';
						    var utilizacions = '';
						    var imgutilizacion = '';
						    var descripcion = '';
						  
						    for (i = 0; i < r.length; i++) {

						    	utilizacion = r[i].utilizacion_recomendada;

								if( utilizacion == 'REGIONAL' ) {
								    
								   utilizacions = '<div class="col-xs-12 no-padding layer-cat-llanta regional">';
								   imgutilizacion = '<img class="img-responsive" src="http://localhost/renoboy/wp-content/themes/renoboytheme/img/REGIONAL2.svg" alt="Regional">';

								} else if(utilizacion == 'MIXTA'){

									utilizacions = '<div class="col-xs-12 no-padding layer-cat-llanta mixta">';
									imgutilizacion = '<img class="img-responsive" src="http://localhost/renoboy/wp-content/themes/renoboytheme/img/MIXTA2.svg" alt="Regional">';

								}else if(utilizacion == 'URBANO'){

									utilizacions = '<div class="col-xs-12 no-padding layer-cat-llanta urbano">';
									imgutilizacion = '<img class="img-responsive" src="http://localhost/renoboy/wp-content/themes/renoboytheme/img/URBANO2.svg" alt="Regional">';

								} else if(utilizacion == 'CANTERA'){

									utilizacions = '<div class="col-xs-12 no-padding layer-cat-llanta cantera">';
									imgutilizacion = '<img class="img-responsive" src="http://localhost/renoboy/wp-content/themes/renoboytheme/img/CANTERA2.svg" alt="Regional">';

								} else {

								    utilizacions ='<div class="col-xs-12 no-padding layer-cat-llanta otro">';
								    imgutilizacion = '<img class="img-responsive" src="http://localhost/renoboy/wp-content/themes/renoboytheme/img/1.jpg" alt="Regional">';
								    
								}


								if(r[i].descripcion){
									descripcion = r[i].descripcion;
								} else {
									descripcion = '';
								}

							    $("#cat-llantas").append('<a href="#" class="col-xs-6 col-sm-4 col-md-3 cat-llanta" data-diseno="' + r[i].diseño_de_banda + '" >'+
	    							'<div class="col-xs-12 no-padding cat-llanta-wrapper">'+							    								
	    								'<img class="img-responsive" src="'+r[i].imagen+'" alt="">'+
	    								utilizacions+
	    									'<div class="col-xs-12 no-padding">'+
												'<p class="titulo-layer-llanta">'+r[i].diseño_de_banda+'</p><br><br>'+
											'</div>'+	
											'<p class="subtitulo-layer-llanta hidden">West Hauler <br> Lug</p>'+
											'<p class="texto-layer-llanta">' + descripcion + '</p>'+	
	    								'</div>'+
	    							'</div>'+

	    							'<div class="col-xs-4 img-abajo-derecha">'+
	    								imgutilizacion+
	    							'</div>'+
	    						'</a>');
							}

							$("#loader").addClass("hidden");
							$("#cat-llantas").removeClass("hidden");
						});
					
					}
				});

			})( jQuery );
		</script>
		
	</body>	
</html>	

