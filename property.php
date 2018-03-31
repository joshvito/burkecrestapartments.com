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
<?php $page_id = 'property' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our Property | Burke Crest Apartments | Spencerport NY</title>
<meta name="description" content="Apartment photos with PDF information spec sheet for Burke Crest Apartments property in Spencerport New York." />
<meta name="keywords" content="apartments spencerport new york, spencerport new york apartments, apartments spencerport, spencerport apartments" />
<?php require_once 'includes/dochead-resources.php'; ?>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" id="body">
<?php require_once 'includes/header-nav.php'; ?>

<div id="background">
<div class="container">
  <div class="row section">

        <div class="col-sm-6">
         <h1>Our Property</h1>
                  <p>Burke Crest Apartments, located in Spencerport, New York, offers spacious one, one &amp; one half, and two bedroom apartment homes. <a href="downloads/BurkeCrest_InfoSheet.pdf" target="_blank" class="emaillink">Download</a> our PDF info sheet to view more photos.</p>
        </div>
         <div class="col-sm-6">
                 <img src="images/property_photos2.jpg" alt="Property Photos" class="img-responsive center-block" />
         </div>
    </div>
  </div>
</div>
<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/closing-code.php'; ?>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com --><script>var om58d91fe3636ac,om58d91fe3636ac_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){om58d91fe3636ac_poll(function(){if(window['om_loaded']){if(!om58d91fe3636ac){om58d91fe3636ac=new OptinMonsterApp();return om58d91fe3636ac.init({"s":"22299.58d91fe3636ac","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;om58d91fe3636ac=new OptinMonsterApp();om58d91fe3636ac.init({"s":"22299.58d91fe3636ac","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster -->
</body>
</html>
