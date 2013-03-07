<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "one2one Referrals";
	$description = "Fill out an online one2one referral. Referrals are fully loaded with concrete and easy ways to immediately start volunteering. We included organization bios, volunteer positions, time commitments, locations, contact info, and direct links to volunteer application forms.";
	$curlink = "what";
	$sublink = "one2one";

    include('head.php');
?>
	<style type="text/css">
		textarea {height:60px;}
    </style>
    
    <script type="text/javascript">
    	function validateO2OForm() {
			var x=document.forms["one2one"]["name"].value;
			var y=document.forms["one2one"]["email"].value;
			if((x==null || x=="") || (y==null || y=="")) {
				alert("Please enter at least your name and email. If you are having diffculty please contact us and we will assist you.");
				return false;
			}
		}
    </script>
</head>

<body>
<?php
	include('header.php');
	include('menu.php');
?>
<?php include('main_top.php'); ?>
<!-- CONTENT -->

<!--<div class="clear"></div>
<div id="left-column" class="columns">-->
<h2>online application</h2>
<div class="image-right">
	<img src="graphics/one2one.png" alt="one2one" style="width:200px;height:102px;" />
</div>
<p>Fill out all that you can below and within two weeks you will get your very own customized one2one referral. Referrals are fully loaded with concrete and easy ways to immediately start volunteering. We included organization bios, volunteer positions, time commitments, locations, contact info, and direct links to volunteer application forms. Over the last 40 years, we've developed a solid network of nearly 300 community benefit organizations located on-campus, in Guelph/Wellington, and beyond that really want to see you volunteering!</p>
<iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dHRYWTNaeUtUTHJxd3hvUEJ0UzJlUnc6MQ" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
<!--<p>Fill out all that you can below and within two weeks you will get your very own customized one2one referral. Referrals are fully loaded with concrete and easy ways to immediately start volunteering. We included organization bios, volunteer positions, time commitments, locations, contact info, and direct links to volunteer application forms. Over the last 40 years, we&apos;ve developed a solid network of nearly 300 community benefit organizations located on-campus, in Guelph/Wellington, and beyond that really want to see you volunteering!</p>
-->
<!--<h3>Our online referral system is currently down. Please <a href="contact.php">contact us</a>.</h3>
<form method="POST" name="one2one" id="one2one" action="one2one_form.php" onsubmit="return validateO2OForm();">
<table style="width:100%;"><tr>
	<th style="width:50%;"><h3>basics</h3></th>
	<th colspan="2"><h3>preferences</h3></th>
</tr><tr>
	<td rowspan="3">
		<fieldset>
			<legend>Full Name*</legend>
			<input disabled="disabled" type="text" name="name" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Email*</legend>
			<input disabled="disabled" type="text" name="email" size="20" maxlength="50" /><br />
			(Official @uoguelph.ca emails please!)
		</fieldset>
		<fieldset>
			<legend>Phone</legend>
			<input disabled="disabled" type="text" name="phone" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Degree Program</legend>
			<input disabled="disabled" type="text" name="degree" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Year</legend>
			<select disabled="disabled" name="year">
				<option value="notset"></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5+">5+</option>
				<option value="M">Masters</option>
				<option value="PhD">PhD</option>
			</select>
		</fieldset>
		<fieldset>
			<legend>Days Available</legend>
			<input disabled="disabled" type="checkbox" name="days[]" value="sunday" /> Sunday <br />
			<input disabled="disabled" type="checkbox" name="days[]" value="monday" /> Monday <br />
			<input disabled="disabled" type="checkbox" name="days[]" value="tuesday" /> Tuesday <br />
			<input disabled="disabled" type="checkbox" name="days[]" value="wednesday" /> Wednesday <br />
			<input disabled="disabled" type="checkbox" name="days[]" value="thursday" /> Thursday <br />
			<input disabled="disabled" type="checkbox" name="days[]" value="friday" /> Friday <br />
			<input disabled="disabled" type="checkbox" name="days[]" value="saturday" /> Saturday
		</fieldset>
	</td>
	<td colspan="2">
		<fieldset>
			<legend>Length of Committment</legend>
			<select disabled="disabled" name="committment">
				<option value="notset"></option>
				<option value="1time">One-timer (1-5 hours)</option>
				<option value="semesterly">Semesterly (4 months)</option>
				<option value="school_year">School Year (8 months)</option>
				<option value="full_year">Annual (12 months)</option>
			</select>
		</fieldset>
	</td>
</tr><tr>
	<td>
		<fieldset>
			<legend>Bus Route<br />Accessible?</legend>
			<input disabled="disabled" type="radio" name="bus" value="yes" /> Yes<br />
			<input disabled="disabled" type="radio" name="bus" value="no" /> No
		</fieldset>
	</td>
	<td>
		<fieldset>
			<legend>Wheelchair<br />Accessible?</legend>
			<input disabled="disabled" type="radio" name="wheelchair" value="yes" /> Yes<br />
			<input disabled="disabled" type="radio" name="wheelchair" value="no" /> No
		</fieldset>
	</td>
