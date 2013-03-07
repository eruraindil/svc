<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "Organisation Membership";
	$description = "";
	$curlink = "what";
	$sublink = "membership";

    include('head.php');
?>
	<style type="text/css">
		
    </style>
</head>

<body>
<?php
	include('header.php');
	include('menu.php');
?>
<?php include('main_top.php'); ?>
<!-- CONTENT -->

<h2>organisation membership</h2>
<table style="float:right;width:300px;"><tr>
	<th><a id="facts"></a><h3>steps</h3></th>
</tr><tr>
	<td><a href="membership-register.php">register your organisation</a></td>
</tr><tr class="shade">
	<td><a href="membership-submit-opp.php">submit your volunteer opportunities</a></td>
</tr></table>
<p>Over the past 40 years we have developed relationships with over 300 community benefit organisations in the Guelph community.</p>
<p>If you would like your information shared with students who are looking for volunteer opportunities, please <a href="membership-register.php">register your organisation</a> with us.</p>
<p>Registration is free to all community benefit organisations, and includes optional free training on making your organisation student friendly.</p>
<p>Once registered, you may submit specific volunteer opportunities which we will pass along to students. However, if you would like specific opportunities included in our weekly newsletter, opportunities have to be submitted to the <a href="volunteerweekly.php">volunteer weekly</a>.</p>
<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR -->
<h3>Quick Links!</h3>
<div class="container">
	<a href="membership.php">about</a>
	<a href="membership-register.php">register your organisation</a>
	<a href="membership-submit-opp.php">submit a volunteer opportunity</a>
</div>
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
