<?php 
  header('Content-type: text/html; charset=utf-8'); 
  
  // load viewer library
  $libraryPath = 'cmsb/lib/viewer_functions.php';
  $dirsToCheck = array('/THE/SERVER/PATH/www.DOMAIN.com/web/content/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'site_controls'
  list($site_controlsRecords, $site_controlsMetaData) = getRecords(array(
    'tableName'   => 'site_controls',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $site_controlsRecord = @$site_controlsRecords[0]; // get first record
  if (!$site_controlsRecord) { dieWith404("Error loading site controls."); } // show error message if no record found
?>
