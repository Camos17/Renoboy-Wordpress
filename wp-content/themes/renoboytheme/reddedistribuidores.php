<?php
/*
Template Name: Red de Distribuidores
*/
?>
		<?php include "header.php";?>
		<?php include "menu-fijo.php";?>

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
						<form class="col-xs-12 col-md-12 no-padding" role="search">
							<button type="submit" class="col-xs-2 col-lg-2 btn btn-default btn-busqueda-coordenadas">
								<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/iconobuscar-coord.svg" alt="">
							</button>
							<div class="col-xs-10 col-lg-10 searchinput">
								<input type="text" class="form-control" placeholder="Buscar...">
							</div>
						</form>
						<div class="col-xs-12 checkbox-buscar-coord">
							<input id="checkbox-2" class="col-xs-1 checkbox-buscar" name="checkbox-2" type="checkbox" checked="">
        					<label for="checkbox-2" class="col-xs-11 checkbox-custom-label">Dirección, ciudad, departamento</label>
        				</div>
        				<div class="col-xs-12 checkbox-buscar-coord">
							<input id="checkbox-3" class="col-xs-1 checkbox-buscar" name="checkbox-3" type="checkbox" checked="">
        					<label for="checkbox-3" class="col-xs-11 checkbox-custom-label">Latitud, Lonitud</label>
        				</div>
        				<div class="col-xs-12 linea-nacional-distribucion">
        					<p>LÍNEA NACIONAL: <a href="tel: #########" title="">########</a></p>
        				</div>
        				<div class="col-xs-6 select-distancia">
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
			
		/********************************************
		*********************************************
						FUNCTIONS
		*********************************************	
		*********************************************/

			function initMap(){
			    var mapDiv = document.getElementById('map');
			    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

			    // Initialize map with center
			    var map = new google.maps.Map(mapDiv, {
			      center: {lat: 4.6479, lng: -74.1236},
			      zoom: 7
			    });			

			    // Marker : Bogota
				var markerBog = new google.maps.Marker({
				  position: {lat: 4.6479, lng: -74.1236},
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				});
				var infoBog = new google.maps.InfoWindow({
				  content:"Calle 17A 69F-56, Bogotá, Colombia"
		  		});

			    // Marker : Medellin
				var markerMed = new google.maps.Marker({
				  position: {lat: 6.149459, lng: -75.625685},
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				});
				var infoMed = new google.maps.InfoWindow({
				  content:"Carrera 47 E N° 78C Sur - 95, Sabaneta, Colombia"
				  });

			    // Marker : Yumbo
				var markerYum = new google.maps.Marker({
				  position: {lat: 3.5533536, lng: -76.5002322},
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				});
				var infoYum = new google.maps.InfoWindow({
				  content:"Carrera 20G N° 14B - 36 Yumbo, Colombia"
				  });

				// Click event on marker
				google.maps.event.addListener(markerBog,'click',function() {
					map.setZoom(14);
					map.setCenter(markerBog.getPosition());
					infoBog.open(map,markerBog);
				});

				// set arrays of markers and infos
				var markers = [markerBog, markerMed, markerYum];
				var infos = [infoBog, infoMed, infoYum];
				var marker = new google.maps.Marker({
					map: map
				});

				// Click event on map
				google.maps.event.addListener(map, 'click', function(event){

				    // set variables 
				    var lat = event.latLng.lat();
				    var lng = event.latLng.lng();
				    findClosest(lat,lng);
				});

				// Click event on buscar
				$('#anchorCoords').click(function(event){
					event.preventDefault();
				    // set variables 
				    var lat = parseFloat($('#latitud').val());
				    var lng = parseFloat($('#longitud').val());

				    findClosest(lat,lng);
				});

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
					}
					else{
						alert('Los campos de latitud y longitud no deben estar vacios');
					}
				}

			}

			/********************************************
			*********************************************
							EVENTS
			*********************************************	
			*********************************************/

		</script>		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB19HfuwZ8B4Qtlrb8N38C_tTyUwCpa7m8&callback=initMap&libraries=geometry"
         async defer></script>

		<?php include "footer.php";?>
	</body>	
</html>	