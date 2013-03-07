<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
	$pageTitle = "Social Media";
	$description = "Get connected to SVC through our social media and always be updated on current events in the community. Twitter, Facebook, Slideshare &amp; Formspring";
	$curlink = "action";
	$sublink = "media";

    include('head.php');
?>
	<style type="text/css">
		
    </style>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=213237372054871";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	include('header.php');
	include('menu.php');
?>
<?php include('main_top.php'); ?>
<!-- CONTENT -->
<h2>social media</h2>
<div class="clear"></div>
<div style="float:right;width:200px;">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#0398d7',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#333333',
      links: '#739448'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('svc_dosomuch').start();
</script>
</div>

<img src="http://twitter-badges.s3.amazonaws.com/t_small-a.png" alt="Twitter" />
<a href="https://twitter.com/svc_dosomuch" class="twitter-follow-button">Follow @svc_dosomuch</a><script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>

<div class="fb-like-box" data-href="http://www.facebook.com/studentvolunteerconnections" data-width="540" data-show-faces="true" data-stream="false" data-header="true"></div>
<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/CompanyProfile" data-id="2816571" data-format="inline"></script>
<div style="width:540px;">
	<object style="margin:0px" width="538" height="341">
		<param name="movie" value="http://static.slidesharecdn.com/swf/egowidget2.swf"/>
		<param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/>
		<param name="flashVars" value="feedurl=user/dosomuch&widgettitle=DoSoMuch%20Presentations"/>
		<embed src="http://static.slidesharecdn.com/swf/egowidget2.swf" flashVars="feedurl=user/dosomuch&widgettitle=DoSoMuch%20Presentations" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="538" height="341"></embed>
	</object><br/>
	<div style="font-size:11px;font-family:tahoma,arial;height:26px;padding-top:2px;text-align:left;">
		<a title="SlideShare" href="http://www.slideshare.net/?src=egowidget"><img src="http://static.slidesharecdn.com/swf/logo_embd.png" style="border:0px none;margin-bottom:-5px" alt="SlideShare"/></a> | <a href="http://www.slideshare.net/widgets/presentation-pack" title="Get your Presentation Pack">Get your Presentation Pack</a>
	</div>
</div>

<div class="clear"></div>
<!-- END OF CONTENT -->

<?php include('main_bottom.php'); ?>

<!-- SIDEBAR 
<h3>Quick Links!</h3>
<div class="container">
	<a href="docs/ontarion1967.gif">1967 Ontarion Article</a>
</div>-->
<!-- END OF SIDEBAR -->
<?php include('footer.php') ?>
</body>
</html>
