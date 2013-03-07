<!DOCTYPE html>
<html lang="en">
<head>
    <title>Speakers List for the Do So Much Weekend | Student Volunteer Connections</title>
    <meta name="description" content="Do So Much Weekend is a free conference sparking and fostering positive social action through means of social innovation, participation, and collaboration to better build community both near and far." />
    <meta name="author" content="Matthew Roberts (mroberts.me)" />
    <link type="image/png" rel="icon" href="../graphics/favicon.png" />
    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="print.css" media="print" />
    <script type="text/javascript" src="../jquery1.8.1.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../funcs.js"></script>
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
<?php include('2013/bios.php');?>
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
        $active = "speakers";
        include('includes/menu.php');
    ?>
    <div class="row">
        <div class="span12" id="content">
            <div class="paddings">
                <table class="table table-striped table-condensed"><thead><tr>
                    <th colspan="2"><h1>Speaker Bios <small>Do So Much 2013</small></h1></th>
                </tr></thead><tbody>
                <?php foreach($speakers as $speaker):?>
                    <tr>
                        <th colspan="2"><a id="<?php echo $speaker['slug'];?>"></a><h4><?php echo $speaker['name'];?></h4></th>
                    </tr><tr>
                        <td>
                            <p><?php echo $speaker['bio'][0] . " " . $speaker['bio'][1];?></p>

                            <?php if(count($speaker['bio']) > 2):?>
                                <p class="modal-button"><a href="#<?php echo $speaker['slug'];?>-bio" data-toggle="modal" class="btn btn-small">Full Bio</a></p>
                            <?php endif;?>
                            <ul>
                            <?php foreach($speaker['links'] as $link):?>
                                <li><?php echo $link['title'];?><br />
                                <a href="http://<?php echo $link['url'];?>" onclick="window.open(this.href,'_blank');return false;"><?php echo ($link['override'] == null ? $link['url'] : $link['override']);?></a></li>
                            <?php endforeach;?>
                            </ul>
                        </td>
                        <td style="width:281px;">
                        <?php if($speaker['pic']['url'] != null):?>
                            <div class="thumbnail">
                                <img src="<?php echo $speaker['pic']['url'];?>" style="width:281px;" alt="<?php echo $speaker['name'];?> pic" />
                                <p><small>Image source: <?php echo ($speaker['pic']['source'] != null ? $speaker['pic']['source'] : 'used with permission');?></small></p>
                            </div>
                        <?php endif;?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>
</div>
</body>
</html>