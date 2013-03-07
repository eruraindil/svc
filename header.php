<div id="header">
	<div id="sub">
		<span>
<?php
	$submessage = "";
	if($subscribed == true) $submessage .= "you have been subscribed to the Volunteer Weekly";
	if($submitted == true) $submessage .= "your one2one submission has been recieved";
	echo $submessage;
?>
		</span>
	</div>
	<div id="header-left" class="wrapper">
		<div id="cse-search-form" style="width:400px;height:50px;float:right;">
			<!----><div style="padding-top:10px;text-align:center;">Loading</div></div>
		<script src="//www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript"> 
		  google.load('search', '1', {language : 'en'});
		  google.setOnLoadCallback(function() {
			var customSearchControl = new google.search.CustomSearchControl(
			  '002417272145393622256:3qofwchykyy');

			customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
			var options = new google.search.DrawOptions();
			options.enableSearchboxOnly("http://www.uoguelph.ca/~svc/search.php");
			customSearchControl.draw('cse-search-form', options);
		  }, true);
		</script>
		<link rel="stylesheet" href="//www.google.com/cse/style/look/default.css" type="text/css" />
		<style type="text/css">
		  input.gsc-input {
			border-color: #0397d7;
		  }
		  input.gsc-search-button {
			border-color: #999999;
			background-color: #CCCCCC;
			padding:0 2px;
		  }
		</style>
		<div class="clear"></div>
		<a href="/~svc/"><img src="graphics/little_logo.png" alt="SVC" style="width:150px;height:55px;" /></a>
		<h1>student volunteer connections</h1>
		<div class="clear"></div>
	</div>
</div>
