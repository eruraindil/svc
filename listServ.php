<?php
$name = $_POST['listserv_name'];
$email = $_POST['listserv_email'];
$referral_page = $_POST['referral'];

$to = "listserv@listserv.uoguelph.ca";
//$to = "matt@stikmen.ca";
$subject = "";
$message = "ADD svcvolunteer " . $email . " " . $name;
$from = "svc@uoguelph.ca";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

//mail("svc@uoguelph.ca","New ListServ Subscriber",$name . " - " . $email . " has been added to svcvolunteer listserv. You may reply to this message to send them an email! - Matthew","From: " . $from);

//echo($to . $subject . $message . $headers);
//echo("Location: http://localhost" . $referral_page);

header("Location: http://" . $referral_page . "?subscribed=true");

?>
