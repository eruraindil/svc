<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "The HELP";
	$description = "Social action initiatives that provide community exploration through volunteerism.";
	$curlink = "involved";
	$sublink = "HELP";

    include('head.php');
    
    require_once("magpierss/rss_fetch.inc");
    require_once("rss.php");
    $events = new rss("http://www.uoguelph.ca/studentaffairs/reg/rssfeed.cfm?unit_id=14");
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

<!--<div class="clear"></div>
<div id="left-column" class="columns">
<pre><?php print_r($events); ?></pre>-->
<h2>the HELP</h2>
<a id="current"></a>
<table style="width:300px;float:right;"><tr>
	<td><div style="text-align:center"><img src="graphics/HELPlogo.png" alt="theHELP" style="width:250px;height:114px;" /></div></td>
</tr><tr>
	<th><h3>upcoming events</h3></th>
</tr><tr class="shade">
	<td><?php
		$pattern = '/(.)* - /';
		$replacement = '';
		
		$pattern2 = '/ - (.)*/';
	
//$string = 'April 15, 2003';
//$pattern = '/(\w+) (\d+), (\d+)/';
//$replacement = '${1}1,$3';
//echo preg_replace($pattern, $replacement, $string);
		
		foreach($events->items as $event) {
			
			$thedate = preg_replace($pattern, $replacement, $event['title']);
			$thetitle = preg_replace($pattern2, $replacement, $event['title']);
			
			//echo $event['title'];
			//echo "<br/>The date is: $title";
			if(date("Ymd", strtotime($thedate)) > date("Ymd")) {
				echo "<h4>" . date("M j:", strtotime($thedate)) . "</h4>";
				echo "<a href='" . $event['link'] . "' onclick='window.open(this.href,\"_blank\");return false;'>$thetitle</a>";
			//} else {
			//	echo "None currently";
			}
		}
	?></td>
</tr></table>
<p><h4>Social action initiatives that provide community exploration through volunteerism.</h4>
<a id="mission"></a>
<h3>mission</h3>
<ol>
	<li>Recruit volunteers to one-timer opportunities</li>
	<li>Showcase new sides of the community</li>
	<li>Expose how volunteers help build community</li>
	<li>Promote on-going community participation</li>
</ol>
<a id="program"></a>
<h3>program</h3>
<ul>
	<li>2-4 one-timer group volunteer placements on a monthly basis (September - November, January - March)</li>
	<li>Provide Volunteer Opportunity lists during exam periods</li>
	<li>1-2 programming events on a semesterly basis. The event can be anything that spurs passion and community building including, but not limited to: guest speakers, documentary showings, concerts, field trips to off campus organisations (snacks included), and socials.</li>
</ul>
<a id="membership"></a>
<h3>membership</h3>
<p>the HELP membership is free for University of Guelph students. Membership includes:</p>
<ul>
	<li>the Volunteer Weekly emails</li>
	<li>member directory folder that tracks participation in our one-timer volunteer placements, holds their reference letters gained through volunteerism, and volunteer placement and hour tracking form.</li>
	<li>access to all HELP programming events and one-timer volunteer placements. HELP members can participate with HELP one time, two times, or every time - no strings attached.</li>
	<li>Priority status for SVC&apos;s one2one volunteer referrals</li>
	<li>first round access to SVC&apos;s Do So Much Weekend</li>
</ul>
<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR -->
<h3>Quick Links!</h3>
<div class="container">
	<a href="#current">current opportunities</a>
	<a href="#mission">mission</a>
	<a href="#program">program</a>
	<a href="#membership">membership</a>
</div>
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
