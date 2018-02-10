<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 * 
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 *
 * @author          LEPTON Project
 * @copyright       2010-2018 LEPTON Project
 * @link            https://lepton-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
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

require_once (LEPTON_PATH.'/framework/summary.addon_precheck.php');

// check user permissions for admintools (redirect users with wrong permissions)
$admin = new LEPTON_admin('Admintools', 'admintools', true);
$msg = array();
$error_msg = array();

$leptoken = (isset($_GET['leptoken'])) ? "?leptoken=".$_GET['leptoken'] : "";
$backlink = "../modules/index.php".$leptoken; //'index.php?advanced=yes';

if ($admin->get_permission('admintools') == true)
{
	$post_check = array('reload_modules', 'reload_templates', 'reload_languages');
	
	// if all addons should be reloaded at once
	if(isset($_GET['reload_all'])) {
		foreach($post_check as $key){
			$_POST[$key] = true;
		}     
	}
	
	// include functions file
	require_once (LEPTON_PATH.'/framework/summary.functions.php');
	// load language file
	require_once (LEPTON_PATH.'/languages/'.LANGUAGE.'.php');

	/**
	 * Reload all specified Addons
	 */
	$table = TABLE_PREFIX.'addons';
	foreach ($post_check as $key)
	{
		if(!isset($_POST[$key])){
            continue;
		}
		
		switch ($key) :
			case 'reload_modules' :
				// first remove addons entrys for module that don't exists
				$aAllAddons = array();
				$database->execute_query(
				    'SELECT `directory` FROM `'.TABLE_PREFIX.'addons` WHERE `type` = \'module\' ',
				    true,
				    $aAllAddons,
				    true
				);
				
				
                foreach($aAllAddons as $value) // while ($value = $res_addons->fetchRow())
                {
                    if(file_exists(LEPTON_PATH.'/modules/'.$value['directory']))
                    {
                        continue;
                    }
                    
                    $aTempPages = array();
                    $database->execute_query(
                        "SELECT `section_id`,`module`, `page_id` FROM `".TABLE_PREFIX."sections` WHERE `module` = '".$value['directory']."'",
                        true,
                        $aTempPages,
                        true
                    );

                    if(count($aTempPages) > 0)
                    {
                        /**
                         *	Module is in use, so we have to warn the user
                         */
                        foreach( $aTempPages as $data)
                        {
                            $temp_info = $database->get_one( "SELECT `menu_title` FROM `".TABLE_PREFIX."pages` WHERE `page_id` = ".$data['page_id'] );
                            
                            $page_url = '<span class="normal bold"> -> <a href="'.ADMIN_URL.'/pages/sections.php?page_id='.$data['page_id'].'">'.$temp_info.'</a> ('.$TEXT['PAGE'].' '.$data['page_id'].')</span>';
                            $error_msg[] = '<span class="normal bold">'.$data['module'].'</span> <span class="normal bold red">'.$MESSAGE['GENERIC_CANNOT_UNINSTALL_IN_USE'].'</span>'.$page_url;
                        }
                    }
                    else
                    {
                        // loop through all installed modules
                        $directory = LEPTON_PATH.'/modules/'.$value['directory'];
                        if (!is_dir($directory) && !file_exists($directory.'/info.php'))
                        {
                            $database->simple_query( "DELETE FROM `".TABLE_PREFIX."addons` WHERE `type` = 'module' AND `directory` = '".$value['directory']."'");

                            $aTables = array();
                            $database->execute_query(
                                "SHOW TABLES LIKE '".TABLE_PREFIX."mod_".$value['directory']."%'",
                                true,
                                $aTables,
                                true
                            );
                            
                            foreach($aTables as $tables )
                            {
                                foreach($tables as $key=>$tablename)
                                {
                                    $success = $database->simple_query('DROP TABLES `'.$tablename.'` ');
                                    if ( true === $success)
                                    {
                                        $msg[] = '<span class="normal bold">'.$tablename.' '.$MESSAGE['GENERIC_UNINSTALLED'].'</span>';
                                    }
                                    else
                                    {
                                        $error_msg[] = '<span class="normal bold red">'.$tablename.' '.$MESSAGE['RECORD_MODIFIED_FAILED'].'</span>';
                                    }
                                }
                            }			
                        }
                        else
                        {
                            $error_msg[] = '<span class="normal bold red">'.$value['directory'].' '.$MESSAGE['RECORD_MODIFIED_FAILED'].'</span> ';
                        }
                    }
                }
				
				/**
				 *	Now check modules folder with entries in addons
				 */
				$modules = scan_current_dir(LEPTON_PATH.'/modules');
				if (count($modules['path']) > 0)
				{
					foreach ($modules['path'] as &$value)
					{

						// Test for missing entries in the DB.
						$temp_info = array();
						$database->execute_query(
							"SELECT * FROM `".TABLE_PREFIX."addons` WHERE `directory`='".$value."'",
							true,
							$temp_info,
							false
						);

						if(0 === count($temp_info)) {
							
							// There is no entry for this module in the DB!
							require(LEPTON_PATH.'/modules/'.$value."/info.php");
							load_module(LEPTON_PATH.'/modules/'.$value);
							$msg[] = '<span class="normal bold green">'.$value.' :: '.$MESSAGE['ADDON_MODULES_RELOADED'].' [1]</span>';

						} else {

							$code_version = get_modul_version($value);
							$db_version = $temp_info['version'];

							if (($db_version != null) && ($code_version != null))
							{
								if (versioncompare($db_version, $code_version, '>'))
								{
									$error_msg[] = '<span class="normal bold red">'.$value.' ( '.$db_version.' > '.$code_version.' ) '.$MESSAGE['GENERIC_MODULE_VERSION_ERROR'].'</span>';
									continue;
								}
								else
								{
									require(LEPTON_PATH.'/modules/'.$value."/info.php");
									load_module(LEPTON_PATH.'/modules/'.$value);
									$msg[] = '<span class="normal bold green">'.$value.' :: '.$MESSAGE['ADDON_MODULES_RELOADED'].' [2]</span>';
								}
							}
						}
					}
				}
				else
				{
					$error_msg[] = '<span class="normal bold red">'.$MESSAGE['ADDON_ERROR_RELOAD'].'</span>';
				}
				break;

			case 'reload_templates' :
				$templates = scan_current_dir(LEPTON_PATH.'/templates');
				if (count($templates['path']) > 0)
				{
					// Delete all templates from database
					$database->simple_query( "DELETE FROM  `".TABLE_PREFIX."addons`  WHERE `type` = 'template'");
					
					// Reload all templates
					foreach($templates['path'] as &$file)
					{
						require(LEPTON_PATH.'/templates/'.$file."/info.php");
						load_template(LEPTON_PATH.'/templates/'.$file);
					}
					// Add success message
					$msg[] = '<span class="normal bold green">'.$MESSAGE['ADDON_TEMPLATES_RELOADED'].'</span>';
				}
				else
				{
					// Add error message
					$error_msg[] = '<span class="normal bold red">'.$MESSAGE['ADDON_ERROR_RELOAD'].' - No templates found!</span> ';
				}
				break;

			case 'reload_languages' :
				$languages = scan_current_dir(LEPTON_PATH.'/languages/', 'php');
				if ( count($languages['filename']) > 0)
				{
					// Delete all languages from database
					$database->query( "DELETE FROM  `".TABLE_PREFIX."addons`  WHERE `type` = 'language'" );
					
					// Reload all languages
					foreach($languages['filename'] as &$file)
					{
						load_language(LEPTON_PATH.'/languages/'.$file);
					}
					
					//  Reload the current language file - otherwise wie've got the last message in e.g. russian.
					require( LEPTON_PATH . '/languages/' . LANGUAGE . '.php' );    
					
					// Add success message
					$msg[] = '<span class="normal bold green">'.$MESSAGE['ADDON_LANGUAGES_RELOADED'].'</span>';
				}
				else
				{
					// Add error message
					$error_msg[] = '<span class="normal bold red">'.$MESSAGE['ADDON_ERROR_RELOAD'].' - No languages found!</span>';
				}
				break;
			endswitch;
	}

}
else
{
    $error_msg[] = '<span class="big bold red">'.$MESSAGE['ADMIN_INSUFFICIENT_PRIVELLIGES'].'</span> ';
}

// go back to the correct backend-interface
if(isset($_POST["reload_templates"]))
{
    $backlink = "../templates/index.php".$leptoken;
}

if (sizeof($error_msg) > 0)
{
    $error_msg = array_merge($error_msg, $msg);
    $admin->print_error( implode($error_msg, '<br />'), $backlink );
}
else
{
// output success message
    $admin->print_success( implode($msg, '<br />'), $backlink );
}

$admin->print_footer();

?>