<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 *
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Website Baker Project, LEPTON Project
 * @copyright       2004-2010 Website Baker Project
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



// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
	define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_directory = 'DK';
$language_code = 'dk';
$language_name = 'Dansk';
$language_version = '2.3';
$language_platform = '3.x';
$language_author = 'Hoerts';
$language_license = 'GNU General Public License';
$language_guid = '2BF67D57-4B19-40CC-A63E-50CBDD81048D';

$MENU = array(
	'ACCESS' 				=> 'Adgang',
	'ADDON' 				=> 'Tilføjelse',
	'ADDONS' 				=> 'Tilføjelser',
	'ADMINTOOLS' 			=> 'Admin værktøjer',
	'BREADCRUMB' 			=> 'Du er her: ',
	'FORGOT' 				=> 'Modtag login detaljer',
	'GROUP' 				=> 'Gruppe',
	'GROUPS' 				=> 'Grupper',
	'HELP' 					=> 'Hjælp',
	'LANGUAGES' 			=> 'Sprog',
	'LOGIN' 				=> 'Login',
	'LOGOUT' 				=> 'Log-ud',
	'MEDIA' 				=> 'Media',
	'MODULES' 				=> 'Moduler',
	'PAGES' 				=> 'Sider',
	'PREFERENCES' 			=> 'Præferencer',
	'SETTINGS' 				=> 'Indstillinger',
	'START' 				=> 'Start',
	'TEMPLATES' 			=> 'Templates',
	'USERS' 				=> 'Brugere',
	'VIEW' 					=> 'Se',
	'SERVICE'				=> 'Service'
); // $MENU

