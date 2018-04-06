<?php //require_once 'includes/cms-library-loader.php'; ?>
<?php
/*  // load record from 'home_page'
  list($home_pageRecords, $home_pageMetaData) = getRecords(array(
    'tableName'   => 'home_page',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $home_pageRecord = @$home_pageRecords[0]; // get first record
  if (!$home_pageRecord) { dieWith404("Record not found!"); } // show error message if no record found*/
?>
<?php $page_id = 'home' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apartments for Rent | Burke Crest Apartments | Spencerport NY<?php //echo htmlencode($home_pageRecord['meta_title']) ?></title>
<meta name="description" content="<?php //echo htmlencode($home_pageRecord['meta_description']) ?>">
<meta name="keywords" content="<?php //echo htmlencode($home_pageRecord['meta_keywords']) ?>">
<?php require_once 'includes/dochead-resources.php'; ?>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" id="body">

<?php require_once 'includes/header-nav.php'; ?>

<!-- home top -->
<div id="background">
<div class="container">

  <div class="row section">

      <div class="col-sm-7 col-md-8 ">

<!--  
	<h1>Spencerport Apartment Rentals</h1>
		 	<h2>One Bedroom with Den<br>Now Available!</h2>
	<h2>Recently Updated: $690.00 per month, includes heat and hot water!</h2><br><br>
 -->

                  <h2>Burke Crest Apartments offers spacious one, one &amp; one half, and two bedroom apartments for rent.</h1>
                  <h2>Located in Spencerport New York, Burke Crest Apartments is a five building complex back-set on an 8 acre country property.</h2>

<!--
<h4 class="pad-head">Available September 1st!</h4>
            <p>1 Bedroom Apartment<br>$670.00 per month, includes heat and hot water!</p>
-->
<p><a href="downloads/BurkeCrest_InfoSheet.pdf" target="_blank" class="emaillink">Download</a> our PDF info sheet to view more photos.</p> 



 <!-- 
<h4 class="pad-head">Now Renting for May 2015!</h4>
            <p>Recently Updated, 1 1/2 Bedroom Apartment</p> 
-->

      </div>
      <div class="col-sm-5 col-md-4 well">
            <?php require_once 'includes/sidebar.php' ?>
      </div>

  </div>
</div>
</div>
<!-- end top -->

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/closing-code.php'; ?>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com --><script>var om58d91fe3636ac,om58d91fe3636ac_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){om58d91fe3636ac_poll(function(){if(window['om_loaded']){if(!om58d91fe3636ac){om58d91fe3636ac=new OptinMonsterApp();return om58d91fe3636ac.init({"s":"22299.58d91fe3636ac","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;om58d91fe3636ac=new OptinMonsterApp();om58d91fe3636ac.init({"s":"22299.58d91fe3636ac","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster -->
</body>
</html>