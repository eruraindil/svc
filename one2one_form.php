<?php
/*
if (${'_'.$_SERVER['REQUEST_METHOD']}) {
    $kv = array();
    foreach (${'_'.$_SERVER['REQUEST_METHOD']} as $key => $value) {
        $kv[] = "$key = $value";
    }
}*/

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$degree = $_POST['degree'];
$year = $_POST['year'];

$days = "DAYS:
";
if(isset($_POST['days'])) {
	$aDays = $_POST['days'];
	$n = count($aDays);
	for($i = 0; $i < $n; $i++) {
		$days .= $aDays[$i] . "
";
	}
}

$committment = $_POST['committment'];
$bus = $_POST['bus'];
$wheelchair = $_POST['wheelchair'];

$group = "GROUP:
";
if(isset($_POST['group'])) {
	$aGroup = $_POST['group'];
	$n = count($aGroup);
	for($i = 0; $i < $n; $i++) {
		$group .= $aGroup[$i] . "
";
	}
}

$where = "WHERE:
";
if(isset($_POST['where'])) {
	$aWhere = $_POST['where'];
	$n = count($aWhere);
	for($i = 0; $i < $n; $i++) {
		$where .= $aWhere[$i] . "
";
	}
}

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

$skillsHave = "SKILLS_HAVE:
";
if(isset($_POST['skills-have'])) {
	$aSH = $_POST['skills-have'];
	$n = count($aSH);
	for($i = 0; $i < $n; $i++) {
		$skillsHave .= $aSH[$i] . "
";
	}
}

$skillsHaveOther = $_POST['skills-have-other'];

$skillsWant = "SKILLS_WANT:
";
if(isset($_POST['skills-want'])) {
	$aSW = $_POST['skills-want'];
	$n = count($aSW);
	for($i = 0; $i < $n; $i++) {
		$skillsWant .= $aSW[$i] . "
";
	}
}
$skillsWantOther = $_POST['skills-want-other'];

$experience = $_POST['experience'];

$other = $_POST['other-info'];

$date = getdate();

$referral = $_POST['referral'];

$message = "NAME: " . $name . "
EMAIL: " . $email . "
PHONE: " . $phone . "
DEGREE: " . $degree . "
YEAR: " . $year . "
" . $days . "
COMMITTMENT: " . $committment . "
BUS: " . $bus . "
WHEELCHAIR: " . $wheelchair . "
" . $group . "
" . $where . "
" . $interestsSociety . "
" . $interestsHealth . "
" . $interestsCultural . "
INTERESTS_OTHER: " . $interestsOther . "
" . $skillsHave . "
SKILLS_HAVE_OTHER: " . $skillsHaveOther . "
" . $skillsWant . "
SKILLS_WANT_OTHER: " . $skillsWantOther . "
EXP: " . $experience . "
OTHER: " . $other . "
RECIEVED: " . $date['year'] . "-" . $date['mon'] . "-" . $date['mday'] . " " . $date['hours'] . ":" . $date['minutes'];
/*foreach($kv as $temp) {
	$message .= $temp . "
";
}*/

$to = "webmaster@dosomuch.ca";
$subject = "one2one Online Submission";
$from = $email;
$headers = "From:" . $from;

//echo $message;
//echo("\n");

mail($to,$subject,$message,$headers);
echo phpinfo();
//header("Location: http://" . $referral . "?submitted=true");
?>
