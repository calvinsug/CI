<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
		<script src="<?php echo base_url().'assets/library/jquery-2.1.1.js'?>"></script>
	
		<script>

			$( document ).ready(function() {
			 	$('#formRegis').submit(function(e){
			 		console.log(e);
			 		e.preventDefault();
			 	});
			});




			function initialize() {
			  var mapOptions = {
			    center: new google.maps.LatLng(-33.8688, 151.2195),
			    zoom: 13
			  };
			  var map = new google.maps.Map(document.getElementById('map-canvas'),
			    mapOptions);

			  var input = /** @type {HTMLInputElement} */(
			      document.getElementById('pac-input'));

			  var types = document.getElementById('type-selector');
			  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
			  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

			  var autocomplete = new google.maps.places.Autocomplete(input);
			  autocomplete.bindTo('bounds', map);

			  var infowindow = new google.maps.InfoWindow();
			  var marker = new google.maps.Marker({
			    map: map,
			    anchorPoint: new google.maps.Point(0, -29)
			  });

			  google.maps.event.addListener(autocomplete, 'place_changed', function() {
			    

			    infowindow.close();
			    marker.setVisible(false);
			    var place = autocomplete.getPlace();
			    if (!place.geometry) {
			      return;
			    }

			    // If the place has a geometry, then present it on a map.
			    if (place.geometry.viewport) {
			      map.fitBounds(place.geometry.viewport);
			    } else {
			      map.setCenter(place.geometry.location);
			      map.setZoom(17);  // Why 17? Because it looks good.
			    }
			    marker.setIcon(/** @type {google.maps.Icon} */({
			      url: place.icon,
			      size: new google.maps.Size(71, 71),
			      origin: new google.maps.Point(0, 0),
			      anchor: new google.maps.Point(17, 34),
			      scaledSize: new google.maps.Size(35, 35)
			    }));
			    
			    console.log(place.geometry.location.k);
			    console.log(place.geometry.location.B);
				//document.getElementById("display1").value=place.geometry.location.k;
				//document.getElementById("display2").value=place.geometry.location.B;
			    marker.setPosition(place.geometry.location);
			    marker.setVisible(true);

			    var address = '';
			    if (place.address_components) {
			      address = [
			        (place.address_components[0] && place.address_components[0].short_name || ''),
			        (place.address_components[1] && place.address_components[1].short_name || ''),
			        (place.address_components[2] && place.address_components[2].short_name || '')
			      ].join(' ');
			    }

			    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
			    infowindow.open(map, marker);
			  });

			  // Sets a listener on a radio button to change the filter type on Places
			  // Autocomplete.
			  function setupClickListener(id, types) {
			    var radioButton = document.getElementById(id);

			    autocomplete.setTypes(types);
			    
			    /*google.maps.event.addDomListener(radioButton, 'click', function() {
			      autocomplete.setTypes(types);
			    });*/
			  }

			  
			  //setupClickListener('changetype-all', []);
			  setupClickListener('changetype-address', ['address']);
			  //setupClickListener('changetype-establishment', ['establishment']);
			  //setupClickListener('changetype-geocode', ['geocode']);
			  
			}

			google.maps.event.addDomListener(window, 'load', initialize);




    	</script>
	</head>
	<body>
		<div id="container">
			<div id="headerbg">
				<div id="header">
					<img src="<?php echo base_url().'assets/images/Myhome.png'?>"/>
					<div class="menuheader">
						<span class="submenuheader">
							<span><img src="<?php echo base_url().'assets/images/englishflag.jpg'?>"/></span>
							<span>ENG</span>
						</span>
						<span class="submenuheader">
							<span><img src="<?php echo base_url().'assets/images/indonesiaflag.jpg'?>"/></span>
							<span>IND</span>
						</span>
						<span class="submenuheader">
							<span><a href="<?php echo base_url()."index.php/controller1/login"; ?> ">Sign In</a></span>
						</span>
						<span class="submenuheader">|</span>
						<span class="submenuheader">
							<span><a href="<?php echo base_url()."index.php/controller1/register"; ?> ">Register</a></span>
						</span>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="menubar">
				<ul>
					<li><a href="<?php echo base_url()."index.php/controller1/index"; ?>">Home</a></li>
					<li><a href="#">List Events</a></li>
					<li><a href="#">Testimony</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/about"; ?>">About Us</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/contact"; ?>">Contact Us</a></li>
				</ul>
				<div class="search">
					<input type="text" name="search"/>
					<input type="submit" value="Search"/>
				</div>
			</div>
			<div class="clear"></div>
			<br/><br/>
			<div id="content">
				<div class="form">
					<form method="post" action="" id="formRegis">
						<div class="field">
							<h2 align="center">Adopt Street</h2>
							<hr/>
						</div>
						<br/>
						<div class="field">
							<span>Address Adopt</span>
							<span><input id="pac-input" class="textbox" type="text" placeholder="Enter a location"/></span>
						</div>
						
						<div>
							
							<!--<div id="type-selector" class="controls">
								
								<input type="radio" name="type" id="changetype-all" checked="checked">
								<label for="changetype-all">All</label>

								<input type="radio" name="type" id="changetype-establishment">
								<label for="changetype-establishment">Establishments</label>

								<input type="radio" name="type" id="changetype-geocode">
								<label for="changetype-geocode">Geocodes</label>

								<input type="radio" name="type" id="changetype-address" checked="checked">
								<label for="changetype-address">Addresses</label>
							</div>-->
							<div id="map-canvas"></div>
						</div>
						<br/>
						<div class="field">
							<span>Region</span>
							<span>
								<select name="region" class="textbox">
									<option value="home">Home</option>
									<option value="office">Office</option>
									<option value="school">School / Collage</option>
									<option value="publicfacilities">Public Facilities</option>
								</select>
							</span>
						</div>
						<div class="field">
							<div class="textbox">
								<ol>
									<li>Office: a place where could be a place to work. For example: an office.</li>
									<li>Home: a place that bs used as examples of residential homes, houses, shops, hotels, apartments, dormitories, boarding-lodging.</li>
									<li>School or college: a place where could be a place to learn. For example: school, college, where lessons, the course.</li>
									<li>Public facilities: a place that used public facilities. For example: hospitals, government buildings, workplaces, airports, terminals, railway stations.</li>
									<br/><br/>
								</ol>
							</div>
						</div>
						<div class="field">
							<div class="submit"><input type="submit" value="Register" class="sizesubmit"/></div>
						</div>
						<br/><br/>
					</form>
				</div>
			</div>
			<div id="footer">
				<div class="widget">
					<img src="<?php echo base_url().'assets/images/facebook.png'?>"/>
					<img src="<?php echo base_url().'assets/images/twitter.png'?>"/>
				</div>
				<div>&copy; 2014 MyHomeIndonesia Rights Reserved</div>
			</div>
		</div>
	</body>
</html>