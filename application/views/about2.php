<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet" type="text/css" />
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
					<form method="post" action="">
						<div class="field">
							<h2 align="center">About Us</h2>
							<hr/>
							<div class="txtcenter">
								<span><a class="linkabout" href="<?php echo base_url()."index.php/controller1/about"; ?>">Our History</a></span> ||
								<span><a class="linkabout" href="<?php echo base_url()."index.php/controller1/about2"; ?>">Vision &amp; Mission</a></span>
							</div>
						</div>
						<br/><br/>
						<div class="field">
							<p class="linespacing">
								God call us and shape us to be His living witnesses of His love and power for the sake of the city.<br/><br/>
								According to the Word of God in Jeremiah 29:& “ But seek the welfare of the city where I have sent you into exile, and pray to the Lord on its behalf, for in its welfare you will find your welfare.” We belief up to this day that God is still looking for people who stand before His presence as a priest to pray for the city and the environment where we belong to.<br/><br/>
								No matter what our denomination is, man and woman, young and old, form every tribe and nation, we stand as one to pray for the city and region to be salt and light through good attitude that will bring transformation to our society. Our background is not the matter, but since we live in the same city, therefore let us pray for the city which we live in.<br/><br/>
								Good invite His people to seek peace and prosperity of the city. This is our environment and God love our environment. When God’s purpose for His creation is finally fulfilled, He will smile upon us for the joy of the Lord is our strength.<br/><br/>
							</p>

							<h2>Vision</h2>
							<p class="linespacing">
								To create positive changes and prosperity in every community in Indonesia.<br/><br/>
							</p>

							<h2>Mission</h2>
							<p class="linespacing">
								To reveal the goodness of God to everyone in the region and to promote welfare in every residency and venue of activity.<br/><br/>
							</p>

							<h2>Target</h2>
							<p class="linespacing">
								To be the agent of change that bring positive changes through creating atmosphere of prayer and care to problems that occur in our neighborhood, schools, and workplace.<br/><br/>
							</p>

							<h2>Strategy</h2>
							<p class="linespacing">
								To actively and sustainably move the believers to take responsibility in bring the welfare to the community, city and nation.<br/><br/>
							</p>
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