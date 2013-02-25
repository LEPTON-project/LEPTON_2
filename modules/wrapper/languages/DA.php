<?php

/**
 * This file is part of an ADDON for use with LEPTON Core.
 * This ADDON is released under the GNU GPL.
 * Additional license terms can be seen in the info.php of this module.
 *
 * @module          wrapper
 * @author          WebsiteBaker Project
 * @author          LEPTON Project
 * @copyright       2004-2010, WebsiteBaker Project
 * @copyright       2010-2013 LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see info.php of this module
 * @version         $Id: DA.php 1172 2011-10-04 15:26:26Z frankh $
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {	
	include(WB_PATH.'/framework/class.secure.php'); 
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



// Dansk modulbeskrivelse
$module_description = 'Med dette modul kan du indpakke indhold fra fremmede websider p&Atilde;&yen; dit websted ved hj&Atilde;&brvbar;lp af Inline Frames (iframe)';

// Headings and text outputs
$MOD_WRAPPER['NOTICE'] = 'Din browser underst&Atilde;¸tter ikke inline frames.<br />Klik p&Atilde;&yen; linket nedenfor for at bes&Atilde;¸ge det websted, som det var hensigten at vise her...<br />';

?>
