<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "Submit Opportunities";
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

<h2>submit your volunteer opportunities</h2>
<p>Please <a href="membership-register.php">register your organisation</a> before submitting any opportunities! Thanks!</p>
<iframe src="https://docs.google.com/spreadsheet/viewform?formkey=dG9jeV8yMDdwcGRud2Q0SVM1TVNna0E6MQ" style="width:100%;height:1300px;"></iframe>

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
