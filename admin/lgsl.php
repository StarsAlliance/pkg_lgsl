<?php

//------------------------------------------------------------------------------------------------------------+

  defined('_JEXEC') or die('DIRECT ACCESS NOT ALLOWED');

//------------------------------------------------------------------------------------------------------------+

  define('LGSL_ADMIN', TRUE);

  global $output;
  $output = '';
  require JPATH_SITE.'/components/com_lgsl/lgsl_files/lgsl_admin.php';
  echo $output;
  unset($output);

//------------------------------------------------------------------------------------------------------------+