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
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 buscar-coordenadas">
					<div class="col-xs-12 col-lg-12 no-padding searchcoords">
						<!-- <input type="text" class="form-control" name="latitud" id='latitud' placeholder="Latitud">
						<input type="text" class="form-control" name="longitud" id='longitud' placeholder="Longitud">
						<a class="btn btn-default btn-buscar-coords col-xs-12" id='anchorCoords'>BUSCAR MAS CERCANO</a> -->
						
						<button type="submit" class="col-xs-2 col-lg-2 btn btn-default btn-busqueda-coordenadas">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/iconobuscar-coord.svg" alt="">
						</button>
						
						<div class="col-xs-10 col-lg-10 searchinput">
							<input type="text" id="autocomplete" class="form-control" placeholder="Ingresa tu dirección, ciudad, departamento">
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
        					<p>LÍNEA NACIONAL: <a href="tel: #########" title="">########</a></p>
        				</div>
        				<div class="col-xs-6 select-distancia hidden">
        					<select class="form-control">
								<option class="text-center">20 Km</option>
								<option class="text-center">50 Km</option>
								<option class="text-center">60 Km</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col hidden-xs hidden-sm no-padding ubicaciones-sugeridas">
					<a class="col-md-12 no-padding ubicacion-sugerida" href="#" title="">
						<div class="col-md-2">
							<i class="fa fa-map-marker img-responsive"></i>
						</div>
						<div class="col-md-10 no-padding info-ubicacion-sugerida">
							<ul class="col-md-12">
								<li>Renoboy Distribuidor 1</li>
								<li>A 10Km de Dsitancia</li>
								<li>calle 63 #45-6</li>
								<li>Tel: 400 27 61</li>
								<li>Barrio: Chapinero</li>
								<li>www.renoboyd1.com</li>
							</ul>
						</div>
					</a>
					<a class="col-md-12 no-padding ubicacion-sugerida" href="#" title="">
						<div class="col-md-2">
							<i class="fa fa-map-marker img-responsive"></i>
						</div>
						<div class="col-md-10 no-padding info-ubicacion-sugerida">
							<ul class="col-md-12">
								<li>Renoboy Distribuidor 1</li>
								<li>A 10Km de Dsitancia</li>
								<li>calle 63 #45-6</li>
								<li>Tel: 400 27 61</li>
								<li>Barrio: Chapinero</li>
								<li>www.renoboyd1.com</li>
							</ul>
						</div>
					</a>
					<a class="col-md-12 no-padding ubicacion-sugerida" href="#" title="">
						<div class="col-md-2">
							<i class="fa fa-map-marker img-responsive"></i>
						</div>
						<div class="col-md-10 no-padding info-ubicacion-sugerida">
							<ul class="col-md-12">
								<li>Renoboy Distribuidor 1</li>
								<li>A 10Km de Dsitancia</li>
								<li>calle 63 #45-6</li>
								<li>Tel: 400 27 61</li>
								<li>Barrio: Chapinero</li>
								<li>www.renoboyd1.com</li>
							</ul>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-1 no-padding mapa-red-distribucion">
					<div id='map'></div>
				</div>
			</div>
		</div>	
		
		<script type="text/javascript">
		
			function initMap(){
			    var mapDiv = document.getElementById('map');
			    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

			    // Initialize map with center
			    var map = new google.maps.Map(mapDiv, {
			      center: {lat: 4.6479, lng: -74.1236},
			      zoom: 7
			    });

			    //Initialize marker
				var marker = new google.maps.Marker({
				  position: {lat: 4.6287833, lng: -74.073143},
				  map: map
				});			    

				// set arrays of markers and infos
				var registers = <?php echo json_encode($results); ?>;
				var markers = [];
				var infos = [];
				$.each(registers, function(i,v){
					markers[i] = new google.maps.Marker({
					  position: {lat: parseFloat(v.lat), lng: parseFloat(v.lng)},
					  animation: google.maps.Animation.DROP,
					  map: map,
					  icon: iconBase + 'schools_maps.png'
					});
					
					infos[i] = new google.maps.InfoWindow({
					  content: v.name_dist + ', ' + v.address
			  		});
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
						map.setZoom(14);
						markers[closest].setAnimation(google.maps.Animation.BOUNCE);
						infos[closest].open(map,markers[closest]);
					}
					else{
						alert('Los campos de latitud y longitud no deben estar vacios');
					}
				}

				// other jquery functions
				(function($) {
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