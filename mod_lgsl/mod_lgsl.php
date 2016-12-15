<?php

  defined('_JEXEC') or die;

  global $output, $lgsl_zone_number;

  $output = '';
  $lgsl_zone_number = $params->get('zone_number');
  require JPATH_SITE.'/components/com_lgsl/lgsl_files/lgsl_zone.php';
  echo $output;
  unset($output);