$TEXT = array(
	'ACCOUNT_SIGNUP' 		=> 'Registrering',
	'ACTION_NOT_SUPPORTED'	=> 'Handling ikke tilladt',
	'ACTIONS' 				=> 'Handlinger',
	'ACTIVE' 				=> 'Aktiv',
	'ADD' 					=> 'Tilføj',
	'ADDON' 				=> 'Tilføjelse',
	'ADD_SECTION' 			=> 'Tilføj sektion',
	'ADMIN' 				=> 'Admin',
	'ADMINISTRATION' 		=> 'Administration',
	'ADMINISTRATION_TOOL' 	=> 'Administrations Værktøj',
	'ADMINISTRATOR' 		=> 'Administrator',
	'ADMINISTRATORS' 		=> 'Administratorer',
	'ADVANCED' 				=> 'Advanceret',
	'ALLOWED_FILETYPES_ON_UPLOAD' => 'Tilladte filtyper ved upload',
	'ALLOWED_VIEWERS' 		=> 'tilladte besøgende',
	'ALLOW_MULTIPLE_SELECTIONS' => 'Tillad flere valg',
	'ALL_WORDS' 			=> 'Alle ord',
	'ANCHOR' 				=> 'Bogmærke',
	'ANONYMOUS' 			=> 'Anonym',
	'ANY_WORDS' 			=> 'Ethvert ord',
	'APP_NAME' 				=> 'Applikationsnavn',
	'ARE_YOU_SURE' 			=> 'Er du sikker?',
	'AUTHOR' 				=> 'Forfatter',
	'BACK' 					=> 'Tilbage',
	'BACKUP' 				=> 'Backup',
	'BACKUP_ALL_TABLES' 	=> 'Lav en backup af alle tabler i databasen',
	'BACKUP_DATABASE' 		=> 'Database backup',
	'BACKUP_MEDIA' 			=> 'Lav backup af medie-filer',
	'BACKUP_WB_SPECIFIC' 	=> 'Lav kun backup af specifikke tabeller',
	'BASIC' 				=> 'Grundlæggende',
	'BLOCK' 				=> 'Blok',
	'BACKEND_TITLE'	        => 'Backendtitle',
	'CALENDAR' 				=> 'kalender',
	'CANCEL' 				=> 'Fortryd',
	'CAN_DELETE_HIMSELF' 	=> 'Kan slette sig selv',
	'CAPTCHA_VERIFICATION' 	=> 'Captcha Verifikation',
	'CAP_EDIT_CSS' 			=> 'Redigér CSS',
	'CHANGE' 				=> 'Ændre',
	'CHANGES' 				=> 'Ændringer',
	'CHANGE_SETTINGS' 		=> 'Redigér indstillinger',
	'CHARSET' 				=> 'tegnsæt',
	'CHECKBOX_GROUP' 		=> 'Checkbox Gruppe',
	'CLOSE' 				=> 'Luk',
	'CODE' 					=> 'Kode',
	'CODE_SNIPPET' 			=> 'Kodestump',
	'COLLAPSE' 				=> 'Slå sammen',
	'COMMENT' 				=> 'Kommentér',
	'COMMENTING' 			=> 'Kommenterer',
	'COMMENTS' 				=> 'Kommentarer',
	'CREATE_FOLDER' 		=> 'Lav en mappe',
	'CURRENT' 				=> 'Nuværende',
	'CURRENT_FOLDER' 		=> 'Nuværende mappe',
	'CURRENT_PAGE' 			=> 'Nuværende side',
	'CURRENT_PASSWORD' 		=> 'Nuværende password',
	'CUSTOM' 				=> 'Brugerdefineret',
	'DATABASE' 				=> 'Database',
	'DATE' 					=> 'Dato',
	'DATE_FORMAT' 			=> 'Dato format',
	'DEFAULT' 				=> 'Standard',
	'DEFAULT_CHARSET' 		=> 'Standard tegnsæt',
	'DEFAULT_TEXT' 			=> 'Standard tekst',
	'DELETE' 				=> 'Slet',
	'DELETED' 				=> 'Slettet',
	'DELETE_DATE' 			=> 'Slet dato',
	'DELETE_ZIP' 			=> 'Slet zip-arkiv efter udpakning',
	'DESCRIPTION' 			=> 'Beskrivelse',
	'DESIGNED_FOR' 			=> 'Designet til',
	'DIRECTORIES' 			=> 'Biblioteker (Mapper)',
	'DIRECTORY_MODE' 		=> 'Bibliotekstilstand',
	'DISABLED' 				=> 'Slået fra',
	'DISPLAY_NAME' 			=> 'Vis navn',
	'EMAIL' 				=> 'Email',
	'EMAIL_ADDRESS' 		=> 'Email addresse',
	'EMPTY_TRASH' 			=> 'Tøm papirkurv',
	'ENABLE_JAVASCRIPT'		=> "Vær venlig at slå JavaScript til for at bruge denne form.",
	'ENABLED' 				=> 'Slået til',
	'END' 					=> 'Slut',
	'ERROR' 				=> 'Fejl',
	'EXACT_MATCH' 			=> 'Eksakt søgning',
	'EXECUTE' 				=> 'Udfør',
	'EXPAND' 				=> 'Fold ud',
	'EXTENSION' 			=> 'Udvidelse',
	'FIELD' 				=> 'Felt',
	'FILE' 					=> 'Fil',
	'FILES' 				=> 'Filer',
	'FILESYSTEM_PERMISSIONS' => 'Tilladelser til filstystemet',
	'FILE_MODE' 			=> 'Fil tilstand',
	'FINISH_PUBLISHING' 	=> 'Afslut udgivelse',
	'FOLDER' 				=> 'Mappe',
	'FOLDERS' 				=> 'Mapper',
	'FOOTER' 				=> 'Footer',
	'FORGOTTEN_DETAILS' 	=> 'Har du glemt dine login-oplysninger?',
	'FORGOT_DETAILS' 		=> 'Glemt login-oplysninger?',
	'FROM' 					=> 'Fra',
	'FRONTEND' 				=> 'Forside',
	'FULL_NAME' 			=> 'Fulde navn',
	'FUNCTION' 				=> 'Funktion',
	'GROUP' 				=> 'Gruppe',
	'HEADER' 				=> 'Hoved (overligger)',
	'HEADING' 				=> 'Overskrift',
	'HEADING_CSS_FILE' 		=> 'Aktuel modulfil: ',
	'HEIGHT' 				=> 'Højde',
	'HELP_LEPTOKEN_LIFETIME'		=> 'i sekunder, 0 betyder ingen CSRF beskyttelse!',
	'HELP_MAX_ATTEMPTS'		=> 'Dette er max. antal login forsøg.',
	'HIDDEN' 				=> 'Skjult',
	'HIDE' 					=> 'Gem',
	'HIDE_ADVANCED' 		=> 'Gem avancerede muligheder',
	'HOME' 					=> 'Hjem',
	'HOMEPAGE_REDIRECTION' 	=> 'Viderestilling af hjemmeside',
	'HOME_FOLDER' 			=> 'Personlig folder',
	'HOME_FOLDERS' 			=> 'Personlig foldere',
	'HOST' 					=> 'Vært',
	'ICON' 					=> 'Ikon',
	'IMAGE' 				=> 'Billede',
	'INLINE' 				=> 'In-line',
	'INSTALL' 				=> 'Installér',
	'INSTALLATION' 			=> 'Installation',
	'INSTALLATION_PATH' 	=> 'Installations sti',
	'INSTALLATION_URL' 		=> 'Installations URL',
	'INSTALLED' 			=> 'installeret',
	'INTRO' 				=> 'Introduktion',
	'INTRO_PAGE' 			=> 'Intro-side',
	'INVALID_SIGNS' 		=> 'skal begynde med et bogstav eller indeholder ugyldige tegn',
	'KEYWORDS' 				=> 'Nøgleord',
	'LANGUAGE' 				=> 'Sprog',
	'LAST_UPDATED_BY' 		=> 'Sidst opdateret af',
	'LENGTH' 				=> 'Længde',
	'LEPTOKEN_LIFETIME'		=> 'LEPTOKEN Levetid',
	'LEVEL' 				=> 'Niveau',
	'LIBRARY'				=> 'Bibliotek',
	'LICENSE'				=> 'Licens',
	'LINK' 					=> 'Link',
	'LINUX_UNIX_BASED' 		=> 'Linux/Unix baseret',
	'LIST_OPTIONS' 			=> 'Vis valgmuligheder',
	'LOGGED_IN' 			=> 'Logget ind',
	'LOGIN' 				=> 'Login',
	'LONG' 					=> 'Lang',
	'LONG_TEXT' 			=> 'Lang Tekst',
	'LOOP' 					=> 'Liste',
	'MAIN' 					=> 'Hovedoversigt',
	'MANAGE' 				=> 'Administrer',
	'MANAGE_GROUPS' 		=> 'Administrer grupper',
	'MANAGE_USERS' 			=> 'Administrer brugere',
	'MATCH' 				=> 'Match',
	'MATCHING' 				=> 'Matchende',
	'MAX_ATTEMPTS'		=> 'Tilladte login forsøg',
	'MAX_EXCERPT' 			=> 'Max linier i udsnit',
	'MAX_SUBMISSIONS_PER_HOUR' => 'Max. indsendte bidrag pr. time',
	'MEDIA_DIRECTORY' 		=> 'Medie mappe',
	'MENU' 					=> 'Menu',
	'MENU_ICON_0' 			=> 'Menu-ikon normal',
	'MENU_ICON_1' 			=> 'Menu-ikon svævende',
	'MENU_TITLE' 			=> 'Menu titel',
	'MESSAGE' 				=> 'Besked',
	'MODIFY' 				=> 'Ændre',
	'MODIFY_CONTENT' 		=> 'Ændre indhold',
	'MODIFY_SETTINGS' 		=> 'Ændre indstillinger',
	'MODULE_ORDER' 			=> 'Modul-rækkefølge ved søgning',
	'MODULE_PERMISSIONS' 	=> 'Modul rettigheder',
	'MORE' 					=> 'Mere',
	'MOVE_DOWN' 			=> 'Flyt ned',
	'MOVE_UP' 				=> 'Flyt op',
	'MULTIPLE_MENUS' 		=> 'Flere menuer',
	'MULTISELECT' 			=> 'Multi valg',
	'NAME' 					=> 'Navn',
	'NEED_CURRENT_PASSWORD' => 'bekræft med nuværende adgangskode',
	'NEED_PASSWORD_TO_CONFIRM' => 'Bekræft venligst med dit nuværende adgangskode',
	'NEED_TO_LOGIN' 		=> 'Brug for at logge ind?',
	'NEW_PASSWORD' 			=> 'Nyt kodeord',
	'NEW_USER_HINT'			=> 'Minimum længde for brugernavn: %d tegn, Minimum længde for adgangskode: %d tegn!',
	'NEW_WINDOW' 			=> 'Nyt vindue',
	'NEXT' 					=> 'Næste',
	'NEXT_PAGE' 			=> 'Næste side',
	'NO' 					=> 'Nej',
	'NO_LEPTON_ADDON'       => 'Denne tilføjelse kan ikke bruges sammen med LEPTON',
	'NONE' 					=> 'Ingen',
	'NONE_FOUND' 			=> 'Ingen fundne',
	'NOT_FOUND' 			=> 'Ikke fundet',
	'NOT_INSTALLED' 		=> 'ikke installeret',
	'NO_RESULTS' 			=> 'Ingen resultater',
	'OF' 					=> 'Af',
	'ON' 					=> 'på',
	'OPEN' 					=> 'Åben',
	'OPTION' 				=> 'Muligheder',
	'OTHERS' 				=> 'Andre',
	'OUT_OF' 				=> 'Ud af',
	'OVERWRITE_EXISTING' 	=> 'Overskriv eksisterende',
	'PAGE' 					=> 'Side',
	'PAGES_DIRECTORY' 		=> 'Side mappe',
	'PAGES_PERMISSION' 		=> 'Side tilladselse',
	'PAGES_PERMISSIONS' 	=> 'Side tilladelser',
	'PAGE_EXTENSION' 		=> 'Siden udvidelse',
	'PAGE_ICON' 			=> 'Side billede',
	'PAGE_ID'               => 'Side ID',
	'PAGE_LANGUAGES' 		=> 'Sprog',
	'PAGE_LEVEL_LIMIT' 		=> 'Side mappe',
	'PAGE_SPACER' 			=> 'Side pladsmarkør',
	'PAGE_TITLE' 			=> 'Titel på side',
	'PAGE_TRASH' 			=> 'Papirkurv til sider',
	'PARENT' 				=> 'Overliggende niveau',
	'PASSWORD' 				=> 'Adgangskode',
	'PATH' 					=> 'Sti',
	'PHP_ERROR_LEVEL' 		=> 'PHP fejlrapporteringsniveau',
	'PLEASE_LOGIN' 			=> 'Log ind',
	'PLEASE_SELECT' 		=> 'Vælg venligst',
	'POST' 					=> 'Indlæg',
	'POSTS_PER_PAGE' 		=> 'Indlæg pr. side',
	'POST_FOOTER' 			=> 'Fod (bund) på indlæg',
	'POST_HEADER' 			=> 'Hoved på indlæg',
	'PREVIOUS' 				=> 'Forrige',
	'PREVIOUS_PAGE' 		=> 'Forrige side',
	'PRIVATE' 				=> 'Privat',
	'PRIVATE_VIEWERS' 		=> 'Private besøgende',
	'PROFILES_EDIT' 		=> 'Ændre profil',
	'PUBLIC' 				=> 'Offentlig',
	'PUBL_END_DATE' 		=> 'Slut dato',
	'PUBL_START_DATE' 		=> 'Start dato',
	'RADIO_BUTTON_GROUP' 	=> 'Radio knap gruppe',
	'READ' 					=> 'Læs',
	'READ_MORE' 			=> 'Læs mere',
	'REDIRECT_AFTER' 		=> 'Viderestil efter',
	'REGISTERED' 			=> 'Registeret',
	'REGISTERED_VIEWERS' 	=> 'Registrerede brugere',
	'REGISTERED_CONTENT'	=> 'Dette indlæg er kun for registrerede brugere',
	'RELOAD' 				=> 'Opdater',
	'REMEMBER_ME' 			=> 'Husk mig',
	'RENAME' 				=> 'Omdøb',
	'RENAME_FILES_ON_UPLOAD' => 'Omdøb filer når de bliver oploadet',
	'REQUIRED' 				=> 'Krævet',
	'REQUIREMENT' 			=> 'Krav',
	'RESET' 				=> 'Nulstil',
	'RESIZE' 				=> 'Skift størrelse',
	'RESIZE_IMAGE_TO' 		=> 'Forstør/formindsk billede til',
	'RESTORE' 				=> 'Gendan',
	'RESTORE_DATABASE' 		=> 'Gendan database',
	'RESTORE_MEDIA' 		=> 'Gendan medie-filer',
	'RESULTS' 				=> 'Resultater',
	'RESULTS_FOOTER' 		=> 'Resultatfod (bund)',
	'RESULTS_FOR' 			=> 'Resultater for',
	'RESULTS_HEADER' 		=> 'Resultathoved',
	'RESULTS_LOOP' 			=> 'Resultat liste',
	'RETYPE_NEW_PASSWORD' 	=> 'Gentag nyt adgangskode',
	'RETYPE_PASSWORD' 		=> 'Gentag adgangskode',
	'SAME_WINDOW' 			=> 'Samme vindue',
	'SAVE' 					=> 'Gem',
	'SEARCH' 				=> 'Søg',
	'SEARCH_FOR'  => 'Søg efter',
	'SEARCHING' 			=> 'Søgning',
	'SECTION' 				=> 'Sektion',
	'SECTION_BLOCKS' 		=> 'Sektion blokke',
	'SECTION_ID' => 'Sektion ID',
	'SEC_ANCHOR' 			=> 'Sektions hoved tekst',
	'SELECT_BOX' 			=> 'Vælg boks',
	'SEND_DETAILS' 			=> 'Send detaljer',
	'SEPARATE' 				=> 'Separat',
	'SEPERATOR' 			=> 'Separator',
	'SERVER_EMAIL' 			=> 'Server Email',
	'SERVER_OPERATING_SYSTEM' => 'Server Operativsystem',
	'SESSION_IDENTIFIER' 	=> 'Session ID',
	'SETTINGS' 				=> 'Indstillinger',
	'SHORT' 				=> 'Kort',
	'SHORT_TEXT' 			=> 'Kort tekst',
	'SHOW' 					=> 'Vis',
	'SHOW_ADVANCED' 		=> 'Vis avancerede muligheder',
	'SIGNUP' 				=> 'Bliv medlem',
	'SIZE' 					=> 'Størrelse',
	'SMART_LOGIN' 			=> 'Smart login',
	'START' 				=> 'Start',
	'START_PUBLISHING' 		=> 'Start offentliggørelse',
	'SUBJECT' 				=> 'Emne',
	'SUBMISSIONS' 			=> 'Indsendte bidrag',
	'SUBMISSIONS_STORED_IN_DATABASE' => 'Indsendte bidrag gemt i databasen',
	'SUBMISSION_ID' 		=> 'Tilføjelses ID',
	'SUBMITTED' 			=> 'Tilføjet',
	'SUCCESS' 				=> 'Succes',
	'SYSTEM_DEFAULT' 		=> 'System standard',
	'SYSTEM_PERMISSIONS' 	=> 'System tillqadelser',
	'TABLE_PREFIX' 			=> 'Tabel præfiks',
	'TARGET' 				=> 'Mål',
	'TARGET_FOLDER' 		=> 'Mål folder',
	'TEMPLATE' 				=> 'Template',
	'TEMPLATE_PERMISSIONS' 	=> 'Template tilladelser',
	'TEXT' 					=> 'Tekst',
	'TEXTAREA' 				=> 'Tekst område',
	'TEXTFIELD' 			=> 'Tekstfelt',
	'THEME' 				=> 'Admin theme',
	'TIME' 					=> 'Tid',
	'TIMEZONE' 				=> 'Tidszone',
	'TIME_FORMAT' 			=> 'Tids format',
	'TIME_LIMIT' 			=> 'Max tid til uddrag per modul',
	'TITLE' 				=> 'Titel',
	'TO' 					=> 'Til',
	'TOP_FRAME' 			=> 'Top Frame',
	'TRASH_EMPTIED' 		=> 'Skraldespanden er tom',
	'TXT_EDIT_CSS_FILE' 	=> 'Rediger CSS definitionerne i tekst feltet nedenunder.',
	'TYPE' 					=> 'Type',
	'UNINSTALL' 			=> 'Afinstaller',
	'UNKNOWN' 				=> 'Ukendt',
	'UNLIMITED' 			=> 'U-begrænset',
	'UNZIP_FILE' 			=> 'Opload og udpak et Zip-arkiv',
	'UP' 					=> 'Op',
	'UPGRADE' 				=> 'Opgrader',
	'UPLOAD_FILES' 			=> 'Opload file(r)',
	'URL' 					=> 'URL',
	'USER' 					=> 'Bruger',
	'USERNAME' 				=> 'Brugernavn',
	'USERS_ACTIVE' 			=> 'Brugeren er aktiveret',
	'USERS_CAN_SELFDELETE' 	=> 'Brugeren kan slette sig selv',
	'USERS_CHANGE_SETTINGS' => 'Brugren kan ændre sine egen indstillinger',
	'USERS_DELETED' 		=> 'Brugeren er markeret til sletning',
	'USERS_FLAGS' 			=> 'Brugermærker',
	'USERS_PROFILE_ALLOWED' => 'Brugeren kan lave en udvidet profil',
	'VERIFICATION' 			=> 'Indtast Verifikation',
	'VERSION' 				=> 'Version',
	'VIEW' 					=> 'Se',
	'VIEW_DELETED_PAGES' 	=> 'Se slettede sider',
	'VIEW_DETAILS' 			=> 'Se detaljer',
	'VISIBILITY' 			=> 'Synlighed',
	'MAILER_DEFAULT_SENDER_MAIL' => 'Standard fra-adresse',
	'MAILER_DEFAULT_SENDER_NAME' => 'Standard afsendernavn',
	'MAILER_DEFAULT_SETTINGS_NOTICE' => 'Angiv standard "FRA"-adresse og "AFSENDER"-navn nedenfor. Det anbefales at angive FRA-adresse som: <strong>admin@dit-domæne.dk</strong>. Nogle udbydere (f.eks. <em>mail.com</em>) kan afvise emails med en FRA-adresse som <em>navn@mail.com</em>, hvis de er sendt via en anden udbyder, for at undgå spam.<br /><br />Standardværdierne benyttes kun, hvis ingen andre værdier angives i WebsiteBaker. Hvis din server understøtter <acronym title="Simple mail transfer protocol">SMTP</acronym>, kan du vælge at bruge denne til udgående emails.',
	'MAILER_FUNCTION' 	=> 'Mailprogram',
	'MAILER_NOTICE' 		=> '<strong>SMTP mail-program indstillinger:</strong><br />Indstillingerne nedenfor er kun nødvendige, hvis du vil sende emails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. Hvis du ikke kender adressen på din SMTP-vært eller de krævede indstillinger, så hold dig til standardprogrammet, PHP MAIL.',
	'MAILER_PHP' 			=> 'PHP MAIL',
	'MAILER_SEND_TESTMAIL' => 'Send test mail',
	'MAILER_SMTP' 		=> 'SMTP',
	'MAILER_SMTP_AUTH' 	=> 'SMTP godkendelse',
	'MAILER_SMTP_AUTH_NOTICE' => '- skal kun anvendes hvis din SMTP-vært bruger adgangskontrol',
	'MAILER_SMTP_HOST' 	=> 'SMTP Host',
	'MAILER_SMTP_PASSWORD' => 'SMTP adgangskode',
	'MAILER_SMTP_USERNAME' => 'SMTP brugernavn',
  'MAILER_TESTMAIL_FAILED' => 'Test-mailsen blev ikke sendt, tjek venligst dine indstillinger!',
	'MAILER_TESTMAIL_SUCCESS' => 'Test-mailsen blev sendt med succes, tjek venligst din indbakke.',
  'MAILER_TESTMAIL_TEXT' => 'Dette er en obligatorisk test-mail: php mailer fungerer',
	'WEBSITE' 				=> 'Websted',
	'WEBSITE_DESCRIPTION' 	=> 'Webstedets beskrivelse',
	'WEBSITE_FOOTER' 		=> 'Webstedets bund (footer)',
	'WEBSITE_HEADER' 		=> 'Webstedets hoved',
	'WEBSITE_KEYWORDS' 		=> 'Webstedets nøgleord',
	'WEBSITE_TITLE' 		=> 'Webstedets navn',
	'WELCOME_BACK' 			=> 'Velkommen tilbage',
	'WIDTH' 				=> 'Bredde',
	'WINDOW' 				=> 'Vindue',
	'WINDOWS' 				=> 'Vinduer',
	'WORLD_WRITEABLE_FILE_PERMISSIONS' => 'Globale fil tilladelser',
	'WRITE' 				=> 'Skriv',
	'WYSIWYG_EDITOR' 		=> 'WYSIWYG Editor',
	'WYSIWYG_STYLE'	 		=> 'WYSIWYG Style',
	'YES' 					=> 'Ja',
	'BASICS'	=> array(
		'day'		=> "dag",		# day, singular
		'day_pl'	=> "dage",		# day, plural
		'hour'		=> "time", 		# hour, singular
		'hour_pl'	=> "timer",		# hour, plural
		'minute'	=> "minut",	# minute, singular
		'minute_pl'	=> "minuter",	# minute, plural
	)
); // $TEXT

