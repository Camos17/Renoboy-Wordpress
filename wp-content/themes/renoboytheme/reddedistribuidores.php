<?php
/*
Template Name: Red de Distribuidores
*/
?>
		<?php include "header.php";?>
		<?php include "menu-fijo.php";?>
		<?php
			global $wpdb;
			$results = $wpdb->get_results( 'SELECT * FROM markers', OBJECT );
		?>
		<div class="col-xs-12 col-sm-12 col-md-12 content-wrapper wrapper-red-distribucion no-padding">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 no-padding wrapper-red-distribucion1">
				<div class="col-xs-12 col-sm-12 col-md 12 no-padding headline-red-distribucion">	
					<h2>ENCUENTRE SU PUNTO DE DISTRIBUCIÓN MÁS CERCANO</h2>
				</div>
				<!-- Buscador -->
				<div class="col-sm-12 col-sm-12 col-md-6 buscar-coordenadas">
					<div class="col-xs-12 col-sm-12 col-lg-12 no-padding searchcoords">
						<!-- Campos de Busqueda -->
						<div class='search-container col-xs-12 col-sm-6'>
							<button type="submit" class="col-xs-2 col-lg-2 btn btn-default btn-busqueda-coordenadas hidden-xs" style='cursor: default;'>
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/iconobuscar-coord.svg" alt="">
							</button>
							
							<div class="col-xs-10 searchinput">
								<input type="text" id="autocomplete" class="form-control" placeholder="Ingresa tu dirección, ciudad">
								<input type="text" id='latitud' name='latitud' class='form-control' value='4.6287833' placeholder="Latitud">
								<input type='text' id='longitud' name='longitud' class='form-control' value='-74.073143' placeholder='Longitud'>
							</div>

	        				<div class="col-xs-12 checkbox-buscar-coord">
								<input id='check2' class="col-xs-1 checkbox-buscar" name="opcion" type="radio">
	        					<label for="checkbox-3" class="col-xs-11 checkbox-custom-label">Latitud, Longitud</label>
	        				</div>

							<div class="col-xs-12 checkbox-buscar-coord">
								<input id='check1' class="col-xs-1 checkbox-buscar" name="opcion" type="radio" checked='checked'>
	        					<label for="checkbox-3" class="col-xs-11 checkbox-custom-label">Dirección, ciudad, departamento</label>
	        				</div>
	        				
	        				<div class="col-xs-12 linea-nacional-distribucion">
	        					<p>LÍNEA NACIONAL: <a href="tel:018000510141" title="">01 8000 510141</a></p>
	        				</div>

	        				<div class="col-xs-12 select-distancia">
	        					<select id='select-distancia' class="form-control">
									<option class="text-center" value="20">20 Km</option>
									<option class="text-center" value="40">40 Km</option>
									<option class="text-center" value="100">100 Km</option>
								</select>
							</div>

						</div>
						<!-- Resultados -->
						<div class='detail-container col-xs-12 col-sm-6'>
							<div class='row' id='detail-row'>
								<!-- container of the detail info 1 -->
								<div class='detail-box col-xs-12 col-sm-12'>
									<div class='row'>
										<div class='detail-fa col-xs-2 col-sm-2 col-md-2'>
											<span class='fa fa-2x fa-map-marker'></span>
										</div>
										<div class='detail-text col-xs-10 col-sm-10 col-md-10'>
											<p>Lubrillantas El Dorado S.A. / Terminal<br>Terminal de Transportes - Bogota Salitre<br>5708722<br>Bogota, Cundinamarca<br>www.lubrillantaseldorado.com</p>
										</div>
									</div>
								</div>
								<!-- container of the detail info 2 -->
								<div class='detail-box col-xs-12 col-sm-12'>
									<div class='row'>
										<div class='detail-fa col-xs-2 col-sm-2'>
											<span class='fa fa-2x fa-map-marker'></span>
										</div>
										<div class='detail-text col-xs-10 col-sm-10'>
											<p>Inversiones MVR Ltda.<br>Cll 45 No 16 - 40<br>2453767<br>Bogota, Cundinamarca<br></p>
										</div>
									</div>
								</div>
								<!-- container of the detail info 3 -->
								<div class='detail-box col-xs-12 col-sm-12'>
									<div class='row'>
										<div class='detail-fa col-xs-2 col-sm-2'>
											<span class='fa fa-2x fa-map-marker'></span>
										</div>
										<div class='detail-text col-xs-10 col-sm-10'>
											<p>Lubrillantas El Dorado S.A. / Terminal<br>Terminal de Transportes - Bogota Salitre<br>5708722<br>Bogota, Cundinamarca<br>www.lubrillantaseldorado.com</p>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<!-- Mapa -->
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 no-padding mapa-red-distribucion">
					<div id='map'></div>
					<div class='map-publicity col-xs-12 col-sm-12'>
						<p>Contamos con 93 Centros de Servicio de la Red de Distribución Michelin a nivel Nacional, los cuales atienden la línea de camión y garantizan la presencia del servicio de reencauche de Renoboy.</p>
					</div>
				</div>
			</div>
		</div>	
		
		<script type="text/javascript">
		
			function initMap(){
				// other jquery functions
				(function($) {
				    var mapDiv = document.getElementById('map');
				    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

					var startPos;
					var geoSuccess = function(position) {
					    startPos = position;
						findClosest(startPos.coords.latitude, startPos.coords.longitude);	
					};
					// checks that the navigator supports geopos
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(geoSuccess);
					}

				    // Initialize map 
				    var map = new google.maps.Map(mapDiv, {
				      center: {lat: 4.6479, lng: -74.1236},
				      zoom: 7,
				      scaleControl:true
			    	});

				    //Initialize marker
					var marker = new google.maps.Marker({
					  position: {lat: 14.6287833, lng: -74.073143},
					  map: map
					});			    

					// set arrays of markers and infos
					var registers = <?php echo json_encode($results); ?>;
					var markers = [];
					var infos = [];
					var detail = [];
					$.each(registers, function(i,v){
						markers[i] = new google.maps.Marker({
						  position: {lat: parseFloat(v.lat), lng: parseFloat(v.lng)},
						  animation: google.maps.Animation.DROP,
						  map: map,
						  icon: iconBase + 'schools_maps.png'
						});
						
						google.maps.event.addListener(markers[i],'click',function() {
							for (var j=0; j<markers.length; j++){
							    if( map.getBounds().contains(markers[j].getPosition()) ){
									markers[j].setAnimation(google.maps.Animation.DROP);
									infos[j].close(map,markers[j]);
							    }
							}
							markers[i].setAnimation(google.maps.Animation.BOUNCE);
							infos[i].open(map,markers[i]);
						});						
						
						infos[i] = new google.maps.InfoWindow({
						  content: v.name_dist + ', ' + v.address
				  		});

				  		detail[i] = '<p>'+v.name_dist+'<br>'+v.address+'<br>'+v.phone+'<br>'+v.city+', '+v.department+'<br>'+v.url+'</p>';
					});

					// Create the autocomplete object and associate it with the UI input control.
					// Restrict the search to the default country, and to place type "cities".
					autocomplete = new google.maps.places.Autocomplete(
				    	/** @type {!HTMLInputElement} */ (
				        document.getElementById('autocomplete')),
				    	{
				        componentRestrictions: {'country': 'col'}
			      	});
				  	autocomplete.addListener('place_changed', onPlaceChanged);

					// When the user selects a city, get the place details for the city and
					// zoom the map in on the city.
					function onPlaceChanged() {
					  var place = autocomplete.getPlace();
					  
					  if (place.geometry) {
						var lat = place.geometry.location.lat();
						var lng = place.geometry.location.lng();
						findClosest(lat,lng);  
					  } else {
					    document.getElementById('autocomplete').placeholder = 'Ingresa tu dirección, ciudad o departamento';
					  }
					}

					// Click event on map
					google.maps.event.addListener(map, 'click', function(event){
					    // set variables 
					    var lat = event.latLng.lat();
					    var lng = event.latLng.lng();
					    findClosest(lat,lng);
					});

					// info current map
					function printInfo(){
						$('#detail-row').html('');
						for (var i=0; i<markers.length; i++){
						    if( map.getBounds().contains(markers[i].getPosition()) ){
						        // code for showing your object, associated with markers[i]
						        $('#detail-row').append("<div class='detail-box col-xs-12 col-sm-12'><div class='row'><div class='detail-fa col-xs-2 col-sm-2 col-md-2'><span class='fa fa-2x fa-map-marker'></span></div><div class='detail-text col-xs-10 col-sm-10 col-md-10'>" + detail[i] + "</div></div></div>");
						    }
						}
					}

					// set zoom
					function setZoom(){
					    var radio = $('#select-distancia').val();
					    if(radio == 20){
							map.setZoom(12);
							printInfo();
						}else if(radio == 40){
							map.setZoom(10);
							printInfo();
						}else{
							map.setZoom(9);
							printInfo();
						}
					}
					$('#select-distancia').change(function(){
						setZoom();
					});

					// Find Closest
					function findClosest(lat,lng){
					    
					    if(lat != '' && lng != ''){
						    var latlng = new google.maps.LatLng(lat,lng);
						    var distances = [];
						    var closest = -1;

						    // position marker
							marker.setPosition(latlng);
						    
						    // search for closer among markers
						    for( i=0; i< markers.length; i++ ) {
						        var mlatlng = new google.maps.LatLng(markers[i].position.lat(),markers[i].position.lng());
						        distances[i] = parseInt(google.maps.geometry.spherical.computeDistanceBetween(mlatlng, latlng));

						        if ( closest == -1 ) {
						            closest = i;
						        	markers[i].setAnimation(google.maps.Animation.DROP);	
						        	infos[i].close();
						        }
						        else if(distances[i] < distances[closest]){	
						            closest = i;
						        }
						        else{
						        	markers[i].setAnimation(google.maps.Animation.DROP);	
						        	infos[i].close();
						        }
						    }

						    // show closer location
							map.setCenter(markers[closest].getPosition());
							markers[closest].setAnimation(google.maps.Animation.BOUNCE);
							infos[closest].open(map,markers[closest]);

						    // set zoom
						    setZoom();

						}
						else{
							alert('Los campos de latitud y longitud no deben estar vacios');
						}
					}

					$( document ).ready(function() {
						$('#latitud').hide();
						$('#longitud').hide();	
					});
					
					/********************************************
					*********************************************
									EVENTS
					*********************************************	
					*********************************************/

					$('input[type=radio][name=opcion]').change(function(){
						$('#autocomplete').toggle();
						$('#latitud').toggle();
						$('#longitud').toggle();
					});

					$('input[type=text][name=latitud]').change(function(){
					    // set variables 
					    var lat = parseFloat($('#latitud').val());
					    var lng = parseFloat($('#longitud').val());

					    findClosest(lat,lng);
					});

					$('input[type=text][name=longitud]').change(function(){
					    // set variables 
					    var lat = parseFloat($('#latitud').val());
					    var lng = parseFloat($('#longitud').val());

					    findClosest(lat,lng);
					});

				})( jQuery );
			}
		</script>		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB19HfuwZ8B4Qtlrb8N38C_tTyUwCpa7m8&callback=initMap&libraries=geometry,places"
         async defer></script>

		<?php include "footer.php";?>
	</body>	
</html>	