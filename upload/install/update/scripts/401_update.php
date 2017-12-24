<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 *
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          LEPTON Project
 * @copyright       2018 LEPTON Project
 * @link            https://lepton-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 */

/* only for direct test purposes 
require_once('../../../config/config.php');
global $admin;
$admin = new LEPTON_admin('Addons', 'modules', false, false);
 */
 
// set error level
 ini_set('display_errors', 1);
 error_reporting(E_ALL|E_STRICT);
 
echo ('<h3>Current process : updating to LEPTON 4.0.1</h3>');


/**
 *  run upgrade.php of all modified modules
 *
 */
 echo '<h5>Current process : run modules upgrade.php</h5>';  
 
$module_names = array(
    "tinymce"
);
LEPTON_handle::upgrade_modules($module_names);

echo "<h5>run upgrade.php of modified modules: successfull</h5>";


// at last: set db to current release-no
echo '<h5>set database to new release</h5>';
$database->simple_query('UPDATE `' . TABLE_PREFIX . 'settings` SET `value` =\'4.0.1\' WHERE `name` =\'lepton_version\'');


/**
 *  success message
 */
echo "<h3>update to LEPTON 4.0.1 successfull!</h3><br />"; 

?>