$HEADING = array(
	'ADDON_PRECHECK_FAILED' => 'Tilføjelsens krav er ikke opfyldt',
	'ADD_CHILD_PAGE' 		=> 'Tilføj underside',
	'ADD_GROUP' 			=> 'Tilføje gruppe',
	'ADD_GROUPS' 			=> 'Tilføj grupper',
	'ADD_HEADING' 			=> 'Tilføj overskrift',
	'ADD_PAGE' 				=> 'Tilføje side',
	'ADD_USER' 				=> 'Tilføj bruger',
	'ADMINISTRATION_TOOLS' 	=> 'Administrator værktøjer',
	'BROWSE_MEDIA' 			=> 'Gennemse mediafolderen',
	'CREATE_FOLDER' 		=> 'Lav ny mappe',
	'DEFAULT_SETTINGS' 		=> 'Standard indstillinger',
	'DELETED_PAGES' 		=> 'Slettede sider',
	'FILESYSTEM_SETTINGS' 	=> 'Filsystemets indstillinger',
	'GENERAL_SETTINGS' 		=> 'Generelle indstilinger',
	'INSTALL_LANGUAGE' 		=> 'Installer sprogpakke',
	'INSTALL_MODULE' 		=> 'Installer modul',
	'INSTALL_TEMPLATE' 		=> 'Installer template',
	'INVOKE_MODULE_FILES' 	=> 'Håndter modulfiler manuelt',
	'LANGUAGE_DETAILS' 		=> 'Sprog detaljer',
	'MANAGE_SECTIONS' 		=> 'Administrer sektioner',
	'MODIFY_ADVANCED_PAGE_SETTINGS' => 'Rediger avancerede side indstillinger',
	'MODIFY_DELETE_GROUP' 	=> 'Ændre/slet gruppe',
	'MODIFY_DELETE_PAGE' 	=> 'Ændre/slette side',
	'MODIFY_DELETE_USER' 	=> 'Ændre/slette bruger',
	'MODIFY_GROUP' 			=> 'Rediger gruppe',
	'MODIFY_GROUPS' 		=> 'Rediger grupper',
	'MODIFY_INTRO_PAGE' 	=> 'Rediger intro side',
	'MODIFY_PAGE' 			=> 'Rediger sider',
	'MODIFY_PAGE_SETTINGS' 	=> 'Rediger side indstillinger',
	'MODIFY_USER' 			=> 'Rediger bruger',
	'MODULE_DETAILS' 		=> 'Modul detaljer',
	'MY_EMAIL' 				=> 'Min e-mail',
	'MY_PASSWORD' 			=> 'Mit adgangskode',
	'MY_SETTINGS' 			=> 'Mine indstillinger',
	'SEARCH_SETTINGS' 		=> 'Søge indstillinger',
	'SEARCH_PAGE' 			=> 'Søge side',
	'SECURITY_SETTINGS'		=> 'Sikkerheds indstillinger',
	'SERVER_SETTINGS' 		=> 'Server indstllinger',
	'TEMPLATE_DETAILS' 		=> 'Template detaljer',
	'UNINSTALL_LANGUAGE' 	=> 'Afinstaller sprog',
	'UNINSTALL_MODULE' 		=> 'Afinstaller modul',
	'UNINSTALL_TEMPLATE' 	=> 'Afinstaller template',
	'UPGRADE_LANGUAGE' 		=> 'Opgrader sprogfiler',
	'UPLOAD_FILES' 			=> 'Upload fil(er)',
	'VISIBILITY' 			=> 'Synlighed',
	'MAILER_SETTINGS' 	=> 'Mail indstillinger'
); // $HEADING

