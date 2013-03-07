<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "Do So Much Weekend";
	$description = "Do So Much Weekend is a free conference sparking and fostering positive social action through means of social innovation, participation, and collaboration to better build community both near and far.";
	$curlink = "involved";
	$sublink = "weekend";

    include('head.php');
?>
	<style type="text/css">
		#reg-done {
			text-align:center;
			font-size: x-large;
			margin-top:50px;
		}
    </style>
    <script type="text/javascript">
		$(function(){ //http://stackoverflow.com/questions/2064186/how-can-i-make-a-jquery-countdown
			var count = 5;
			countdown = setInterval(function(){
				$("div#countdown").html(count);
				if (count == 0) {
		  		window.open("dsm-weekend.php","_self")
				}
				count--;
			}, 1000);
		});
    </script>
</head>

<body onload="timeOut();">
<?php
	include('header.php');
	include('menu.php');
?>
<?php include('main_top.php'); ?>
<!-- CONTENT -->

<!--<h2>do so much weekend</h2>-->
<img src="graphics/dosomuch-weekend.png" alt="do so much weekend" style="width:400px;height:89px;" />
<div id="reg-done">
	Thanks for registering! You will be contacted shortly by our staff! <br />
	<div id="countdown"></div>
</div>
<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR -->
<h3>Quick Links!</h3>
<div class="container">
	<a href="dsm-weekend-about.php">about</a>
	<a href="dsm-weekend-schedule.php">schedule</a>
	<a href="dsm-weekend-speakers.php">speakers</a>
	<a href="dsm-weekend-register.php">register</a>
</div>
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
