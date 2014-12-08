<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link href="<?php echo base_url().'assets/css/style.css' ?>" rel="stylesheet" type="text/css" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	    <script src="<?php echo base_url().'assets/library/filejavascript.js'?>"></script>
	</head>
	<body onload="initialize(-6.875046,107.614174)">
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
							<span><a href="<?php echo base_url()."controller1/login"; ?> ">Sign In</a></span>
						</span>
						<span class="submenuheader">|</span>
						<span class="submenuheader">
							<span><a href="<?php echo base_url()."controller1/register"; ?> ">Register</a></span>
						</span>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="menubar">
				<ul>
					<li><a href="<?php echo base_url()."controller1/index"; ?>" class="menulink">Home</a></li>
					<li><a href="#">List Events</a></li>
					<li><a href="#">Testimony</a></li>
					<li><a href="<?php echo base_url()."controller1/about"; ?>">About Us</a></li>
					<li><a href="<?php echo base_url()."controller1/contact"; ?>">Contact Us</a></li>
				</ul>
				<div class="search">
					<input type="text" name="search"/>
					<input type="submit" value="Search"/>
				</div>
			</div>
			<div class="clear"></div>
			<br/><br/>
			<div id="content">
				<div class="containermap">
                    <div id="map-canvas" style="width: 1050px; height: 450px"></div>
                </div>
				<div class="clear"></div>
				<br/><br/>
				<div class="news">
					<h2>News</h2>
					<img src="<?php echo base_url().'assets/images/Myhome.jpg'?>" class="newspicture"/>
					<div class="newstext">
						1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasds
						adasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsad
						asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsa
						dasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsada
						sdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsad
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadas
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadas
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsa...
					</div>
					<br/>
					<div>Continue Reading</div>
				</div>
				<div class="news">
					<h2>News</h2>
					<img src="<?php echo base_url().'assets/images/Myhome.jpg'?>" class="newspicture"/>
					<div class="newstext">
						1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasds
						adasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsad
						asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsa
						dasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsada
						sdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsad
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadas
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadas
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsa...
					</div>
					<br/>
					<div>Continue Reading</div>
				</div>
				<div class="news">
					<h2>News</h2>
					<img src="<?php echo base_url().'assets/images/Myhome.jpg' ?>" class="newspicture"/>
					<div class="newstext">
						1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasds
						adasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsad
						asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsa
						dasdsadasdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsada
						sdasdsadasdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsad
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadas
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsadasdsadasdasdsadasdsadas
						asdsadasdasdsadasdsadasdasdsadasdsad1asdasdsadasdsadasdasdsa...
					</div>
					<br/>
					<div>Continue Reading</div>
				</div>
				<div class="clear"></div>
				<br/><br/>
			</div>
			<div id="footer">
				<div class="widget">
					<span class="txtwidget">Stay Connect With Us At</span>
					<img src="<?php echo base_url().'assets/images/facebook.png'?>"/>
					<img src="<?php echo base_url().'assets/images/twitter.png'?>"/>
				</div>
				<div>&copy; 2014 MyHomeIndonesia Rights Reserved</div>
			</div>
		</div>
	</body>
</html>