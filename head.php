<?php
$subscribed = false;
if(isset($_GET['subscribed'])) {
	if($_GET['subscribed'] == "true") {
		$subscribed = true;
	}
}
$submitted = false;
if(isset($_GET['submitted'])) {
	if($_GET['submitted'] == "true") {
		$submitted = true;
	}
}?>

<title><?php echo $pageTitle ?> | Student Volunteer Connections</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="<?php echo $description ?>" />
<meta name="generator" content="Geany 0.20" />
<meta name="author" content="Matthew Roberts (mroberts.me)" />
<link type="image/png" rel="icon" href="graphics/favicon.png" />
<!--<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css" media="screen" />-->
<link type="text/css" rel="stylesheet" href="style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="print.css" media="print" />
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="funcs.js"></script>

<script type="text/javascript">
var curid = "<?php echo $curlink; ?>";
var subid = "<?php echo $sublink?>";

$(document).ready(function(){
	if(curid != "home") {
		$("#"+curid).css("background-color","#FFA540");
		$("#"+subid).css("text-decoration","underline");
		$("#sub"+curid).fadeIn("fast");
	}
	
	//var active = "who";
	$("#who, #what, #involved, #action, #social").click(function(){
		var thisid = this.id;
		
		//$("#sub"+curid).stop(0,1);
		$("#"+curid).css("background","");
		$("#"+thisid).css("background","#FFA540");

		if(curid == "home")
			curid = "who";
		$("#sub"+curid).fadeOut("fast",function() {
			$("#sub"+thisid).fadeIn("fast");
		});
		curid = thisid;
		//active = thisid;
	});

<?php if($subscribed == true || $submitted == true || $registered == true) {
	echo("$('#sub').css('display','block');");
	echo("setTimeout('$(\'#sub\').slideUp(\'fast\')',5000);");
}?>



});

function validateVolForm() {
	var x=document.forms["volunteer"]["listserv_name"].value;
	var y=document.forms["volunteer"]["listserv_email"].value;
	if((x==null || x=="") || (y==null || y=="")) {
		alert("Please enter both your name and email. If you are having diffculty please contact us and we will add you manually.");
		return false;
	}
}

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21642442-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
