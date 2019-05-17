<?php
//code here
//useful 
// $_POST $_GET $_SESSION

session_start();
include_once('top-part.php');?>
	<title>Josh Thomas | Home</title>
<?php include_once('mid-part.php'); ?>

<main>
	<img src="images/contact.png" title="Josh Thomas" alt="Josh Thomas Photo" id="profile_image" width="280" height="150"/>
	<div id="profile">
		<h3 class="heading">Meet Josh</h3>
		<p>
			Josh Thomas is a comedian, writer and actor.
		</p>
		<p>
			 At age 17, he was the youngest ever comedian to win the Melbourne International Comedy Festival's Raw Comedy Competition. 
		</p>
	</div>
	<div id = "home">
		<img src ="images/joshthomas.png" title = "Josh Thomas Home" id="home_image" alt="Josh Thomas Image"/>
		<h4>Home</h4>
		<p>
			Josh is on television shows such as Please Like Me, Talkin' Bout Your Generation and The Project.
		</p>
		<p>
			Please Like Me can be seen on ABC in Australia, Pivot in the US and CBC in Canada. 
		</p>
	</div>
	<div id = "plm">
		<img src ="images/disc.png" title = "Please Like Me Show"  alt="Please Like Me Disc" id="plm_image" height="185" width="185"/>
		<h4>Please Like Me</h4>
		<p>
			Josh created and stars in the award winning comedy drama show "Please Like Me".
		</p>
		<p>
			The show has been renewed for a 4th season. The 4th season will premier on ABC later this year. 
		</p>
		<p>
			Season 1, 2, 3 are out on DVD and Blu-Ray. Check out the <a href = "shop.php">Shop</a> for more details. 
		</p>
	</div>
	<div id = "contact">
		<!--http://resources0.news.com.au/images/2012/03/19/1226303/803812-josh-thomas.jpg-->
		<img src ="images/josh.png" title = "Josh Thomas Contact"  alt="Josh Thomas Contact Pic" width="325" height="183"/>
		<h4>Contact</h4>
		<p>
			Josh is available for private and corporate gigs. For all enquiries please fill out the form on the <a href = "contact.php">Contact</a> page. 
		</p>
		<p>
			Josh has performed live comedy shows on the international stage. He tours his own stand-up shows and has performed at the Edinburgh and Montreal Comedy Festivals. 
		</p>
	</div>
</main>
<?php include_once('end-part.php'); ?>


