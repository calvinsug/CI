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
							<h2 align="center">Contact Us</h2>
							<hr/>
						</div>
						<br/>
						<div class="field">
							<span>Fullname</span>
							<span><input type="text" name="fullname" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Email</span>
							<span><input type="text" name="email" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Title</span>
							<span><input type="text" name="title" class="textbox"/></span>
						</div>
						<div class="field">
							<span>Message</span>
							<span><textarea class="textarea"></textarea></span>
						</div>
						<br/><br/>
						<div class="field">
							<div class="submit"><input type="submit" value="Send" class="sizesubmit"/></div>
						</div>
						<br/><br/>
					</form>
					<div class="field">
						<div class="field">
							<h2 align="center">Address</h2>
							<hr/>
						</div>
						<p align="center">
						MyHome Indonesia<br/><br/>
						Gibbor Lt.4, Kelapa Gading Square A/11<br/><br/>
						Jl. Boulevard Barat Raya, Rukan Italian  Walk<br/><br/>
						Kelapa Gading, Jakarta Utara - Jakarta 14240<br/><br/>
						Telp : (+62-21) 2936 3786 / 2936 3787<br/><br/>
						Fax. : (+62-21) 4587 1015<br/><br/>
						Email : info@myhomeindonesia.org<br/><br/>
						</p>
					</div>
					<br/><br/>
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