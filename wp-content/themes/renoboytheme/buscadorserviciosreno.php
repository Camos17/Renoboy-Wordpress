<?php
/*
Template Name: Buscador Servicios
*/
?>
		<?php include "header.php";?>

		<div class="col-xs-12 no-padding content-wrapper fondo-buscador">
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
									UTILIZACIÓN
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
							<div class="col-xs-12 col-sm-12 iconos-servicio-recomendado">	
								<div class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 icono-recomendado">
								<button type="button"class="col-xs-12 btn-servicio-regional">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL.svg" alt="">
										<span class="col-xs-12 no-padding">Regional</span>	
									</button>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 icono-recomendado">
									<button type="button" class="col-xs-12 btn-servicio-mixta">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/MIXTA.svg" alt="">
										<span class="col-xs-12 no-padding">Mixta</span>
									</button>
								</div>					
								<div class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 icono-recomendado">
									<button type="button" class="col-xs-12 btn-servicio-urbano">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/URBANO.svg" alt="">
										<span class="col-xs-12 no-padding">Urbano</span>
									</button>					
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 icono-recomendado">
									<button type="button" class="col-xs-12 btn-servicio-cantera">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/CANTERA.svg" alt="">
										<span class="col-xs-12 no-padding">Cantera</span>
									</button>				
								</div>														
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-12 buscador-columna2">
						<div class="col-xs-12 no-padding seccion-servicio-posicion">
							<li class="col-xs-4 titulo-seccion">
									POSICIÓN
							</li>
							<li class="col-xs-4 col-xs-offset-2">
								 <select>
									<option value="volvo">Tracción</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</li>
							<li class="col-xs-2 pull-right">
								<a id="ayuda-posicion" href="#" title="" data-toggle="modal" data-target="#ayuda-modal2">
									<i class="fa fa-question-circle"></i>
								</a>
							</li>
						</div>
						<div class="col-xs-12 no-padding seccion-servicio-dimension">
							<li class="col-xs-4 titulo-seccion">
								DIMENSIÓN
							</li>
							<li class="col-xs-7 pull-right">
								 <select class="col-xs-12">
									<option value="volvo">295/80 R 22.5</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</li>
						</div>
						<div class="col-xs-12 no-padding seccion-servicio-categoria">
							<li class="col-xs-4 titulo-seccion">
								CATEGORÍA
							</li>
							<li class="col-xs-12 no-padding">
								<select multiple class="form-control">
									<option>Tu llanta NUEVA de NUEVO</option>
									<option>Línea Premium</option>
									<option>Línea Básica</option>
								</select>
							</li>
							<li class="col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-6 col-md-6 col-md-offset-5 no-padding btn-buscar-servicio">
								<button class="btn btn-default btn-buscar-servicio col-xs-12" type="submit">BUSCAR MI SERVICIO</button>
							</li>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 cat-llantas">
				<div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-6 col-md-offset-0 no-padding">
					<a href="#" class="col-xs-6 cat-llanta" data-toggle="modal" data-target="#modal-producto">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">		
								<div class="col-xs-12 no-padding">
									<p class="titulo-layer-llanta">WHL</p><br><br>
								</div>			
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL2.svg" alt="">
						</div>					
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">
								<div class="col-xs-12 no-padding">					
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/MIXTA2.svg" alt="">
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-6 col-md-offset-0 no-padding">
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">			
								<div class="col-xs-12 no-padding">			
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/CANTERA2.svg" alt="">
						</div>
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">			
								<div class="col-xs-12 no-padding">			
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/URBANO2.svg" alt="">
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-6 col-md-offset-0 no-padding">				
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">			
								<div class="col-xs-12 no-padding">			
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL2.svg" alt="">
						</div>				
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">			
								<div class="col-xs-12 no-padding">			
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/MIXTA2.svg" alt="">
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-6 col-md-offset-0 no-padding">	
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">			
								<div class="col-xs-12 no-padding">			
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/CANTERA2.svg" alt="">
						</div>
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="">
							<div class="col-xs-12 no-padding layer-cat-llanta">							
								<div class="col-xs-12 no-padding">							
									<p class="titulo-layer-llanta">XZE-2</p><br><br>
								</div>
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-4 img-abajo-derecha">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/URBANO2.svg" alt="">
						</div>
					</a>
				</div>
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
								<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
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
								<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
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
								<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
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
								<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
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
						<img class="img-responsive" src="http://placehold.it/400x250" alt="">
						<div class="col-xs-4 col-xs-offset-4 no-padding posicion2">				
							<label class="col-xs-12">
								<p>Eje Libre</p>
							</label>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1 no-padding posicion">
						<img class="img-responsive" src="http://placehold.it/400x250" alt="">
						<div class="col-xs-4 col-xs-offset-4 no-padding posicion2">
							<label class="col-xs-12"> 
								<p>Tracción</p>
							</label>
						</div>						
					</div>
		    	</div>		    		
		      <div class="modal-footer ayuda-modal-footer">
		    	<button type="button" class="btn btn-default cerrar-ayuda2" data-dismiss="modal">Cerrar</button>
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
								<button type="button" class="close btn-cerrar-modal" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</button>
								
								<div class="col-xs-12 col-md-4 no-padding headline-modal-producto">
									<div class="col-xs-12 no-padding headline-modal-producto2">
										<h2 class="modal-title col-xs-8">REGIONAL</h2>
							        	<div class="col-xs-4 col-sm-3 col-md-4 pull-right-1 icono-header">
						    				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/REGIONAL.svg" alt="">
										</div>
									</div>
									<div class="col-xs-12 imagen-llanta">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/5.jpg" alt="">
									</div>	
								</div>

								<div class="col-xs-12 no-padding contenido-modal-producto">
									<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-lg-offset-1 logo-recamic">
			    						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/logo_recamic.jpg" alt="...">
			    					</div>
			    					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-4 img-aplicacion">
			    						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/aplicacionrecomendada.svg" alt="...">
			    						<p class="va">aplicación <br> recomendada</p>
			    					</div>
			    					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-6 col-lg-4 img-aplicacion">
			    						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/aplicacionaceptada.svg" alt="...">
			    						<p class="va">aplicación <br> aceptada</p>
			    					</div>
			    					<div class="col-xs-12 texto-modal-producto">
				    					<h3>carácteristicas y beneficios</h3>
				    					<div class="col-xs-12 no-padding">
				    						<hr>
				    					</div>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    			cillum dolore eu fugiat nulla pariatur.</p>
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
											<tbody>
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
											<i class="col-xs-1 no-padding fa fa-usd" aria-hidden="true"></i>
											<p class="col-xs-11">PRECIO: Consulte con su distribuidor.</p>
										</div>
										<div class="col-xs-12 texto-convenciones">
											<i class="col-xs-1 no-padding fa fa-file-text icono-documento" aria-hidden="true"></i>
											<p class="col-xs-11">INVENTARIO: Producto sujeto a disponibilidad.</p>
										</div>
										<div class="col-xs-12 texto-convenciones">
											<i class="col-xs-1 no-padding fa fa-check-circle" aria-hidden="true"></i>
											<p class="col-xs-11">GARANTÍA Y CONDICIONES DE USO: Link a PDF.</p>
										</div>
									</div>

									<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-4 col-lg-5 col-lg-offset-6 btn-modal-producto-comprar">
										<a class="col-xs-12 btn btn-block no-padding" href="#" title="">
											<img class="col-xs-2 no-padding" src="<?php bloginfo('template_directory');?>/img/carritodecompras.svg" alt="...">
											<p>Quiero Comprar</p>
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
		
	</body>	
</html>	

