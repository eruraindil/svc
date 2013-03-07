<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "You Can Do So Much";
	$description = "As Canada's first &amp; only incorporated student volunteer centre, Student Volunteer Connections works to ignite, educate, &amp; foster University of Guelph students through the world of volunteerism. Student Volunteer Connections strives to promote positive social action for the purpose of building skills, passions, and most of all, community. Student Volunteer Connections is proud to introduce SVC 3.0, the University of Guelph portal to accessing involvement opportunities, resources, and a network of 300 volunteer-based organizations.";
	$curlink = "home";
	$sublink = "";

    include('head.php');
?>
	<style type="text/css">
.columns {
	float:left;
}
#left-column {
	width:250px;
	padding-right:3px;
}
#right-column {
	width:500px;
	padding-left:7px;
	text-align:right;
	/*border:1px solid #2A7DA1;*/
}
#rotating-item-wrapper {
    position: relative;
    width:100%;
    height:300px;
}
.rotating-item {
    display: none;
    position:absolute;
    left:0;
    top:0;
    width:100%;
}
    </style>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=213237372054871";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	include('header.php');
	include('menu.php');
?>
<?php include('main_top.php'); ?>
<!-- CONTENT -->

<!--<div class="clear"></div>
<div id="left-column" class="columns">-->
<div class="clear"></div>
<div id="rotating-item-wrapper">
	<!--<a href="weekend/"><img src="imgs/slide/slide1.jpg" alt="check out the Do So Much conference, January 26th, 2013" class="rotating-item" /></a>-->
	<img src="imgs/slide/slide2.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide3.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide4.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide5.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide6.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide7.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide8.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide9.jpg" alt="do so much with SCV" class="rotating-item" />
	<img src="imgs/slide/slide10.jpg" alt="do so much with SCV" class="rotating-item" />
</div>
<div class="clear"></div><!--

<div style="font-size:large; padding:5px;margin:10px 0; border:1px solid #518014; background:#85c032;text-align:center;">
	<h2 style="background:none;padding-left:0;font-family:Arial,sans-serif;color:#FFF;text-align:center;margin:0 auto;">COMPASS Event: January 31st</h2>
    <p>Sign up <a href="compass" style="color:#FFF;">HERE</a></p>
</div>
--><!--<div style="font-size: large; padding-top:10px;">
	<h2>board of directors positions available!</h2>
	<p>We're looking for motivated board members to help with SVC programming and events for the upcoming 2012-2013 school year, check out our <a href="board.php">board</a> and <a href="jobs.php">jobs</a> pages to see what's available!</p>
</div>
-->

<div id="left-column" class="columns">
	<h2>welcome</h2>
	<div class="clear"></div>
	<p>As Canada's first &amp; only incorporated student volunteer centre, <em>Student Volunteer Connections</em> works to ignite, educate, &amp; foster University of Guelph students through the world of volunteerism. <em>Student Volunteer Connections</em> strives to promote positive social action for the purpose of building skills, passions, and most of all, community.</p>
	<p><em>Student Volunteer Connections</em> is proud to introduce SVC 3.0, the University of Guelph portal to accessing involvement opportunities, resources, and a network of 300 volunteer-based organizations.</p>
</div>
<div id="right-column" class="columns">
	<h2>what&apos;s the buzz?</h2>
	<div class="fb-like-box" data-href="http://www.facebook.com/studentvolunteerconnections" data-width="500" data-show-faces="true" data-stream="true" data-header="false"></div>
</div>

<div class="clear"></div>

<!-- END OF CONTENT -->
<?php include('main_bottom.php'); ?>
<!-- SIDEBAR -->

<h3>Quick Links!</h3>
<div class="container">
	<a href="weekend/">DoSoMuch weekend</a>
	<a href="stories.php">volunteer stories</a>
	<a href="one2one.php">one2one referrals</a>
	<a href="onetime.php">one-time placements</a>
	<a href="funding.php">financial grants</a>
	<a href="resources.php">volunteer resources</a>
	<a href="activism.php">social activism</a>
</div>
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
