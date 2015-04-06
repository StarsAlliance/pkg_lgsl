<?php

  defined('_JEXEC') or die;

//------------------------------------------------------------------------------------------------------------+

  global $output, $lgsl_server_id;

  $output = '';
  $s      = JFactory::getApplication()->input->get('s');

  if     (is_numeric($s)) { $lgsl_server_id = $s; require JPATH_SITE.'/components/com_lgsl/lgsl_files/lgsl_details.php'; }
  elseif ($s == 'add')    {                       require JPATH_SITE.'/components/com_lgsl/lgsl_files/lgsl_add.php';     }
  else                    {                       require JPATH_SITE.'/components/com_lgsl/lgsl_files/lgsl_list.php';    }

  echo $output;
  unset($output);

//------------------------------------------------------------------------------------------------------------+
