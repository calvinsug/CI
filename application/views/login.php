<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="container">
			<div id="header">
				<img src="assets/images/Myhome.jpg"/>
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
					<form method="post" action="">
						<div class="field">
							<h2 align="center">Sign In My Home Indonesia</h2>
							<hr/>
						</div>
						<br/>
						<div class="field">
							<span>Username</span>
							<span><input type="text" name="username" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Password</span>
							<span><input type="password" name="password" class="textbox"/></span>
						</div>
						<br/><br/>
						<div class="field">
							<div class="submit"><input type="submit" value="Sign In" class="sizesubmit"/></div>
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