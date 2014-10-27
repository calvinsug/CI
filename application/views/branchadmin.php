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
				<div class="headercontentadmin">Branch</div>
				<div class="clear"></div>
				<div class="fieldcontentadmin">
					<div class="subheaderadmin">
						<h2>List Branch</h2>
						<div class="adminicon">
							<a href="<?php echo base_url()."index.php/controller1/branchadmin"; ?>">
								<img src="<?php echo base_url().'assets/images/newbranchicon2.png'?>"/>
								Add Branch
							</a>
						</div>
						<hr/>
					</div>
					<div>
						<table class="tableadmin">
							<tr class="colortableheader" align="center">
								<td>BranchID</td>
								<td>BranchLongitude</td>
								<td>BranchLatitude</td>
								<td>BranchAddress</td>
								<td>Region</td>
								<td>StaffID</td>
								<td>Update Branch</td>
							</tr>
							<tr align="center">
								<td>Total Staff</td>
								<td>500</td>
								<td>Total Staff</td>
								<td>500</td>
								<td>Total Staff</td>
								<td>500</td>
								<td>Update</td>
							</tr>
							<tr class="colortablecontent" align="center">
								<td>Total Staff</td>
								<td>500</td>
								<td>Total Staff</td>
								<td>500</td>
								<td>Total Staff</td>
								<td>500</td>
								<td>Update</td>
							</tr>
							<tr align="center">
								<td>Total Staff</td>
								<td>500</td>
								<td>Total Staff</td>
								<td>500</td>
								<td>Total Staff</td>
								<td>500</td>
								<td>Update</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>