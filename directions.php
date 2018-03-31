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
<?php $page_id = 'directions' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Location & Directions | Burke Crest Apartments | Spencerport NY</title>
<meta name="description" content="Directions and map for Burke Crest Apartments, 6 Burke Lane, Spencerport, NY 14559, 585-777-4003." />
<meta name="keywords" content="spencerport apartments, apartments spencerport, apartments spencerport ny, spencerport ny apartments" />
<?php require_once 'includes/dochead-resources.php'; ?>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" id="body">
<?php require_once 'includes/header-nav.php'; ?>

<div id="background">
<div class="container">
  <div class="row section">
    <div class="col-sm-6">
            <h1>Our Property</h1>
            <h2>Driving Directions</h2>
            <p>Burke Crest Apartments is located in Spencerport, NY, only 20 minutes from downtown Rochester. Click on the map to get directions.</p>
    </div>
    <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2907.7907046407!2d-77.762965!3d43.213879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8401021686a12288!2sBurke+Crest+Apartments!5e0!3m2!1sen!2sus!4v1410364332905"  frameborder="0" style="border:0;margin-left:12px;"></iframe>
            <script src="http://www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/114281111391296844949/driving-directions.xml&amp;up_fromLocation=&amp;up_myLocations=6%20Burke%20Lane%2C%20Spencerport%2C%20NY%2014559&amp;synd=open&amp;w=510&amp;h=65&amp;title=&amp;brand=light&amp;lang=en&amp;country=US&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js" type="text/javascript"></script>
    </div>
  </div>
</div>
</div>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/closing-code.php'; ?>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com --><script>var om58d91fe3636ac,om58d91fe3636ac_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){om58d91fe3636ac_poll(function(){if(window['om_loaded']){if(!om58d91fe3636ac){om58d91fe3636ac=new OptinMonsterApp();return om58d91fe3636ac.init({"s":"22299.58d91fe3636ac","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;om58d91fe3636ac=new OptinMonsterApp();om58d91fe3636ac.init({"s":"22299.58d91fe3636ac","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster -->
</body>
</html>
