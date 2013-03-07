<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register for the Do So Much Weekend | Student Volunteer Connections</title>
    <meta name="description" content="Do So Much Weekend is a free conference sparking and fostering positive social action through means of social innovation, participation, and collaboration to better build community both near and far." />
    <meta name="author" content="Matthew Roberts (mroberts.me)" />
    <link type="image/png" rel="icon" href="../graphics/favicon.png" />
    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="print.css" media="print" />
    <script type="text/javascript" src="../jquery1.8.1.js"></script>
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-21642442-1']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <img src="../graphics/dosomuch-weekend.png" alt="do so much weekend" style="width:400px;height:89px;" />
            <div class="social-buttons">
                <a href="http://www.facebook.com/studentvolunteerconnections"><img src="../graphics/fb.png" /></a>
                <a href="http://www.twitter.com/svc_dosomuch"><img src="../graphics/tw.png" /></a>
                <a href="http://www.linkedin.com/company/student-volunteer-connections"><img src="../graphics/li.png" /></a>
            </div>
        </div>
    </div>
    <?php
        $active = "register";
        include('includes/menu.php');
    ?>
    <div class="row">
        <div class="span12" id="content">
            <div class="paddings">
                <h1>Registration <small>Do So Much 2013</small></h1>
                <!--
                <div class="alert alert-info">
                    This information is about last year's conference, information on this year's conference has yet to be released!
                </div>
                
                <p>To register for the Do So Much conference, please fill out the information requested below, a representative from SVC will get back to you promptly.</p>

                <p class="lead">Registration is now closed, thanks to all participants for a wonderful weekend!</p>-->
<?php
if(date(strtotime("now")) < date(strtotime("January 1, 2013"))) {
    echo('<p class="lead text-error">Registration for Do So Much 2013 will open January 1st, 2013.</p>');
}
?>
                <p class="lead">Do So Much Weekend is open to students of the University of Guelph, and beyond; community members; and alumni! This conference is <strong>free</strong> to everyone!</p>
                <p>Space is limited and preference is given to University of Guelph students. Day of registration is welcome, however a spot is not guaranteed due to the limited capacity of the conference.</p>
                <p class="text-warning">If you previously registered, but can no longer attend: please email <a href="mailto:webmaster@dosomuch.ca">webmaster@dosomuch.ca</a> to get your name removed. Space is limited, so de-registering will allow others to attend!</p>
<?php
if((date(strtotime("now")) >= date(strtotime("January 1, 2013"))) && (date(strtotime("now")) <= date(strtotime("January 25, 2013 12pm EST")))) {
    echo('<div class="alert alert-info">');
    echo('<p>University of Guelph students will be automatically accepted upon registration for the Do So Much Conference and will receive an e-mail within 1 week of registration. All other applicants (community members, alumni, and students from other schools) will be notified on the status of their application within 3 days of registration.</p>');
    echo('</div>');
    echo('<iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dHR2Z3I1N1F3cXRYYW9uWEhYX1BVYlE6MQ" style="width:100%;height:800px;" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>');
} elseif(date(strtotime("now")) > date(strtotime("January 25, 2013 12pm EST"))) {
    echo('<div class="hero-unit">');
    echo('<h2 class="text-error">Online registration is now closed.</h2>');
    echo('<p class="lead">If you would still like to attend:</p>');
    echo('<p>We are accepting day-of registration, however <!--we cannot guarantee a spot, as the conference has a limited capacity; and--> we cannot take into consideration any specific dietary or accessibility requirements for such registrants.</p>');
    echo('<p>Day-of registration is open from 9:00am - 11:45am, on Saturday, in the <a href="location">Rozanski Hall</a> Concourse.</p>');
    echo('</div>');
}
?>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>
</div>
</body>
</html>
