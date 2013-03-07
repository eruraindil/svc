<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$eduLvl = $_POST['edu_lvl'];
$eduLvlEx = $_POST['edu_lvl_explained'];
$institution = $_POST['institution'];
$degree = $_POST['degree'];
$year = $_POST['year'];
$bday = $_POST['birthdate'];
$medConditions = $_POST['medical_conditions'];

$interestsSociety = "INTERESTS_SOCIETY:
";
if(isset($_POST['interests-society'])) {
	$aIS = $_POST['interests-society'];
	$n = count($aIS);
	for($i = 0; $i < $n; $i++) {
		$interestsSociety .= $aIS[$i] . "
";
	}
}
$interestsHealth = "INTERESTS_HEALTH:
";
if(isset($_POST['interests-health'])) {
	$aIH = $_POST['interests-health'];
	$n = count($aIH);
	for($i = 0; $i < $n; $i++) {
		$interestsHealth .= $aIH[$i] . "
";
	}
}
$interestsCultural = "INTERESTS_CULTURAL:
";
if(isset($_POST['interests-cultural'])) {
	$aIC = $_POST['interests-cultural'];
	$n = count($aIC);
	for($i = 0; $i < $n; $i++) {
		$interestsCultural .= $aIC[$i] . "
";
	}
}

$interestsOther = $_POST['interests-other'];

$volunteerism = $_POST['regular_volunteer'];
$volunteerism_ex = "VOLUNTEERISM_EXPERIENCE:
";
if(isset($_POST['regular_volunteer_type'])) {
	$aVE = $_POST['regular_volunteer_type'];
	$n = count($aVE);
	for($i = 0; $i < $n; $i++) {
		$volunteerism_ex .= $aVE[$i] . "
";
	}
}
$volunteerism_ex_other = $_POST['regular_volunteer_type-other'];

$workshop1_pref = $_POST['personal_barriers_workshop1_pref'];

$workshop2_pref = $_POST['personal_barriers_workshop2_pref'];

$date = getdate();

$referral = $_POST['referral'];



$message = "NAME: " . $name . "
EMAIL: " . $email . "
PHONE: " . $phone . "
EDU_LVL: " . $eduLvl . "
EDU_LVL_EXPLAINED: " . $eduLvlEx . "
INSTITUTION: " . $institution . "
DEGREE: " . $degree . "
YEAR: " . $year . "
BIRTHDAY: " . $bday . "
MED_CONDITIONS: " . $medConditions . "
" . $interestsSociety . $interestsHealth . $interestsCultural . "INTERESTS_OTHER: " . $interestsOther . "
CURRENT_VOLUNTEERISM: " . $volunteerism . "
" . $volunteerism_ex . "VOLUNTEERISM_OTHER: " . $volunteerism_ex_other . "
PERSONAL_BARRIERS_WORKSHOP_1_PREF: " . $workshop1_pref . "
PERSONAL_BARRIERS_WORKSHOP_2_PREF: " . $workshop2_pref . "
RECIEVED: " . $date['year'] . "-" . $date['mon'] . "-" . $date['mday'] . " " . $date['hours'] . ":" . str_pad($date['minutes'], 2, "0", STR_PAD_LEFT);

$to = "svc@uoguelph.ca";
$subject = "DoSoMuch Weekend Online Registration";
$from = $email;
$headers = "From:" . $from;

//echo $message;
//echo("\n");

mail($to,$subject,$message,$headers);

header("Location: dsm-weekend-done.php"); // . $referral . "?registered=true");
?>