</tr><tr>
	<td colspan="2">
		<fieldset>
			<legend>Volunteer with?</legend>
			<input disabled="disabled" type="checkbox" name="group[]" value="children" /> Children (&lt;12) <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="youth" /> Youth (13-17)<br />
			<input disabled="disabled" type="checkbox" name="group[]" value="students" /> Students (University) <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="adults" /> Adults <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="seniors" /> Seniors <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="disabilities" /> Disabilities <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="lgbtti2qq" /> LGBTTI2QQ <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="patients" /> Patients <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="animals" /> Animals <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="nature" /> Nature / Environment <br />
			<input disabled="disabled" type="checkbox" name="group[]" value="alone" /> Alone
		</fieldset>
		<fieldset>
			<legend>Location?</legend>
			<input disabled="disabled" type="checkbox" name="where[]" value="campus" /> On Campus <br />
			<input disabled="disabled" type="checkbox" name="where[]" value="guelph" /> City of Guelph <br />
			<input disabled="disabled" type="checkbox" name="where[]" value="wellington" /> Wellington County <br />
			<input disabled="disabled" type="checkbox" name="where[]" value="virtual" /> Virtual (Online) <br />
			<input disabled="disabled" type="checkbox" name="where[]" value="internation" /> International
		</fieldset>
	</td>
</tr><tr>
	<th><h3>interests</h3></th>
	<th colspan="2"><h3>skills &amp; experience</h3></th>
</tr><tr>
	<td>
		<fieldset>
			<legend>Society</legend>
			<input disabled="disabled" type="checkbox" name="interests-society[]" value="politics" /> Politics / Government <br />
			<input disabled="disabled" type="checkbox" name="interests-society[]" value="business" /> Business / Finance <br />
			<input disabled="disabled" type="checkbox" name="interests-society[]" value="environment" /> Environment <br />
			<input disabled="disabled" type="checkbox" name="interests-society[]" value="justice" /> Justice / Legal <br />
			<input disabled="disabled" type="checkbox" name="interests-society[]" value="prim-edu" /> Primary Education <br />
			<input disabled="disabled" type="checkbox" name="interests-society[]" value="secd-edu" /> Secondary Education
		</fieldset>
		<fieldset>
			<legend>Health</legend>
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="nutrition" /> Nutrition <br />
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="physical" /> Physical Health <br />
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="veterinary" /> Veterinary <br />
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="mental" /> Mental Health <br />
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="housing" /> Homelessness / Housing <br />
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="foodinsecurity" /> Food Insecurity <br />
			<input disabled="disabled" type="checkbox" name="interests-health[]" value="medicine" /> Health Science / Medicine
		</fieldset>
		<fieldset>
			<legend>Cultural</legend>
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="sports-leisure" /> Sports / Leisure <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="visual-arts" /> Visual Arts <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="theatrical-arts" /> Theatrical Arts <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="music" /> Music <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="multiculturalism" /> Multiculturalism <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="queer" /> Queer (LGBTTI2QQ) <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="media-broadcasting" /> Media / Broadcasting <br />
			<input disabled="disabled" type="checkbox" name="interests-cultural[]" value="technology" /> Computers / Technology <br />
		</fieldset>
		<fieldset>
			<legend>Other</legend>
			<textarea disabled="disabled" name="interests-other"></textarea>
		</fieldset>
	</td>
	<td colspan="2">
		<fieldset>
			<legend>What skills can you bring?</legend>
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="counselling" /> Counselling <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="teaching" /> Teaching / Mentoring <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="fundrainsing" /> Fundraising <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="publicrelations" /> Public Relations <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="advocacy" /> Advocacy <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="boardmember" /> Board Member  <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="committeemember" /> Committee Member <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="eventcoordination" /> Event Coordinaton <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="technology" /> Technology <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="academicresearch" /> Academic Research <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="artist" /> Artist <br />
			<input disabled="disabled" type="checkbox" name="skills-have[]" value="coaching" /> Coaching / Team Leading
			<textarea disabled="disabled" name="skills-have-other"></textarea>
		</fieldset>
		<fieldset>
			<legend>What skills do you hope to learn?</legend>
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="counselling" /> Counselling <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="teaching" /> Teaching / Mentoring <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="fundrainsing" /> Fundraising <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="publicrelations" /> Public Relations <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="advocacy" /> Advocacy <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="boardmember" /> Board Member  <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="committeemember" /> Committee Member <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="eventcoordination" /> Event Coordinaton <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="technology" /> Technology <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="academicresearch" /> Academic Research <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="artist" /> Artist <br />
			<input disabled="disabled" type="checkbox" name="skills-want[]" value="coaching" /> Coaching / Team Leading
			<textarea disabled="disabled" name="skills-want-other"></textarea>
		</fieldset>
	</td>
</tr><tr>
	<td colspan="3">
		<fieldset>
			<legend>Relavent Work / Volunteer Experience?</legend>
			<textarea disabled="disabled" name="experience"></textarea>
		</fieldset>
		<fieldset>
			<legend>Other info to help us place you better?</legend>
			<textarea disabled="disabled" name="other-info"></textarea>
		</fieldset>
		<small>note: please ensure that the email you entered was correct so we can respond to you as quickly as possible.<br />we will protect your personal information privacy.</small>
	</td>
</tr><tr>
	<td colspan="3">
		<input disabled="disabled" type="submit" value="Submit" class="button" />
		<input disabled="disabled" type="hidden" name="referral" value="<?php echo($_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"]); ?>" />
	</td>
</tr></table>
</form>
-->
<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR 
<h3>Quick Links!</h3>
<div class="container">
	<a href="docs/ontarion1967.gif">1967 Ontarion Article</a>
	<a href="docs/UoGbulletin1968.pdf">1968 UoG News Bulletin</a>
	<a href="docs/HELPposter1970s.jpg">1970s Recruitment Poster</a>
</div>-->
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
