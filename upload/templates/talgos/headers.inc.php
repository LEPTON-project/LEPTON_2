<?php

/**
 *  @template       Talgos  Backend-Theme
 *  @version        see info.php of this template
 *  @author         LEPTON project, (Jurgen Nijhuis & Ruud Eisinga, Dietrich Roland Pehlke, Bernd Michna, LEPTON project for algos theme)
 *	@copyright      2010-2018 LEPTON project
 *  @license        GNU General Public License
 *  @license terms  see info.php of this template
 *
 *
 */
 
 // include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {   
   include(LEPTON_PATH.'/framework/class.secure.php');
} else {
   $oneback = "../";
   $root = $oneback;
   $level = 1;
   while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
      $root .= $oneback;
      $level += 1;
   }
   if (file_exists($root.'/framework/class.secure.php')) {
      include($root.'/framework/class.secure.php');
   } else {
      trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
   }
}
// end include class.secure.php


$mod_headers = array(
	'backend' => array(
        'css' => array(
		array(
			'media'  => 'all',
			'file'  => 'include/jscalendar/calendar-system.css'
			)
		),			
		'js' => array(
			'modules/lib_jquery/jquery-core/jquery-core.min.js',
			'modules/lib_jquery/jquery-core/jquery-migrate.min.js',
			'modules/lib_jquery/external/jquery.idTabs.min.js'
		),
	)
);
?>

