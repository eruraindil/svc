<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "The Team";
	$description = "The Staff and Volunteers of SVC who keep the organisation running.";
	$curlink = "who";
	$sublink = "team";

   include('head.php');
?>
	<style type="text/css">
		table#team {
			width:100%;
			font-size:small;
		}
		table#team td {
			padding:0 2px;
			margin:2px;
		}
    </style>
</head>

<body>
<?php
	include('header.php');
	include('menu.php');
?>
<?php include('main_top.php'); ?>
<!-- CONTENT -->

<h2>meet the 2012-2013 team</h2>
<table id="team"><tr>
	<th colspan="4"><a id="staff"></a><h3>staff</h3></th>
</tr>
<tr class="shade">
	<td rowspan="4"><img src="imgs/team/director.jpg" style="width:150px;height:150px;" /></td>
	<td style="width:226px;"><h3>Shawna Smith<h3></td>
	<td rowspan="4"><img src="imgs/team/projects.jpg" style="width:150px;height:150px;" /></td>
	<td style="width:226px;"><h3>Ian Shaule</h3></td>
</tr>
<tr>
	<td style=""><h4><a href="docs/team/director.html" onclick="newWin('docs/team/director.html', 'dir', 900, 500); return false;">Director</a></h4></td>
	<td><h4><a href="docs/team/projects.html" onclick="newWin('docs/team/projects.html', 'dir', 900, 500); return false;">Projects Coordinator</a></h4></td>
</tr>
<tr>
	<td><h4>International Development &amp; Political Science</h4></td>
	<td><h4>International Development</h4></td>
</tr>
<tr>
	<td>director@dosomuch.ca</td>
	<td>projects@dosomuch.ca</td>
</tr>
<tr class="shade">
	<td rowspan="4"><img src="imgs/team/lolcat.jpg" style="width:150px;height:150px;" /></td>
	<td><h3>Kelsey Taylor</h3></td>
	<td rowspan="4"><img src="imgs/team/webmaster.jpg" style="width:150px;height:150px;" /></td>
	<td><h3>Matthew Roberts</h3></td>
</tr>
<tr>
	<td><h4><a href="docs/team/relations.html" onclick="newWin('docs/team/relations.html', 'dir', 900, 500); return false;">Community Relations Coordinator</a></h4></td>
	<td><h4><a href="docs/team/webmaster.html" onclick="newWin('docs/team/webmaster.html', 'dir', 900, 500); return false;">Webmaster</a></h4></td>
</tr>
<tr>
	<td><h4>Criminal Justice &amp; Public Policy</h4></td>
	<td><h4>Information Systems &amp; Human Behaviour</h4></td>
</tr>
<tr>
	<td>relations@dosomuch.ca</td>
	<td>webmaster@dosomuch.ca</td>
</tr>
<!--<tr>
	<th colspan="2" style="width:50%"><h4>position</h4></th>
	<th style="width:25%;"><h4>email</h4></th>
	<th><h4>program</h4></th>
</tr>
<tr>
	<td style="width:25%;"><h4><a href="docs/team/director.html" onclick="newWin('docs/team/director.html', 'dir', 900, 500); return false;">Director</a></h4></td>
	<td>Shawna Smith</td>
	<td>director@dosomuch.ca</td>
	<td>International Development &amp; Political Science</td>
</tr>
<tr class="shade">
	<td><h4><a href="docs/team/projects.html" onclick="newWin('docs/team/projects.html', 'pro', 900, 500); return false;">Projects Coordinator</a></h4></td>
	<td>Ian Shaule</td>
	<td>projects@dosomuch.ca</td>
	<td>International Development</td>
	
</tr>
<tr>
	<td><h4><a href="docs/team/relations.html" onclick="newWin('docs/team/relations.html', 'rel', 900, 500); return false;">Community Relations Coordinator</a></h4></td>
	<td>Kelsey Taylor</td>
	<td>relations@dosomuch.ca</td>
	<td>Criminal Justice &amp; Public Policy</td>
</tr>
<tr class="shade">
	<td><h4><a href="docs/team/webmaster.html" onclick="newWin('docs/team/webmaster.html', 'web', 900, 500); return false;">Webmaster</a></h4></td>
	<td>Matthew Roberts</td>
	<td>webmaster@dosomuch.ca</td>
	<td>Information Systems &amp; Human Behaviour</td>
</tr>--><tr>
	<th colspan="4"><a id="volunteers"></a><h3>volunteers</h3> [want to get involved? We're always <a href="jobs.php">looking</a> for motivated volunteers!]</th>
</tr>
<tr class="shade">
	<td rowspan="4"><img src="imgs/team/lolcat.jpg" style="width:150px;height:150px;" /></td>
	<td><h3>Lucas Burton</h3></td>
	<td rowspan="4"><img src="imgs/team/marketing.jpg" style="width:150px;height:150px;" /></td>
	<td><h3>David Blampied</h3></td>
</tr>
<tr>
	<td><h4>Graphics Designer</h4></td>
	<td><h4>Marketing Assistant</h4></td>
</tr>
<tr>
	<td><h4>International Development</h4></td>
	<td><h4>Marketing Management</h4></td>
</tr>
<tr>
	<td>graphics@dosomuch.ca</td>
	<td>marketing@dosomuch.ca</td>
</tr>
<!--<tr>
	<th colspan="2"><h4>position</h4></th>
	<th><h4>email</h4></th>
	<th><h4>program</h4></th>
</tr><tr>
	<td>Graphic Designer</td>
	<td>Lucas Burton</td>
	<td>graphics@dosomuch.ca</td>
	<td>International Development</td>
</tr><tr class="shade">
	<td>Marketing Assistant</td>
	<td>David Blampied</td>
	<td>marketing@dosomuch.ca</td>
	<td>Marketing Management</td>
</tr>-->
</table>

<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR -->
<h3>Quick Links!</h3>
<div class="container">
	<a href="#staff">staff</a>
	<a href="#volunteers">volunteers</a>
</div>
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>

</body>
</html>
