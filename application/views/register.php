<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link href="<?php echo base_url().'assets/css/style.css' ?>" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
		<script src="<?php echo base_url().'assets/library/jquery-2.1.1.js'?>"></script>
	
<script>

$(document).ready(function(){
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
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

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
			<div id="header">
				<img src="Myhome.jpg"/>
				<div class="menuheader">
					<span class="submenuheader">
						<span><img src="englishflag.jpg"/></span>
						<span>ENG</span>
					</span>
					<span class="submenuheader">
						<span><img src="indonesiaflag.jpg"/></span>
						<span>IND</span>
					</span>
					<span class="submenuheader">
						<span><a href="login.html">Sign In</a></span>
					</span>|
					<span class="submenuheader">
						<span><a href="register.html">Register</a></span>
					</span>
				</div>
			</div>
			<div class="clear"></div>
			<br/><br/>
			<div class="menubar">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">List Events</a></li>
					<li><a href="#">Testimony</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
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
							<h2 align="center">Register</h2>
							<hr/>
						</div>
						<br/>
						<div class="field">
							<span>Username</span>
							<span><input type="text" id="idUsername" name="username" class="textbox classUsername"/></span>
						</div>
						<div class="field">
							<span>Password</span>
							<span><input type="password" name="password" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Firstname</span>
							<span><input type="text" name="firstname" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Lastname</span>
							<span><input type="text" name="lastname" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Email</span>
							<span><input type="text" name="email" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Phone</span>
							<span><input type="text" name="phone" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Address Adopt</span>
						</div>
						
						<div>
							<input id="pac-input" class="controls" type="text" placeholder="Enter a location"/>
							<div id="type-selector" class="controls">
								<!--
								<input type="radio" name="type" id="changetype-all" checked="checked">
								<label for="changetype-all">All</label>

								<input type="radio" name="type" id="changetype-establishment">
								<label for="changetype-establishment">Establishments</label>

								<input type="radio" name="type" id="changetype-geocode">
								<label for="changetype-geocode">Geocodes</label>

								<input type="radio" name="type" id="changetype-address" checked="checked">
								<label for="changetype-address">Addresses</label>
								-->
								

								
							</div>
							<div id="map-canvas"></div>
						</div>
						<br/>
						<div class="field">
							<span>Region</span>
							<span><input type="text" name="email" class="textbox"/></span>
						</div>
						<br/><br/>
						<div class="field">
							<div class="submit"><input type="submit" value="Register" class="sizesubmit"/></div>
						</div>
						<br/><br/>
					</form>
				</div>
			</div>
			<div id="footer">
				<div class="widget">
					<img src="facebook.jpg"/>
					<img src="twitter.jpg"/>
				</div>
				<div>© 2014 MyHomeIndonesia Rights Reserved</div>
			</div>
		</div>
	</body>
</html>