$MESSAGE = array(
	'ADDON_ERROR_RELOAD' 	=> 'Fejl under opdatering af tilføjelse.',
	'ADDON_GROUPS_MARKALL' => 'Marker / afmarker alle',
	'ADDON_LANGUAGES_RELOADED' => 'Sprog opdateret uden problemer',
	'ADDON_MANUAL_FTP_LANGUAGE' => '<strong>BEMÆRK!</strong> Af sikkerhedsgrunde bør sprogfiler kun indlæses i folderen /languages/ med FTP, og opgraderingsfunktionen bør bruges til registrering/opdatering.',
	'ADDON_MANUAL_FTP_WARNING' => 'Advarsel: Eksisterende moduler i databasen vil gå tabt. ',
	'ADDON_MANUAL_INSTALLATION' => 'Når moduler overføres med FTP (anbefales ikke), udføres installatonsfunktionerne  <tt>installer</tt>, <tt>opgrader</tt> eller <tt>afinstaller</tt> ikke automatisk. Modulerne vil måske ikke fungere korrekt eller bliver rigtigt afinstallerett.<br /><br />Du kan nedenfor udføre modulfunktionerne manuelt for moduler, der er overført via FTP.',
	'ADDON_MANUAL_INSTALLATION_WARNING' => 'Advarsel: Eksisterende moduler i databasen vil gå tabt. Brug kun denne funktion, hvis du oplever problemer med moduler, der er overført med FTP.',
	'ADDON_MANUAL_RELOAD_WARNING' => 'Advarsel: Eksisterende moduler i databasen vil gå tabt. ',
	'ADDON_MODULES_RELOADED' => 'Moduler er genindlæst',
	'ADDON_PRECHECK_FAILED' => 'Installation af tilføjelsen mislykkedes. Dit system opfylder ikke kravene til denne tilføjelse. For at få denne tilføjelse til at virke i dit system, skal du rette de forhold, der opregnes nedenfor.',
	'ADDON_RELOAD' 			=> 'Opdater databasen med information fra tilføjelsesfiler (f.eks. efter FTP-overførsel).',
	'ADDON_TEMPLATES_RELOADED' => 'Templates blev opdateret',
	'ADMIN_INSUFFICIENT_PRIVELLIGES' => 'Du har ikke den nødvendige adgang til dette område',
	'FORGOT_PASS_ALREADY_RESET' => 'Adgangskoden kan desværre kun nulstilles en gang pr time.',
	'FORGOT_PASS_CANNOT_EMAIL' => 'Kunne ikke sende din adgangskode til din email-adresse - Kontakt en systemadministrator',
	'FORGOT_PASS_EMAIL_NOT_FOUND' => 'Mail-adressen du brugte findes desværre ikek i vores database.',
	'FORGOT_PASS_NO_DATA' 	=> 'Indtast venligt din mail-adresse nedenunder',
	'FORGOT_PASS_PASSWORD_RESET' => 'Dit brugernavn og adgangskode, er blevet sendt til din mail-adresse',
	'FORGOT_CONFIRM_OLD' 	=> 'Sorry, you are too late, link is disabled',	
	'FORGOT_PASS_PASSWORD_CONFIRM' => 'You want to reset your password. Please use this link to enter your new password.<br /> If you do not want to reset your password please ignore this mail.<br /><br /><a href="%s">%s</a><br /><br /> Thanks',	
	'FORGOT_PASSWORD_SUCCESS' 	=> 'Hello %s,<br /><br />just for your information:<br /><br />your password has been successfully modified.',	
	'FRONTEND_SORRY_NO_ACTIVE_SECTIONS' => 'Desværre, der er ikke noget aktivt indhold',
	'FRONTEND_SORRY_NO_VIEWING_PERMISSIONS' => 'Du har ikke retigheder til at se denne side',
	'GENERIC_ALREADY_INSTALLED' => 'Allerede installeret',
	'GENERIC_BAD_PERMISSIONS' => 'Der kunne desværre ikke skrives til målmappen',
	'GENERIC_CANNOT_UNINSTALL' => 'Kan ikke afinstallere',
	'GENERIC_CANNOT_UNINSTALL_IN_USE' => 'Kan ikke afinstallere: den valgte fil er i brug',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL' => '<br /><br />{{type}} <b>{{type_name}}</b> kunne ikke afinstalleres, da den stadig er i brug på {{pages}}.<br /><br />',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL_PAGES' => 'denne side;disse sider',
	'GENERIC_CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE' => 'Kan ikke afinstalle denne template <b>{{name}}</b>, da den er i brug!',
	'GENERIC_CANNOT_UNZIP' 	=> 'Kan ikke udpakke filen',
	'GENERIC_CANNOT_UPLOAD' => 'Kan ikke oploade filen',
	'GENERIC_COMPARE' 		=> ' succesfuldt',
	'GENERIC_ERROR_OPENING_FILE' => 'Fejl ved åbning af filen.',
	'GENERIC_FAILED_COMPARE' => 'mislykkedes',
	'GENERIC_FILE_TYPE' 	=> 'Bemærk venligst, at filen du oploader skal være af følgende format:',
	'GENERIC_FILE_TYPES' 	=> 'Bemærk venligst, at filen du oploader skal være i en af følgende formater:',
	'GENERIC_FILL_IN_ALL' 	=> 'Gå venligst tilbage, og udfyld alle felter',
	'GENERIC_INSTALLED' 	=> 'Installeret med succes',
	'GENERIC_INVALID' 		=> 'Der er fejl i filen du oploadede',
	'GENERIC_INVALID_ADDON_FILE' => 'Der er fejl i LEPTON installations filen. Tjek venligst *.zip arkivet.',
	'GENERIC_INVALID_LANGUAGE_FILE' => 'LEPTON sprogfilen er fejlbehæftet. Tjek venligst tekst filen.',
	'GENERIC_IN_USE' 		=> ' men bruges i ',
	'GENERIC_MODULE_VERSION_ERROR' => 'Modulet er ikke installeret korrekt!',
	'GENERIC_NOT_COMPARE' 	=> ' ikke muligt',
	'GENERIC_NOT_INSTALLED' => 'Ikke installeret',
	'GENERIC_NOT_UPGRADED' 	=> 'Opgradering ikke muligt.',
	'GENERIC_PLEASE_BE_PATIENT' => 'Vær venligst tålmodig, det kan tage et stykke tid.',
	'GENERIC_PLEASE_CHECK_BACK_SOON' => 'Kig venligst snart ind igen.',
	'GENERIC_SECURITY_ACCESS'	=> 'Sikkerheds brud!! Adgang nægtet',
	'GENERIC_SECURITY_OFFENSE'	=> 'Sikkerheds brud!! Blev nægtet at gemme data!!',
	'GENERIC_UNINSTALLED' 	=> 'Afinstalleret med succes',
	'GENERIC_UPGRADED' 		=> 'Opgraderet med succes',
	'GENERIC_VERSION_COMPARE' => 'Versions sammenligning',
	'GENERIC_VERSION_GT' 	=> 'Opgradering nødvendigt!',
	'GENERIC_VERSION_LT' 	=> 'Nedgrader',
	'GENERIC_WEBSITE_UNDER_CONSTRUCTION' => 'Websiden er under opbygning',
	'GROUPS_ADDED' 			=> 'Gruppe tilføjet med succes',
	'GROUPS_CONFIRM_DELETE' => 'Er du sikker på du vil slette den valgte gruppe, (og alle brugere som er tilknyttet gruppen)?',
	'GROUPS_DELETED' => 'Gruppe slettet med succes',
	'GROUPS_GROUP_NAME_BLANK' => 'Gruppe navn er blank',
	'GROUPS_GROUP_NAME_EXISTS' => 'Gruppe navnet eksisterer allerede',
	'GROUPS_NO_GROUPS_FOUND' => 'Der blev ikke fundet nogen grupper',
	'GROUPS_SAVED' 			=> 'Gruppen er gemt med succes',
	'LANG_MISSING_PARTS_NOTICE' => 'Installation af sprog fejlede, en eller flere, af følgende variabler mangler:<br />language_code<br />language_name<br />language_version<br />language_license',
	'LOGIN_AUTHENTICATION_FAILED' => 'Brugernavn eller adgangskode er ikke korrekt',
	'LOGIN_BOTH_BLANK' 		=> 'Indtast venligst dit brugernavn og adgangskode nedenfor',
	'LOGIN_PASSWORD_BLANK' 	=> 'Indtast adgangskode',
	'LOGIN_PASSWORD_TOO_LONG' => 'Den indstastede adgangskode er for langt',
	'LOGIN_PASSWORD_TOO_SHORT' => 'Den indstastede adgangskode er for kort',
	'LOGIN_USERNAME_BLANK' 	=> 'Indtast venligst et brugernavn',
	'LOGIN_USERNAME_TOO_LONG' => 'Brugernavnet er for langt',
	'LOGIN_USERNAME_TOO_SHORT' => 'Brugernavnet er for kort',
	'MEDIA_BLANK_EXTENSION' => 'Du har ikke angivet en filtype',
	'MEDIA_BLANK_NAME' 		=> 'Du har ikke angivet et nyt navn',
	'MEDIA_CANNOT_DELETE_DIR' => 'Kan ikke slette den ønskede mappe',
	'MEDIA_CANNOT_DELETE_FILE' => 'Kan ikke slette den ønskede fil',
	'MEDIA_CANNOT_RENAME' 	=> 'Omdøbning fejlede',
	'MEDIA_CONFIRM_DELETE' 	=> 'Er du sikker på du ønsker at slette den følgende fil eller mappe?',
	'MEDIA_CONFIRM_DELETE_FILE'	=> 'Er du sikker på du vil slette filen {name}?',
	'MEDIA_CONFIRM_DELETE_DIR'	=> 'Er du sikker på du vil slette folderen {name}?',
	'MEDIA_DELETED_DIR' 	=> 'Folderen slettet med succes',
	'MEDIA_DELETED_FILE' 	=> 'Filen er slettet succes',
	'MEDIA_DIR_ACCESS_DENIED' => 'Den specificerede mappe eksisterer ikke, eller adgang ikke tilladt.',
	'MEDIA_DIR_DOES_NOT_EXIST' => 'Mappen eksisterer ikke',
	'MEDIA_DIR_DOT_DOT_SLASH' => 'Kan ikke inkludere ../ i mappens navn',
	'MEDIA_DIR_EXISTS' 		=> 'Der findes allerede en mappe det navn',
	'MEDIA_DIR_MADE' 		=> 'Mappe oprettet med succes',
	'MEDIA_DIR_NOT_MADE' 	=> 'Oprettelse af mappe mislykkedes',
	'MEDIA_FILE_EXISTS' 	=> 'Der findes allerede en fil med det navn',
	'MEDIA_FILE_NOT_FOUND' 	=> 'Filen blev ikke fundet',
	'MEDIA_NAME_DOT_DOT_SLASH' => 'Kan ikke inkludere ../ i navnet',
	'MEDIA_NAME_INDEX_PHP' 	=> 'Kan ikke bruge index.php som navn',
	'MEDIA_NONE_FOUND' 		=> 'Denne mappe er tom',
	'MEDIA_RENAMED' 		=> 'Omdøbt med succes',
	'MEDIA_SINGLE_UPLOADED' => ' filen blev oploadet med succes',
	'MEDIA_TARGET_DOT_DOT_SLASH' => 'Kan ikke have ../ i placeringen af mappen',
	'MEDIA_UPLOADED' 		=> ' filerne blev oploadet med succes',
	'MOD_MISSING_PARTS_NOTICE' => 'Installationen af modulet "%s" fejlede, en eller flere, af følgende variabler mangler:<br />module_directory<br />module_name<br />module_version<br />module_author<br />module_license<br />module_guid<br />module_function',
	'MOD_FORM_EXCESS_SUBMISSIONS' => 'Beklager! Denne formular er blevet afsendt for mange gange indenfor den sidste time, og du vil derfor blive afvist - Prøv igen om en times tid!',
	'MOD_FORM_INCORRECT_CAPTCHA' => 'Verifikationstallene (også kendt som Captcha) som du tastede er ikke korrekte. Hvis du har problemer med at læse Captha tallene, så kontakt venligst sidens Administrator på denne mailadresse: <a href="mailto:'.SERVER_EMAIL.'">'.SERVER_EMAIL.'</a>',
	'MOD_FORM_REQUIRED_FIELDS' => 'Du skal udfylde følgende felter:',
	'PAGES_ADDED' 			=> 'Siden er tilføjet med succes',
	'PAGES_ADDED_HEADING' 	=> 'Overskrift til side tilføjet',
	'PAGES_BLANK_MENU_TITLE' => 'Indtast venligst en overskrift til menuen',
	'PAGES_BLANK_PAGE_TITLE' => 'Indtast venligst en overskrift til siden',
	'PAGES_CANNOT_CREATE_ACCESS_FILE' => 'Fejl under oprettelse af adgangsfil i "pages" mappen, (utilstrækkelige rettigheder)',
	'PAGES_CANNOT_DELETE_ACCESS_FILE' => 'Fejl under sletning af adgangsfil i "pages" mappen, (utilstrækkelige rettigheder)',
	'PAGES_CANNOT_REORDER' 	=> 'Fejl ved omorganisering af siden',
	'PAGES_DELETED' 		=> 'Siden blev slettet',
	'PAGES_DELETE_CONFIRM' 	=> 'Er du sikker på du vil slette den vaægte side «%s» (og alle dens undersider)',
	'PAGES_INSUFFICIENT_PERMISSIONS' => 'Du har ikke rettigheder til at slette denne side',
	'PAGES_DIRECTORY_EMPTY' 	=> 'Please delete directory manually!',
	'PAGES_DIRECTORY_NEW' 		=> 'Please create directory manually!',
	'PAGES_LAST_MODIFIED' 	=> 'Sidste ændring af',
	'PAGES_NOT_FOUND' 		=> 'Siden blev ikke fundet',
	'PAGES_NOT_SAVED' 		=> 'Fejl ved forsøg på at gemme siden',
	'PAGES_PAGE_EXISTS' 	=> 'En side med samme eller lignende overskrift eksisterer allerede',
	'PAGES_REORDERED' 		=> 'Siden blev omorganiseret',
	'PAGES_RESTORED' 		=> 'Siden er gendannet',
	'PAGES_RETURN_TO_PAGES' => 'Tilbage til sider',
	'PAGES_SAVED' 			=> 'Siden blev gemt',
	'PAGES_SAVED_SETTINGS' 	=> 'Side indstillingerne blev gemt',
	'PAGES_SECTIONS_PROPERTIES_SAVED' => 'Sektionens egenskaber blev ændret',
	'PREFERENCES_CURRENT_PASSWORD_INCORRECT' => 'Adgangskoden du indtastede er ikke korrekt',
	'PREFERENCES_DETAILS_SAVED' => 'Detaljerne blev gemt',
	'PREFERENCES_EMAIL_UPDATED' => 'E-mailadressen blev opdateret',
	'PREFERENCES_INVALID_CHARS' => 'Du har brugt ugyldige tegn i adgangskoden, gyldige tegn er: a-z\A-Z\0-9\_\-\!\#\*\+',
	'PREFERENCES_PASSWORD_CHANGED' => 'Adgangskoden blev ændret',
	'PREFERENCES_PASSWORD_MATCH' => 'Passwords do not match',	
	'RECORD_MODIFIED_FAILED' => 'Indlægget blev ikke ændret.',
	'RECORD_MODIFIED_SAVED' => 'Indlægget blev opdateret.',
	'RECORD_NEW_FAILED' 	=> 'Der blev ikke tilføjet et nyt indlæg.',
	'RECORD_NEW_SAVED' 		=> 'Der blev tilføjet et nyt indlæg.',
	'SETTINGS_MODE_SWITCH_WARNING' => 'Bemærk venligst: Klikke du på denne knap bliver alle ændringer nulstillet',
	'SETTINGS_SAVED' 		=> 'Indstillingerne blev gemt',
	'SETTINGS_UNABLE_OPEN_CONFIG' => 'Kan ikke åbne konfigurations filen',
	'SETTINGS_UNABLE_WRITE_CONFIG' => 'Kan ikke skrive til konfigurations filen',
	'SETTINGS_WORLD_WRITEABLE_WARNING' => 'Bemærk venligst: Dette anbefales kun i testmiljøer',
	'SIGNUP2_ADMIN_INFO' 	=> '
En ny bruger er registreret.

Brugernavn: {LOGIN_NAME}
BrugerId: {LOGIN_ID}
E-Mail: {LOGIN_EMAIL}
IP-Adressw: {LOGIN_IP}
Registrations dato: {SIGNUP_DATE}
----------------------------------------
Dette er en automatisk meddelelse!

',
	'SIGNUP2_ADMIN_SUBJECT' => 'New user has signed up',
	'SIGNUP2_BODY_CONFIRM' => '
Hello {LOGIN_DISPLAY_NAME},

Signup is now complete.
Your account is active and you can login to \'{LOGIN_WEBSITE_TITLE}\'.

Regards
------------------------------------
This message was system built!

',
	'SIGNUP2_BODY_LOGIN_INFO' => '
Hello {LOGIN_DISPLAY_NAME},

You have registered on \'{LOGIN_WEBSITE_TITLE}\'.

To activate your account please use this link and enter a password.

<a href="{ENTER_PW_LINK}">{ENTER_PW_LINK}</a>

Thank you

Please:
if you have received this message by an error, please delete it immediately!
-------------------------------------
This message was system built!
',
	'SIGNUP2_SUBJECT_LOGIN_INFO' =>	 'Dine LEPTON login detaljer...',
	'SIGNUP_NO_EMAIL' 		=> 'Du skal indtaste en email-adresse',
	'START_CURRENT_USER' 	=> 'Du er logger på som:',
	'START_INSTALL_DIR_EXISTS' => 'ADVARSEL, Installations mappe eksisterer stadig!',
	'START_WELCOME_MESSAGE' => 'Velkommen til LEPTON administration',
	'STATUSFLAG_32'			=> 'Cannot delete User, User got statusflags 32 in table users.',	
	'SYSTEM_FUNCTION_DEPRECATED'=> 'The function <b>%s</b> is deprecated, use the function <b>%s</b> instead!',
	'SYSTEM_FUNCTION_NO_LONGER_SUPPORTED' => 'Den funktion <b>%s</b> er ud-dateret og bliver ikke længere supporteret!',
	'SYSTEM_SETTING_NO_LONGER_SUPPORTED' => 'Den indstilling <b>%s</b> bliver ikke længere supporteret, og vil blive ignoreret!',
	'TEMPLATES_CHANGE_TEMPLATE_NOTICE' => 'Bemærk venligst: for at ændre din skabelon, skal du ind i indstillinger',
	'TEMPLATES_MISSING_PARTS_NOTICE' => 'Indstllation af skabelonen fejlede, da en (eller flere) af følgende variabler mangler:<br />template_directory<br />template_name<br />template_version<br />template_author<br />template_license<br />template_function ("theme" eller "template")',
	'USERS_ADDED' 			=> 'Brugeren blev tiløjet',
	'USERS_CANT_SELFDELETE' => 'Funktionen fejlede, du kan ikke slette dig selv!',
	'USERS_CHANGING_PASSWORD' => 'Bemærk venligst: du behøver kun at indtaste i felterne ovenfor, hvis du ønsker at ændre brugerens adgangskode',
	'USERS_CONFIRM_DELETE' 	=> 'Er du sikker på du vil slette den valgte bruger?',
	'USERS_DELETED' 		=> 'Brugeren blev slettet',
	'USERS_EMAIL_TAKEN' 	=> 'Email adressen du indtastede er allerede i brug',
	'USERS_INVALID_EMAIL' 	=> 'Du indtastede en ugyldig emailadresse',
	'USERS_NAME_INVALID_CHARS' => 'Der er indtastet ugyldige tegn i brugernavnet',
	'USERS_NO_GROUP' 		=> 'Der er ikke valgt en gruppe',
	'USERS_PASSWORD_MISMATCH' => 'Adgangskoderne du indtastede er ikke ens',
	'USERS_PASSWORD_TOO_SHORT' => 'Din adgangskode er for kort',
	'USERS_SAVED' 			=> 'Brugeren blev gemt',
	'USERS_USERNAME_TAKEN' 	=> 'Brugernavnet er allerede i brug',
	'USERS_USERNAME_TOO_SHORT' => 'Brugernavnet du indtastede er for kort'
); // $MESSAGE

$OVERVIEW = array(
	'ADMINTOOLS' 			=> 'Tilgå dine LEPTON administrations værktøjer...',
	'GROUPS' 				=> 'Administrer bruger-grupperne og deres adgangs tilladelser...',
	'HELP' 					=> 'Har du et spørgsmæl? Find dit svar...',
	'LANGUAGES' 			=> 'Administrer sprogfiler...',
	'MEDIA' 				=> 'Administrer filerne i Media mappen...',
	'MODULES' 				=> 'Modul administration...',
	'PAGES' 				=> 'Administrer siderne pæ hjemmesiden...',
	'PREFERENCES' 			=> 'Ændre dine  préferencer som f.eks email-addresse, adganskode, osv... ',
	'SETTINGS' 				=> 'Ændre indstillingerne for hjemmesiden...',
	'START' 				=> 'Administrations overblik',
	'TEMPLATES' 			=> 'Ændre din hjemmesides udseende med nye skabeloner...',
	'USERS' 				=> 'Administrer brugere som kan logge ind på hjemmesiden...',
	'VIEW' 					=> 'Gennemse hjemmesiden i et nyt vindue...'
);


?>
