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
					<li><a href="<?php echo base_url()."index.php/controller1/homeadmin"; ?>" class="menulink"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/dashboard.png'?>"/></div>Dashboard</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/memberadmin"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/member.png'?>"/></div>Member</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/branchadmin"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/branch.png'?>"/></div>Branch</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/eventadmin"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/event.png'?>"/></div>Event</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/newsadmin"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/news.png'?>"/></div>News</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/prayerrequestadmin"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/prayerrequest.png'?>"/></div>Prayer Request</a></li>
					<li><a href="<?php echo base_url()."index.php/controller1/testimonyadmin"; ?>"><div class="imgmenubaradmin"><img src="<?php echo base_url().'assets/images/testimony.png'?>"/></div>Testimony</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div id="contentadmin">
				<div class="headercontentadmin">Dashboard</div>
				<div class="clear"></div>
				<div class="fieldcontentadmin">
					<div class="subheaderadmin">
						<h2>Quick Links</h2>
						<hr/>
					</div>
					<div>
					<div class="quicklinksadmin">
						<a href="<?php echo base_url()."index.php/controller1/homeadmin"; ?>" class="menulink">
							<img src="<?php echo base_url().'assets/images/neweventicon.png'?>"/>
							New Event
						</a>
					</div>
					<div class="quicklinksadmin">
						<a href="<?php echo base_url()."index.php/controller1/homeadmin"; ?>" class="menulink">
							<img src="<?php echo base_url().'assets/images/createnewsicon.png'?>"/>
							Create News
						</a>
					</div>
					<div class="quicklinksadmin">
						<a href="<?php echo base_url()."index.php/controller1/homeadmin"; ?>" class="menulink">
							<img src="<?php echo base_url().'assets/images/newbranchicon.png'?>"/>
							New Branch
						</a>
					</div>
					<div class="quicklinksadmin">
						<a href="<?php echo base_url()."index.php/controller1/homeadmin"; ?>" class="menulink">
							<img src="<?php echo base_url().'assets/images/confirmationpaymenticon.png'?>"/>
							Confirmation<br/>Payment
						</a>
					</div>
					<div class="quicklinksadmin">
						<a href="<?php echo base_url()."index.php/controller1/homeadmin"; ?>" class="menulink">
							<img src="<?php echo base_url().'assets/images/confirmationprayericon.png'?>"/>
							Confirmation<br/>Prayer Request
						</a>
					</div>
					</div>
				</div>
				<div class="clear"></div>
				<br/>
				<div class="fieldcontentadmin">
					<div class="subheaderadmin">
						<h2>Information</h2>
						<hr/>
					</div>
					<div>
						<table class="tableadmin">
							<tr class="colortableheader">
								<td colspan="2">Data Activity MyHome Indonesia</td>
							</tr>
							<tr>
								<td>Total Staff</td>
								<td align="center">500</td>
							</tr>
							<tr class="colortablecontent">
								<td>Total Member</td>
								<td align="center">500</td>
							</tr>
							<tr>
								<td>Total Event Free</td>
								<td align="center">500</td>
							</tr>
							<tr class="colortablecontent">
								<td>Total Event Paid</td>
								<td align="center">500</td>
							</tr>
							<tr>
								<td>Total Registration Event</td>
								<td align="center">500</td>
							</tr>
							<tr class="colortablecontent">
								<td>Total News</td>
								<td align="center">500</td>
							</tr>
							<tr>
								<td>Total Prayer Request</td>
								<td align="center">500</td>
							</tr>
							<tr class="colortablecontent">
								<td>Total Testimony</td>
								<td align="center">500</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>