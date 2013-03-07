<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "Register - Do So Much Weekend";
	$description = "Do So Much Weekend is a free conference sparking and fostering positive social action through means of social innovation, participation, and collaboration to better build community both near and far.";
	$curlink = "involved";
	$sublink = "weekend";

    include('head.php');
?>
	<style type="text/css">
		textarea {height:60px;}
    </style>
    
    <script type="text/javascript">
    	function validateDSMForm() {
			var x=document.forms["dsm-form"]["name"].value;
			var y=document.forms["dsm-form"]["email"].value;
			var z=document.forms["dsm-form"]["birthdate"].value;
			if((x==null || x=="") || (y==null || y=="") || (z==null || z=="")) {
				alert("Please enter at least your name, email and birthdate. If you are having diffculty please contact us and we will assist you.");
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

<h2>do so much weekend registration</h2>
<p>To register for the Do So Much conference, please fill out the information requested below, a representative from SVC will get back to you promptly.</p>
<form method="POST" name="dsm-form" id="dsm-form" action="dsm-weekend_form.php" onsubmit="return validateDSMForm();">
<table style="width:100%;"><tr>
	<th style="width:50%;"><h3>basics</h3></th>
	<th><h3>interests</h3></th>
</tr><tr>
	<td>
		<fieldset>
			<legend>Full Name*</legend>
			<input type="text" name="name" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Email*</legend>
			<input type="text" name="email" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Phone</legend>
			<input type="text" name="phone" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Level of Education</legend>
			<select name="edu_lvl">
				<option value="notset"></option>
				<option value="university">University</option>
				<option value="college">College</option>
				<option value="trade">Trade School</option>
				<option value="highschool">High School</option>
				<option value="gap">GAP Year</option>
				<option value="none">None</option>
				<option value="other">Other</option>
			</select> <br />
			If you chose other, please explain:
			<textarea name="edu_lvl_explained"></textarea>
		</fieldset>
		<fieldset>
			<legend>Educational Institution Name</legend>
			<input type="text" name="institution" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Degree Program / Area of Focus</legend>
			<input type="text" name="degree" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Year</legend>
			<select name="year">
				<option value="notset"></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5+">5+</option>
				<option value="M">Masters</option>
				<option value="PhD">PhD</option>
				<option value="noa">NoA</option>
			</select>
		</fieldset>
		<fieldset>
			<legend>Birthdate* (YYYY/MM/DD)</legend>
			<input type="text" name="birthdate" size="20" maxlength="50" />
		</fieldset>
		<fieldset>
			<legend>Any medical conditions we should be aware of?</legend>
			<textarea name="medical_conditions"></textarea>
		</fieldset>
	</td>
	<td>
		<fieldset>
			<legend>Society</legend>
			<input type="checkbox" name="interests-society[]" value="politics" /> Politics / Government <br />
			<input type="checkbox" name="interests-society[]" value="business" /> Business / Finance <br />
			<input type="checkbox" name="interests-society[]" value="environment" /> Environment <br />
			<input type="checkbox" name="interests-society[]" value="justice" /> Justice / Legal <br />
			<input type="checkbox" name="interests-society[]" value="prim-edu" /> Primary Education <br />
			<input type="checkbox" name="interests-society[]" value="secd-edu" /> Secondary Education
		</fieldset>
		<fieldset>
			<legend>Health</legend>
			<input type="checkbox" name="interests-health[]" value="nutrition" /> Nutrition <br />
			<input type="checkbox" name="interests-health[]" value="physical" /> Physical Health <br />
			<input type="checkbox" name="interests-health[]" value="veterinary" /> Veterinary <br />
			<input type="checkbox" name="interests-health[]" value="mental" /> Mental Health <br />
			<input type="checkbox" name="interests-health[]" value="housing" /> Homelessness / Housing <br />
			<input type="checkbox" name="interests-health[]" value="foodinsecurity" /> Food Insecurity <br />
			<input type="checkbox" name="interests-health[]" value="medicine" /> Health Science / Medicine
		</fieldset>
		<fieldset>
			<legend>Cultural</legend>
			<input type="checkbox" name="interests-cultural[]" value="sports-leisure" /> Sports / Leisure <br />
			<input type="checkbox" name="interests-cultural[]" value="visual-arts" /> Visual Arts <br />
			<input type="checkbox" name="interests-cultural[]" value="theatrical-arts" /> Theatrical Arts <br />
			<input type="checkbox" name="interests-cultural[]" value="music" /> Music <br />
			<input type="checkbox" name="interests-cultural[]" value="multiculturalism" /> Multiculturalism <br />
			<input type="checkbox" name="interests-cultural[]" value="queer" /> Queer (LGBTTI2QQ) <br />
			<input type="checkbox" name="interests-cultural[]" value="media-broadcasting" /> Media / Broadcasting <br />
			<input type="checkbox" name="interests-cultural[]" value="technology" /> Computers / Technology <br />
		</fieldset>
		<fieldset>
			<legend>Other</legend>
			<textarea name="interests-other"></textarea>
		</fieldset>
	</td>
</tr><tr>
	<th colspan="2"><h3>current volunteerism</h3></th>
</tr><tr>
	<td>
		<fieldset>
			<legend>Do you volunteer regularly?</legend>
			<select name="regular_volunteer">
				<option value="notset"></option>
				<option value="yes">Yes</option>
				<option value="sometimes">Sometimes</option>
				<option value="no">No</option>
				<option value="notyet">Not Yet</option>
			</select>
		</fieldset>
	</td><td>
		<fieldset>
			<legend>If you volunteer, what type</legend>
			<input type="checkbox" name="regular_volunteer_type[]" value="counselling" /> Counselling <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="teaching" /> Teaching / Mentoring <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="fundrainsing" /> Fundraising <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="publicrelations" /> Public Relations <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="advocacy" /> Advocacy <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="boardmember" /> Board Member  <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="committeemember" /> Committee Member <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="eventcoordination" /> Event Coordinaton <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="technology" /> Technology <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="academicresearch" /> Academic Research <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="artist" /> Artist <br />
			<input type="checkbox" name="regular_volunteer_type[]" value="coaching" /> Coaching / Team Leading
			<textarea name="regular_volunteer_type-other"></textarea>
		</fieldset>
	</td>
</tr><tr>
	<th colspan="2"><h3>personal barriers workshop #1 preference</h3></th>
</tr><tr>
	<td colspan="2" style="text-align:left;">
		<table><tr>
			<th style="width:50%;"><h4>Session A: Reaching Out to Uninvolved Youth by Pete Meadows</h4></th>
			<th><h4>Session B: So everybody tells me I should volunteer... by Paddy Bowen</h4></th>
		</tr><tr>
			<td>
				<p>Q: How can I stop &lsquo;preaching to the converted&rsquo; and start getting my message out?</p>
				<p>Tired of always having the same few people do all the work for your cause? Wish you could find a way of getting your message out to people who don’t already know about your work?</p>
				<p>This interactive workshop will give you the tools you need to effectively engage your apathetic peers in your work.</p>
				<p>Pete Meadows will cover topics including:</p>
				<ul>
					<li>Using technology and branding effectively</li>
					<li>Marketing with no money</li>
					<li>Tips on thinking outside the box</li>
					<li>How to reach out to your peers who seem like they don’t care.</li>
				</ul>
			</td>
			<td>
				<p>Q: How can I make my volunteer placement more meaningful?</p>
				<p>Paddy Bowen, former head of Volunteer Canada and currently Director of an inner city charity in Toronto that serves the homeless, will explore the questions around volunteering for students and new grads; why it's a good idea, why it's sometimes a total bore, what we need to do to make it a worthwhile effort, how volunteering can be more than something to put on your resume.</p>
			</td>
		</tr></table>
		
		<fieldset>
			<legend>Your preference is</legend>
			<select name="personal_barriers_workshop1_pref">
				<option value="notset"></option>
				<option value="A">Session A: Reaching out to Uninvolved Youth</option>
				<option value="B">Session B: So everybody tells me I should volunteer...</option>
			</select>
		</fieldset>
	</td>
</tr><tr>
	<th colspan="2"><h3>personal barriers workshop #2 preference</h3></th>
</tr><tr>
	<td colspan="2" style="text-align:left;">
		<table><tr>
			<th style="width:50%;"><h4>Session C: Practical Ways to Implement Positive Social Change: Making A Difference Wherever You Are by Gordon Floyd</h4></th>
			<th><h4>Session D: Collaboration in a Competitive World by Marva Wisdom</h4></th>
		</tr><tr>
			<td>
				<p>Q: How can I make positive change happen from within business, or government, or the not-for-profit sector?</p>
				<p>Gordon Floyd will provide concrete examples of how positive social change has been driven from within Canada's public, private and not-for-profit sectors. This workshop will help you identify the type of organization you want to work with, and the variety of roles you could play to help make change happen.  Through interactive discussion, we'll also explore options for getting started in a role and organization that works for you.</p>
			</td>
			<td>
				<p>Q: How can I effectively collaborate in such a competitive world?</p>
				<p>Explore collaboration and the tensions associated with aligning our personal vision and values with what we do:</p>
				<ul>
					<li>What are some of the more obvious barriers?</li>
					<li>Could there be some hidden barriers?</li>
					<li>What is the role of communication and a clearly articulated purpose?</li>
				</ul>
				<p>How do we leverage what we know and L.E.a.D'ing the way...</p>
				<ul>
					<li>Leadership</li>
					<li>Engagement</li>
					<li>Diversity and Inclusivity</li>
				</ul>
			</td>
		</tr></table>
		
		<fieldset>
			<legend>Your preference is</legend>
			<select name="personal_barriers_workshop2_pref">
				<option value="notset"></option>
				<option value="C">Session C: Practical Ways to Implement Positive Social Change: Making A Difference Wherever You Are</option>
				<option value="D">Session D: Collaboration in a Competitive World</option>
			</select>
		</fieldset>
	</td>
</tr><tr>
	<th colspan="2"><h3>agreement and signature</h3></th>
</tr><tr>
	<td colspan="2" style="text-align:left;">
		<p>By registering as a delegate for the Do So Much Weekend, it is your responsibility to push yourself to learn; find and foster your passion; and take action.</p>
		<p>By submitting the registration form to participate in Do So Much Weekend, you agree to:</p>
		<ul>
			<li>Attend all chosen/assigned teachings, speakers, and events (exceptions are offered for unforeseen obligations)</li>
			<li>Respect all delegates, coordinators, volunteers, and speakers</li>
			<li>Challenge yourself to take positive social action in your world, whether it be local or abroad, large leaps or small steps, with those you know or those you don&apos;t.</li>
		</ul>
	</td>
</tr><tr>
	<td colspan="2">
		<input type="submit" value="I agree, Sign me up!" class="button" /> <br />
		<small>note: please ensure that the email you entered was correct so we can respond to you as quickly as possible.<br />we will protect your personal information privacy.</small>
		<input type="hidden" name="referral" value="<?php echo($_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"]); ?>" />
	</td>
</tr></table>
</form>
<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR -->
<h3>Quick Links!</h3>
<div class="container">
	<a href="dsm-weekend-about.php">about</a>
	<a href="dsm-weekend-schedule.php">schedule</a>
	<a href="dsm-weekend-speakers.php">speakers</a>
	<strong><a href="dsm-weekend-register.php">register</a></strong>
</div>
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
