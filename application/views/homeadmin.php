<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="container">
			<div id="headerbgadmin">
				<div id="headeradmin">
					<img src="<?php echo base_url().'assets/images/logoadmin3.png'?>"/>
					<div class="menuheader">
						<span class="submenuheaderadmin">
							<span>Welcome, Admin</span>
						</span>
						<span class="submenuheaderadmin">
							<span><img src="<?php echo base_url().'assets/images/notif.png'?>"/></span>
							<span>Notification</span>
						</span>
						<span class="submenuheaderadmin">
							<span><img src="<?php echo base_url().'assets/images/logout.png'?>"/></span>
							<span>Logout</span>
						</span>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<br/><br/>
			<div class="menubaradmin">
				<ul>
					<li><a href="#"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/dashboard.png'?>"/></div>Dashboard</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/index"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/member.png'?>"/></div>Member</a></li>
					<li><a href="#"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/branch.png'?>"/></div>Branch</a></li>
					<li><a href="#"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/event.png'?>"/></div>Event</a></li>
					<li><a href="#"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/news.png'?>"/></div>News</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/about"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/prayerrequest.png'?>"/></div>Prayer Request</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/contact"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/testimony.png'?>"/></div>Testimony</a></li>
				</ul>
			</div>
			<div id="contentadmin">
				<div class="headercontentadmin">Dashboard</div>
				<div class="fieldcontentadmin">
				</div>
				<br/>
				<div class="fieldcontentadmin">
				</div>
			</div>
		</div>
	</body>
</html>