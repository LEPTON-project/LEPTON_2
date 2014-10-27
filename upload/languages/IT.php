<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 *
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Mte90 www.mte90.net
 * @copyright       2004-2010 Website Baker Project
 * @copyright       2010-2014 LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 * @version         $Id: IT.php 2011-11
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
$language_code = 'IT';
$language_name = 'Italiano';
$language_version = '1.0';
$language_platform = '1.0.x';
$language_author = 'Mte90';
$language_license = 'GNU General Public License';
$language_guid = '5b92610a-2f4f-456c-b3db-28edf506a52d';

$MENU = array(
	'ACCESS' 				=> 'Accesso',
	'ADDON' 				=> 'Add-on',
	'ADDONS' 				=> 'Add-ons',
	'ADMINTOOLS' 				=> 'Strumenti Amministrazione',
	'BREADCRUMB' 				=> 'Sei qui: ',
	'FORGOT' 				=> 'Ottieni Dettagli Login',
	'GROUP' 				=> 'Gruppo',
	'GROUPS' 				=> 'Gruppi',
	'HELP' 					=> 'Aiuto',
	'LANGUAGES' 				=> 'Lingua',
	'LOGIN' 				=> 'Login',
	'LOGOUT' 				=> 'Log-out',
	'MEDIA' 				=> 'Media',
	'MODULES' 				=> 'Moduli',
	'PAGES' 				=> 'Pagine',
	'PREFERENCES' 				=> 'Preferenze',
	'SETTINGS' 				=> 'Configurazione',
	'START' 				=> 'Inizia',
	'TEMPLATES' 				=> 'Template',
	'USERS' 				=> 'Utenti',
	'VIEW' 					=> 'Vai al sito',
	'SERVICE'				=> 'Servizio'
); // $MENU

$TEXT = array(
	'ACCOUNT_SIGNUP' 			=> 'Registrazione',
	'ACTION_NOT_SUPPORTED'			=> 'Azione non supportata',
	'ACTIONS' 				=> 'Azioni',
	'ACTIVE' 				=> 'Attivo',
	'ADD' 					=> 'Aggiungi',
	'ADDON' 				=> 'Add-On',
	'ADD_SECTION' 				=> 'Aggiungi Sezione',
	'ADMIN' 				=> 'Admin',
	'ADMINISTRATION' 			=> 'Amministrazione',
	'ADMINISTRATION_TOOL' 			=> 'Strumenti Amministrazione',
	'ADMINISTRATOR' 			=> 'Amministratore',
	'ADMINISTRATORS' 			=> 'Amministratori',
	'ADVANCED' 				=> 'Avanzate',
	'ALLOWED_FILETYPES_ON_UPLOAD'   	=> 'Tipi di file permessi per l\'upload',
	'ALLOWED_VIEWERS' 			=> 'Visione Permessa',
	'ALLOW_MULTIPLE_SELECTIONS' 		=> 'Permetti Seleziona Multipla',
	'ALL_WORDS' 				=> 'Tutte Le Parole',
	'ANCHOR' 				=> 'Ancora',
	'ANONYMOUS' 				=> 'Anonimo',
	'ANY_WORDS' 				=> 'Qualsiasi Parola',
	'APP_NAME' 				=> 'Nome Applicazione',
	'ARE_YOU_SURE' 				=> 'Sei sicuro?',
	'AUTHOR' 				=> 'Autore',
	'BACK' 					=> 'Indietro',
	'BACKUP' 				=> 'Backup',
	'BACKUP_ALL_TABLES' 			=> 'Backup tutte le tabelle del database',
	'BACKUP_DATABASE' 			=> 'Backup Database',
	'BACKUP_MEDIA' 				=> 'Backup Media',
	'BACKUP_WB_SPECIFIC' 			=> 'Backup solo tabelle specifiche WB',
	'BASIC' 				=> 'Basic',
	'BLOCK' 				=> 'Blocca',
	'BACKEND_TITLE'	=>	'Backendtitle',
	'CALENDAR' 				=> 'Calendario',
	'CANCEL' 				=> 'Cancella',
	'CAN_DELETE_HIMSELF' 			=> 'Puoi cancellare',
	'CAPTCHA_VERIFICATION' 			=> 'Verifica Captcha',
	'CAP_EDIT_CSS' 				=> 'Modifica CSS',
	'CHANGE' 				=> 'Modifica',
	'CHANGES' 				=> 'Modifiche',
	'CHANGE_SETTINGS' 			=> 'Modifica Configurazione',
	'CHARSET' 				=> 'Charset',
	'CHECKBOX_GROUP' 			=> 'Checkbox Group',
	'CLOSE' 				=> 'Chiudi',
	'CODE' 					=> 'Codice',
	'CODE_SNIPPET' 				=> 'Frammento di Codice',
	'COLLAPSE' 				=> 'Unisci',
	'COMMENT' 				=> 'Commento',
	'COMMENTING' 				=> 'Commentare',
	'COMMENTS' 				=> 'Commenti',
	'CREATE_FOLDER' 			=> 'Crea Cartella',
	'CURRENT' 				=> 'Corrente',
	'CURRENT_FOLDER' 			=> 'Cartella Corrente',
	'CURRENT_PAGE' 				=> 'Pagina Corrente',
	'CURRENT_PASSWORD' 			=> 'Password Corrente',
	'CUSTOM' 				=> 'Personalizzato',
	'DATABASE' 				=> 'Database',
	'DATE' 					=> 'Data',
	'DATE_FORMAT' 				=> 'Formato data',
	'DEFAULT' 				=> 'Predefinito',
	'DEFAULT_CHARSET' 			=> 'Charset Predefinito',
	'DEFAULT_TEXT' 				=> 'Testo Predefinito',
	'DELETE' 				=> 'Elimina',
	'DELETED' 				=> 'Eliminato',
	'DELETE_DATE' 				=> 'Elimina data',
	'DELETE_ZIP' 				=> 'Elimina archivio zip dopo la decompressione',
	'DESCRIPTION' 				=> 'Descrizione',
	'DESIGNED_FOR' 				=> 'Progettato Per',
	'DIRECTORIES' 				=> 'Directory',
	'DIRECTORY_MODE' 			=> 'Modalit&agrave; Directory',
	'DISABLED' 				=> 'Disabilitato',
	'DISPLAY_NAME' 				=> 'Nome Visualizzato',
	'EMAIL' 				=> 'Email',
	'EMAIL_ADDRESS' 			=> 'Indirizzo Email',
	'EMPTY_TRASH' 				=> 'Svuota Cestino',
	'ENABLE_JAVASCRIPT'			=> "Abilita JavaScript per usare questo form.",
	'ENABLED' 				=> 'Abilitato',
	'END' 					=> 'Fine',
	'ERROR' 				=> 'Errore',
	'EXACT_MATCH' 				=> 'Corrispondenza Esatta',
	'EXECUTE' 				=> 'Esegui',
	'EXPAND' 				=> 'Espandi',
	'EXTENSION' 				=> 'Estensione',
	'FIELD' 				=> 'Campo',
	'FILE' 					=> 'File',
	'FILES' 				=> 'File',
	'FILESYSTEM_PERMISSIONS' 		=> 'Permissi Filesystem',
	'FILE_MODE' 				=> 'Modalit&agrave; File',
	'FINISH_PUBLISHING' 			=> 'Fine Pubblicazione',
	'FOLDER' 				=> 'Cartella',
	'FOLDERS' 				=> 'cartelle',
	'FOOTER' 				=> 'Pi&egrave; di Pagina',
	'FORGOTTEN_DETAILS' 			=> 'Hai dimenticato i tuoi dati?',
	'FORGOT_DETAILS' 			=> 'Dimenticati i Dettagli?',
	'FROM' 					=> 'Da',
	'FRONTEND' 				=> 'Front-end',
	'FULL_NAME' 				=> 'Nome Completo',
	'FUNCTION' 				=> 'Funzione',
	'GROUP' 				=> 'Gruppo',
	'HEADER' 				=> 'Testata',
	'HEADING' 				=> 'Titolo',
	'HEADING_CSS_FILE' 			=> 'File Modulo Attuale: ',
	'HEIGHT' 				=> 'Altezza',
	'HELP_LEPTOKEN_LIFETIME'		=> 'in secondi, 0 significa nessuna protezione CSRF!',
	'HELP_MAX_ATTEMPTS'			=> 'Quando si raggiunge questo numero, nessun\'altro tentativo di accesso &egrave; possibile per questa sessione.',
	'HIDDEN' 				=> 'Nascosto',
	'HIDE' 					=> 'Nascondere',
	'HIDE_ADVANCED' 			=> 'Nascondi Opzioni Avanzate',
	'HOME' 					=> 'Home',
	'HOMEPAGE_REDIRECTION' 			=> 'Reindirizza Homepage',
	'HOME_FOLDER' 				=> 'Cartella Personale',
	'HOME_FOLDERS' 				=> 'Cartelle Personale',
	'HOST' 					=> 'Host',
	'ICON' 					=> 'Icona',
	'IMAGE' 				=> 'Immagine',
	'INLINE' 				=> 'In-linea',
	'INSTALL' 				=> 'Installare',
	'INSTALLATION' 				=> 'Installazione',
	'INSTALLATION_PATH' 			=> 'Percorso Installazione',
	'INSTALLATION_URL' 			=> 'URL Installazione',
	'INSTALLED' 				=> 'installato',
	'INTRO' 				=> 'Intro',
	'INTRO_PAGE' 				=> 'Pagina d\'Intro',
	'INVALID_SIGNS' 			=> 'Deve iniziare con una lettera oa simboli non validi',
	'KEYWORDS' 				=> 'parole Chiave',
	'LANGUAGE' 				=> 'Lingua',
	'LAST_UPDATED_BY' 			=> 'Ultimo Aggiornamento di',
	'LENGTH' 				=> 'Lunghezza',
	'LEPTOKEN_LIFETIME'			=> 'Durata Leptoken',
	'LEVEL' 				=> 'Livello',
	'LIBRARY'				=> 'Libreria',
	'LICENSE'				=> 'Licenza',
	'LINK' 					=> 'Link',
	'LINUX_UNIX_BASED' 			=> 'Linux/Unix based',
	'LIST_OPTIONS' 				=> 'Lista Opzioni',
	'LOGGED_IN' 				=> 'Loggato',
	'LOGIN' 				=> 'Login',
	'LONG' 					=> 'Lunghezza',
	'LONG_TEXT' 				=> 'Lunghezza Testo',
	'LOOP' 					=> 'Loop',
	'MAIN' 					=> 'Principale',
	'MANAGE' 				=> 'Gestisci',
	'MANAGE_GROUPS' 			=> 'Gestisci Gruppo',
	'MANAGE_USERS' 				=> 'Gestisci Utente',
	'MATCH' 				=> 'Corrispondenza',
	'MATCHING' 				=> 'Corrispondente',
	'MAX_ATTEMPTS'				=> 'Tentativi di accesso sbagliati ammessi',
	'MAX_EXCERPT' 				=> 'Linee massime estratte',
	'MAX_SUBMISSIONS_PER_HOUR'		=> 'Max. Post Per Ora',
	'MEDIA_DIRECTORY' 			=> 'Cartella Media',
	'MENU' 					=> 'Men&ugrave;',
	'MENU_ICON_0' 				=> 'Men&ugrave;-Icon normal',
	'MENU_ICON_1' 				=> 'Men&ugrave;-Icon hover',
	'MENU_TITLE' 				=> 'Titolo Menu',
	'MESSAGE' 				=> 'Messaggio',
	'MODIFY' 				=> 'Modifica',
	'MODIFY_CONTENT' 			=> 'Modifica Contenuto',
	'MODIFY_SETTINGS' 			=> 'Modifica Configurazione',
	'MODULE_ORDER' 				=> 'Ordine Moduli per la ricerca',
	'MODULE_PERMISSIONS' 			=> 'Permessi Moduli',
	'MORE' 					=> 'Altro',
	'MOVE_DOWN' 				=> 'Sposta in Basso',
	'MOVE_UP' 				=> 'Sposta in Alto',
	'MULTIPLE_MENUS' 			=> 'Men&ugrave; Multiplo',
	'MULTISELECT' 				=> 'Selezione Multipla',
	'NAME' 					=> 'Nome',
	'NEED_CURRENT_PASSWORD' 		=> 'Conferma con la password corrente',
	'NEED_PASSWORD_TO_CONFIRM' 		=> 'Conferma i cambiamenti con la password corrente',
	'NEED_TO_LOGIN' 			=> 'Devi loggarti?',
	'NEW_PASSWORD' 				=> 'Nuova Password',
	'NEW_USER_HINT'				=> 'Lunghezza minima per il nome utente: %d caratteri, Lunghezza minima per la Password: %d caratteri!',
	'NEW_WINDOW' 				=> 'Nuova Finestra',
	'NEXT' 					=> 'Successivo',
	'NEXT_PAGE' 				=> 'Prossima Pagina',
	'NO' 					=> 'No',
	'NO_LEPTON_ADDON'  			=> 'Questo addon non pu&ograve; essere usato su LEPTON',
	'NONE' 					=> 'Niente',
	'NONE_FOUND' 				=> 'Trovato Niente',
	'NOT_FOUND' 				=> 'Non Trovato',
	'NOT_INSTALLED' 			=> 'non installato',
	'NO_RESULTS' 				=> 'Nessun Risultato',
	'OF' 					=> 'Di',
	'ON' 					=> 'Su',
	'OPEN' 					=> 'Apri',
	'OPTION' 				=> 'Opzioni',
	'OTHERS' 				=> 'Altri',
	'OUT_OF' 				=> 'Per',
	'OVERWRITE_EXISTING' 			=> 'Sovrascrivere esistenti',
	'PAGE' 					=> 'Pagina',
	'PAGES_DIRECTORY' 			=> 'Cartella Pagine',
	'PAGES_PERMISSION' 			=> 'Permessi Pagine',
	'PAGES_PERMISSIONS' 			=> 'Permessi Pagine',
	'PAGE_EXTENSION' 			=> 'Estensione Pagina',
	'PAGE_ICON' 				=> 'Immagine Pagina',
	'PAGE_ID'       			=> 'ID Pagina',
	'PAGE_LANGUAGES' 			=> 'Lingua Pagina',
	'PAGE_LEVEL_LIMIT' 			=> 'Limite Livello Pagina',
	'PAGE_SPACER' 				=> 'Spazio Pagina',
	'PAGE_TITLE' 				=> 'Titolo Pagina',
	'PAGE_TRASH' 				=> 'Pagina Cestino',
	'PARENT' 				=> 'Superiore',
	'PASSWORD' 				=> 'Password',
	'PATH' 					=> 'Percorso',
	'PHP_ERROR_LEVEL' 			=> 'PHP Error Reporting Level',
	'PLEASE_LOGIN' 				=> 'Effettua il login',
	'PLEASE_SELECT' 			=> 'Seleziona',
	'POST' 					=> 'Post',
	'POSTS_PER_PAGE' 			=> 'Post per Pagina',
	'POST_FOOTER' 				=> 'Pi&egrave; di Pagina Post',
	'POST_HEADER' 				=> 'Testata Post',
	'PREVIOUS' 				=> 'Precedente',
	'PREVIOUS_PAGE' 			=> 'Pagina precedente',
	'PRIVATE' 				=> 'Privato',
	'PRIVATE_VIEWERS' 			=> 'Visione Privata',
	'PROFILES_EDIT' 			=> 'Cambia il profilo',
	'PUBLIC' 				=> 'Pubblico',
	'PUBL_END_DATE' 			=> 'Data finale',
	'PUBL_START_DATE' 			=> 'Data d\'Inizio',
	'RADIO_BUTTON_GROUP' 			=> 'Radio Button Group',
	'READ' 					=> 'Lettura',
	'READ_MORE' 				=> 'Leggi Tutto',
	'REDIRECT_AFTER' 			=> 'Reindirizza dopo',
	'REGISTERED' 				=> 'Registrato',
	'REGISTERED_VIEWERS' 			=> 'Visione utenti Registrati',
	'REGISTERED_CONTENT'			=> 'Solo gli utenti registrati hanno accesso a questo contenuto',
	'RELOAD' 				=> 'Ricarica',
	'REMEMBER_ME' 				=> 'Ricordami',
	'RENAME' 				=> 'Rinomina',
	'RENAME_FILES_ON_UPLOAD' 		=> 'Rinomina File Al Caricamento',
	'REQUIRED' 				=> 'Richiesto',
	'REQUIREMENT' 				=> 'Requisiti',
	'RESET' 				=> 'Resetta',
	'RESIZE' 				=> 'Ridimensiona',
	'RESIZE_IMAGE_TO' 			=> 'Ridimensiona Immagina In',
	'RESTORE' 				=> 'Ripristina',
	'RESTORE_DATABASE' 			=> 'Ripristina Database',
	'RESTORE_MEDIA' 			=> 'Ripristina Media',
	'RESULTS' 				=> 'Risultati',
	'RESULTS_FOOTER' 			=> 'Pi&egrave; di Pagina Risultati',
	'RESULTS_FOR' 				=> 'Per i risultati',
	'RESULTS_HEADER' 			=> 'Testata Risultati',
	'RESULTS_LOOP' 				=> 'Loop Risultati',
	'RETYPE_NEW_PASSWORD' 			=> 'Digita la Nuova Password',
	'RETYPE_PASSWORD' 			=> 'Digita la Password',
	'SAME_WINDOW' 				=> 'Stessa Finestra',
	'SAVE' 					=> 'Salva',
	'SEARCH' 				=> 'Cerca',
	'SEARCH_FOR'  				=> 'Cerca per',
	'SEARCHING' 				=> 'In ricerca',
	'SECTION' 				=> 'Sezione',
	'SECTION_BLOCKS' 			=> 'Blocco Sezione',
	'SECTION_ID' 				=> 'ID Sezione',
	'SEC_ANCHOR' 				=> 'Sezione Testo Ancora',
	'SELECT_BOX' 				=> 'Seleziona Box',
	'SEND_DETAILS' 				=> 'Invia Dettagli',
	'SEPARATE' 				=> 'Separa',
	'SEPERATOR' 				=> 'Separatore',
	'SERVER_EMAIL' 				=> 'Server Email',
	'SERVER_OPERATING_SYSTEM' 		=> 'Sistema Operativo Server',
	'SESSION_IDENTIFIER' 			=> 'Identificatore Sessione',
	'SETTINGS' 				=> 'Impostazioni',
	'SHORT' 				=> 'Abbreviato',
	'SHORT_TEXT' 				=> 'Testo Abbreviato',
	'SHOW' 					=> 'Mostra',
	'SHOW_ADVANCED' 			=> 'Mostra opzione Avanzate',
	'SIGNUP' 				=> 'Registrati',
	'SIZE' 					=> 'Dimensione',
	'SMART_LOGIN' 				=> 'Login Veloce',
	'START' 				=> 'Inizia',
	'START_PUBLISHING' 			=> 'Inizia Pubblicazione',
	'SUBJECT' 				=> 'Oggetto',
	'SUBMISSIONS' 				=> 'Contributi',
	'SUBMISSIONS_STORED_IN_DATABASE' 	=> 'Contributi Salvati nel Database',
	'SUBMISSION_ID' 			=> 'ID Contributi',
	'SUBMITTED' 				=> 'Contribuito',
	'SUCCESS' 				=> 'Riuscito',
	'SYSTEM_DEFAULT' 			=> 'Sistema Predefinito',
	'SYSTEM_PERMISSIONS' 			=> 'Permessi Sistema',
	'TABLE_PREFIX' 				=> 'Prefissi Tabella',
	'TARGET' 				=> 'Destinazione',
	'TARGET_FOLDER' 			=> 'Cartella di destinazione',
	'TEMPLATE' 				=> 'Template',
	'TEMPLATE_PERMISSIONS' 			=> 'Permessi Template',
	'TEXT' 					=> 'Testo',
	'TEXTAREA' 				=> 'Area di testo',
	'TEXTFIELD' 				=> 'Campo di testo',
	'THEME' 				=> 'Backend-Theme',
	'TIME' 					=> 'Tempo',
	'TIMEZONE' 				=> 'Timezone',
	'TIME_FORMAT' 				=> 'Formato Tempo',
	'TIME_LIMIT' 				=> 'Max time to gather excerpts per module',
	'TITLE' 				=> 'Titolo',
	'TO' 					=> 'A',
	'TOP_FRAME' 				=> 'Top Frame',
	'TRASH_EMPTIED' 			=> 'Cestino Vuoto',
	'TXT_EDIT_CSS_FILE' 			=> 'Modifica le definizioni CSS nella textarea sottostante.',
	'TYPE' 					=> 'Tipo',
	'UNINSTALL' 				=> 'Disistalla',
	'UNKNOWN' 				=> 'Sconosciuto',
	'UNLIMITED' 				=> 'Illimitato',
	'UNZIP_FILE' 				=> 'Carica e scompatta l\'archivio zip.',
	'UP' 					=> 'Su',
	'UPGRADE' 				=> 'Aggiornamento',
	'UPLOAD_FILES' 				=> 'Carica File',
	'URL' 					=> 'URL',
	'USER' 					=> 'Utente',
	'USERNAME' 				=> 'Username',
	'USERS_ACTIVE' 				=> 'L\'utente &egrave; gi&agrave; attivato',
	'USERS_CAN_SELFDELETE' 			=> 'L\'utente pu&ograve; autoeliminarsi',
	'USERS_CHANGE_SETTINGS' 		=> 'L\'utente pu&ograve; cambiare le sue impostazioni',
	'USERS_DELETED' 			=> 'L\'utente &egrave; stato eliminato',
	'USERS_FLAGS' 				=> 'User-Flags',
	'USERS_PROFILE_ALLOWED' 		=> 'L\'utente pu&ograve; estendere il proprio profilo',
	'VERIFICATION' 				=> 'Verifica',
	'VERSION' 				=> 'Versione',
	'VIEW' 					=> 'Vedi',
	'VIEW_DELETED_PAGES' 			=> 'Vedi Pagine Eliminate',
	'VIEW_DETAILS' 				=> 'Vedi Dettagli',
	'VISIBILITY' 				=> 'Visibilit&agrave;',
	'WBMAILER_DEFAULT_SENDER_MAIL'		=> 'Email Predefinita',
	'WBMAILER_DEFAULT_SENDER_NAME'		=> 'Nome Mittente Predefinita',
	'WBMAILER_DEFAULT_SETTINGS_NOTICE' 	=> 'Specifica un indirizzo "FROM" e "SENDER". &egrave; preferibile usare un indirizzo FROM come: <strong>admin@yourdomain.com</strong>. Alcuni provider email (e.g. <em>mail.com</em>) possono rifiutare l\'indirizzo FROM: come <em>name@mail.com</em> inviato tramite un relay di spam.<br /><br />Il valore predefinito &egrave; usato solo se non ci sono altri valori specificati di LEPTON. Se il tuo server supporta <acronym title="Simple mail transfer protocol">SMTP</acronym>, puoi non usare questa opzione.',
	'WBMAILER_FUNCTION' 			=> 'Mail Routine',
	'WBMAILER_NOTICE' 			=> '<strong>SMTP Mailer Settings:</strong><br />la configurazione sottostante &egrave; richiesta se vuoi inviare via <acronym title="Simple mail transfer protocol">SMTP</acronym>. se conosci il tuo host SMTP o non sei sicuro dele impostazioni correttelascia la mail routine predefinita: PHP MAIL.',
	'WBMAILER_PHP' 				=> 'PHP MAIL',
	'WBMAILER_SEND_TESTMAIL'		=> 'Invia eMail di test',
	'WBMAILER_SMTP' 			=> 'SMTP',
	'WBMAILER_SMTP_AUTH' 			=> 'Autenticazione SMTP',
	'WBMAILER_SMTP_AUTH_NOTICE' 		=> 'Attiva solo se li tuo host richiede authentificazione',
	'WBMAILER_SMTP_HOST' 			=> 'SMTP Host',
	'WBMAILER_SMTP_PASSWORD' 		=> 'SMTP Password',
	'WBMAILER_SMTP_USERNAME' 		=> 'SMTP Username',
	'WBMAILER_TESTMAIL_FAILED' 		=> 'L\'eMail di test non pu&ograve; essere inviata! Verifica le tue impostazioni!',
	'WBMAILER_TESTMAIL_SUCCESS' 		=> 'L\'eMail di test &egrave; stata inviata con successo. Controlal la tua email.',
	'WBMAILER_TESTMAIL_TEXT' 		=> 'Questo &egrave; il testo dell\'email di prova : php mailer is working',
	'WEBSITE' 				=> 'Sito Web',
	'WEBSITE_DESCRIPTION' 			=> 'Descrizione Sito Web',
	'WEBSITE_FOOTER' 			=> 'Pi&egrave; di Pagina Sito Web',
	'WEBSITE_HEADER' 			=> 'Testata Sito Web',
	'WEBSITE_KEYWORDS' 			=> 'Parole Chiave Sito Web',
	'WEBSITE_TITLE' 			=> 'Titolo Sito Web',
	'WELCOME_BACK' 				=> 'Bentornato',
	'WIDTH' 				=> 'Lunghezza',
	'WINDOW' 				=> 'Finestra',
	'WINDOWS' 				=> 'Finestre',
	'WORLD_WRITEABLE_FILE_PERMISSIONS' 	=> 'Permessi file scrivibili da tutti',
	'WRITE' 				=> 'Scrivibile',
	'WYSIWYG_EDITOR' 			=> 'WYSIWYG Editor',
	'WYSIWYG_STYLE'	 			=> 'WYSIWYG Style',
	'YES' 					=> 'Si',
	'BASICS'	=> array(
		'day'		=> "giorno",	# day, singular
		'day_pl'	=> "giorni",	# day, plural
		'hour'		=> "ora", 	# hour, singular
		'hour_pl'	=> "ore",	# hour, plural
		'minute'	=> "minuto",	# minute, singular
		'minute_pl'	=> "minuti",	# minute, plural
	)
); // $TEXT

$HEADING = array(
	'ADDON_PRECHECK_FAILED' 	=> 'Requisiti Add-On non completi',
	'ADD_CHILD_PAGE' 		=> 'Aggiungi pagine figlio',
	'ADD_GROUP' 			=> 'Aggiungi gruppo',
	'ADD_GROUPS' 			=> 'Aggiungi gruppi',
	'ADD_HEADING' 			=> 'Aggiungi testata',
	'ADD_PAGE' 			=> 'Aggiungi Pagina',
	'ADD_USER' 			=> 'Aggiungi Utente',
	'ADMINISTRATION_TOOLS' 		=> 'Strumenti Amministrazione',
	'BROWSE_MEDIA' 			=> 'Sfoglia Media',
	'CREATE_FOLDER' 		=> 'Crea Cartella',
	'DEFAULT_SETTINGS' 		=> 'Impostazioni Predefinite',
	'DELETED_PAGES' 		=> 'Elimina Pagine',
	'FILESYSTEM_SETTINGS' 		=> 'Impostazioni Filesystem',
	'GENERAL_SETTINGS' 		=> 'Impostazioni Generali',
	'INSTALL_LANGUAGE' 		=> 'Installa Lingua',
	'INSTALL_MODULE' 		=> 'Installa Modulo',
	'INSTALL_TEMPLATE' 		=> 'Installa Template',
	'INVOKE_MODULE_FILES' 		=> 'Eseguire manualmente il file di modulo',
	'LANGUAGE_DETAILS' 		=> 'Dettagli Lingua',
	'MANAGE_SECTIONS' 		=> 'Gestisci Sezioni',
	'MODIFY_ADVANCED_PAGE_SETTINGS' => 'Modifica Impostazioni Avanzate Pagina',
	'MODIFY_DELETE_GROUP' 		=> 'Modifica/Elimina Gruppo',
	'MODIFY_DELETE_PAGE' 		=> 'Modifica/Elimina Pagina',
	'MODIFY_DELETE_USER' 		=> 'Modifica/Elimina Utente',
	'MODIFY_GROUP' 			=> 'Modifica Gruppo',
	'MODIFY_GROUPS' 		=> 'Modifica Gruppi',
	'MODIFY_INTRO_PAGE' 		=> 'Modifica Pagina Intro',
	'MODIFY_PAGE' 			=> 'Modifica Pagina',
	'MODIFY_PAGE_SETTINGS' 		=> 'Modifica Impostazioni Pagina',
	'MODIFY_USER' 			=> 'Modifica Utente',
	'MODULE_DETAILS' 		=> 'Dettagli Modulo',
	'MY_EMAIL' 			=> 'La Mia Email',
	'MY_PASSWORD' 			=> 'La Mia Password',
	'MY_SETTINGS' 			=> 'Le mie Impostazioni',
	'SEARCH_SETTINGS' 		=> 'Impostazioni Ricerca',
	'SEARCH_PAGE' 			=> 'Search Page',
	'SECURITY_SETTINGS'		=> 'Impostazioni Sicurezza',
	'SERVER_SETTINGS' 		=> 'Impostazioni Server',
	'TEMPLATE_DETAILS' 		=> 'Dettagli Template',
	'UNINSTALL_LANGUAGE' 		=> 'Disistalla Lingua',
	'UNINSTALL_MODULE' 		=> 'Disistalla Modulo',
	'UNINSTALL_TEMPLATE' 		=> 'Disistalla Template',
	'UPGRADE_LANGUAGE' 		=> 'Registra/Aggiorna Lingua',
	'UPLOAD_FILES' 			=> 'Carica File',
	'VISIBILITY' 			=> 'Visibilit&agrave;',
	'WBMAILER_SETTINGS' 		=> 'Impostazioni Mailer'
); // $HEADING

$MESSAGE = array(
	'ADDON_ERROR_RELOAD' 			=> 'Errore mentre si aggiornava le informazioni dell\'Add-On.',
	'ADDON_GROUPS_MARKALL' 			=> 'Seleziona / Deseleziona tutti',
	'ADDON_LANGUAGES_RELOADED'		=> 'Lingue ricaricate correttamente',
	'ADDON_MANUAL_FTP_LANGUAGE' 		=> '<strong>ATTENZIONE!</strong> Per motivi di sicurezza aggiorna i file di lingua nella cartella languages/ solo via FTP e usa la funziona di Aggiornamento per registrare o aggiornare.',
	'ADDON_MANUAL_FTP_WARNING' 		=> 'Avvertimento: I dati del database del modulo esistenti saranno persi. ',
	'ADDON_MANUAL_INSTALLATION' 		=> 'Quando i moduli sono caricati via FTP (non consigliato), l\'installazione del modulo funziona con <tt>install</tt>, <tt>upgrade</tt> o <tt>uninstall</tt> non &egrave; stato eseguito automaticamente. Questi moduli potrebbero non funzionare correttamente.<br /><br />Puoi eseguire le funzione dei moduli manualmente via FTP.',
	'ADDON_MANUAL_INSTALLATION_WARNING' 	=> 'Attenzione: I dati del modulo nel database potrebbero essere persi. Usa questa opzione se hai avuto problemi con i moduli caricati via FTP.',
	'ADDON_MANUAL_RELOAD_WARNING' 		=> 'Attenzione: I dati del modulo nel database potrebbero essere persi.',
	'ADDON_MODULES_RELOADED' 		=> 'Moduli ricaricati con successo',
	'ADDON_PRECHECK_FAILED'			=> 'Installazione Add-on fallita. Questo sistema non ha tutti i requisiti per questo Add-on. Per usare questo Add-on sul tuo sistema, correggi le seguenti segnalazioni.',
	'ADDON_RELOAD' 				=> 'Aggiorna il database con le informazioni dei file dell\'Add-on (es. dopo caricamento via FTP).',
	'ADDON_TEMPLATES_RELOADED' 		=> 'Template caricati con successo',
	'ADMIN_INSUFFICIENT_PRIVELLIGES' 	=> 'Privilegi insufficenti per stare qui',
	'FORGOT_PASS_ALREADY_RESET' 		=> 'La password non pu&ograve; essere resettata pi&ugrave; di una volta per ora.',
	'FORGOT_PASS_CANNOT_EMAIL' 		=> 'Impossibile recuperare la password dall\'e-mail, si prega di contattare l\'amministratore di sistema',
	'FORGOT_PASS_EMAIL_NOT_FOUND' 		=> 'L\'email che hai inserito non &egrave; stata trovata nel database',
	'FORGOT_PASS_NO_DATA' 			=> 'Inserisci il tuo indirizzo e-mail',
	'FORGOT_PASS_PASSWORD_RESET' 		=> 'Il nome utente e la password &egrave; stato inviato via email',
	'FRONTEND_SORRY_NO_ACTIVE_SECTIONS'	=> 'Nessun contenuto da mostrare',
	'FRONTEND_SORRY_NO_VIEWING_PERMISSIONS' => 'Nessun permesso per vedere questa pagina',
	'GENERIC_ALREADY_INSTALLED' 		=> 'Gi&agrave; installato',
	'GENERIC_BAD_PERMISSIONS' 		=> 'Impossibile scrivere nella cartella',
	'GENERIC_CANNOT_UNINSTALL' 		=> 'Non &egrave; stato possibile disistallare',
	'GENERIC_CANNOT_UNINSTALL_IN_USE' 	=> 'Impossibile disinstallare: il file selezionato &egrave; in uso',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL' 	=> '<br /><br />{{type}} <b>{{type_name}}</b> non &egrave; stato disistallato, perch&egrave; &egrave; usato nelle pagine {{pages}}.<br /><br />',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'	=> 'questa pagina;queste pagine',
	'GENERIC_CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE' 	=> 'Non &egrave; possibile disinstallare il template <b>{{name}}</b>, perch&egrave; questo &egrave; il template predefinito!',
	'GENERIC_CANNOT_UNZIP' 			=> 'Impossibile scompattare il file',
	'GENERIC_CANNOT_UPLOAD' 		=> 'Impossibile caricare i file',
	'GENERIC_COMPARE' 			=> ' con successo',
	'GENERIC_ERROR_OPENING_FILE' 		=> 'Errore nell\'aprire il file.',
	'GENERIC_FAILED_COMPARE' 		=> ' fallito',
	'GENERIC_FILE_TYPE' 			=> 'Ricordati che il file pu&ograve; essere caricato solo nei seguenti formati:',
	'GENERIC_FILE_TYPES' 			=> 'Ricordati che i file possono essere caricati solo nei seguenti formati:',
	'GENERIC_FILL_IN_ALL' 			=> 'Torna indietro e compila tutti i campi',
	'GENERIC_INSTALLED' 			=> 'Installato con successo',
	'GENERIC_INVALID' 			=> 'Il file che hai caricato non &egrave; valido',
	'GENERIC_INVALID_ADDON_FILE' 		=> 'Installazione di LEPTON non valida. Carica il formato *.zip.',
	'GENERIC_INVALID_LANGUAGE_FILE' 	=> 'File di lingua LEPTON non valido. Verifica il file di testo.',
	'GENERIC_IN_USE' 			=> ' pu&ograve; essere usato in ',
	'GENERIC_MODULE_VERSION_ERROR' 		=> 'Il modulo non &egrave; installato correttamente!',
	'GENERIC_NOT_COMPARE' 			=> ' forse non',
	'GENERIC_NOT_INSTALLED' 		=> 'Non installato',
	'GENERIC_NOT_UPGRADED' 			=> 'Aggiornamento non possibile',
	'GENERIC_PLEASE_BE_PATIENT' 		=> 'Questa operazione potrebbe richiede un\'p&ograve; di tempo.',
	'GENERIC_PLEASE_CHECK_BACK_SOON'	=> 'Riprova pi&ugrave; avanti...',
	'GENERIC_SECURITY_ACCESS'		=> 'Sicurezza!! Accesso negato',
	'GENERIC_SECURITY_OFFENSE'		=> 'Sicurezza!! l\'archivazione dei dati &egrave; stata rifiutata!!',
	'GENERIC_UNINSTALLED' 			=> 'Disistallato correttamente',
	'GENERIC_UPGRADED' 			=> 'Aggiornato correttamente',
	'GENERIC_VERSION_COMPARE' 		=> 'Verifica versione',
	'GENERIC_VERSION_GT' 			=> 'Aggiornamento necessario!',
	'GENERIC_VERSION_LT' 			=> 'Downgrade',
	'GENERIC_WEBSITE_UNDER_CONSTRUCTION' 	=> 'Sito web in costruzione',
	'GROUPS_ADDED' 				=> 'Gruppo aggiunto con successo',
	'GROUPS_CONFIRM_DELETE' 		=> 'Se sicuro di voler eliminare il gruppo selezionato (e tutti gli utenti che ne fanno parte)?',
	'GROUPS_DELETED' 			=> 'Group eliminato',
	'GROUPS_GROUP_NAME_BLANK' 		=> 'Nome del gruppo vuoto',
	'GROUPS_GROUP_NAME_EXISTS' 		=> 'GNome del gruppo gi&agrave; esistente',
	'GROUPS_NO_GROUPS_FOUND' 		=> 'Nessun gruppo trovato',
	'GROUPS_SAVED' 				=> 'Gruppo salvato con successo',
	'LANG_MISSING_PARTS_NOTICE' 		=> 'Installazione lingua fallita, una (o pi&ugrave;) delle variabile seguenti manca:<br />language_code<br />language_name<br />language_version<br />language_license',
	'LOGIN_AUTHENTICATION_FAILED' 		=> 'Nome utente o password non corrente',
	'LOGIN_BOTH_BLANK' 			=> 'Inserisci nome utente o password',
	'LOGIN_PASSWORD_BLANK' 			=> 'Inserisci la password',
	'LOGIN_PASSWORD_TOO_LONG' 		=> 'La password inserita troppo lunga',
	'LOGIN_PASSWORD_TOO_SHORT' 		=> 'La password inserita &egrave; troppo corta',
	'LOGIN_USERNAME_BLANK' 			=> 'Inserisci nome utente',
	'LOGIN_USERNAME_TOO_LONG' 		=> 'Nome utente inserito troppo lungo',
	'LOGIN_USERNAME_TOO_SHORT' 		=> 'Nome utente inserito troppo corto',
	'MEDIA_BLANK_EXTENSION' 		=> 'Non hai inserito una estensione al file',
	'MEDIA_BLANK_NAME' 			=> 'Non hai inserito un nuovo nome',
	'MEDIA_CANNOT_DELETE_DIR' 		=> 'Impossibile eliminare la cartella selezionata',
	'MEDIA_CANNOT_DELETE_FILE'		=> 'Impossibile eliminare il file selezionata',
	'MEDIA_CANNOT_RENAME' 			=> 'Rinomazione senza successo',
	'MEDIA_CONFIRM_DELETE' 			=> 'Sei sicuro di voler eliminare i seguenti file o cartelle?',
	'MEDIA_CONFIRM_DELETE_FILE'		=> 'Sei sicuro di di voler eliminare il file {name}?',
	'MEDIA_CONFIRM_DELETE_DIR'		=> 'Sei sicuro di voler eliminare la cartella {name}?',
	'MEDIA_DELETED_DIR' 			=> 'Cartella eliminata con successo',
	'MEDIA_DELETED_FILE' 			=> 'File eliminato con successo',
	'MEDIA_DIR_ACCESS_DENIED' 		=> 'La cartella specificata non esiste o non &egrave; permesso.',
	'MEDIA_DIR_DOES_NOT_EXIST' 		=> 'La cartella non esiste',
	'MEDIA_DIR_DOT_DOT_SLASH'		=> 'Non puoi includere ../ nel nome della cartella',
	'MEDIA_DIR_EXISTS' 			=> 'Una cartella con questo nome esiste gi&agrave;',
	'MEDIA_DIR_MADE' 			=> 'Cartella creata con successo',
	'MEDIA_DIR_NOT_MADE' 			=> 'Impossibile creare la cartella',
	'MEDIA_FILE_EXISTS' 			=> 'Un file con questo nome esiste gi&agrave;',
	'MEDIA_FILE_NOT_FOUND' 			=> 'File non trovato',
	'MEDIA_NAME_DOT_DOT_SLASH' 		=> 'Non puoi includere ../ nel nome del file',
	'MEDIA_NAME_INDEX_PHP' 			=> 'Non &egrave; possibile usare index.php come nome',
	'MEDIA_NONE_FOUND' 			=> 'Nessun media trovato nella cartella corrente',
	'MEDIA_RENAMED' 			=> 'Rinominazione effettuata',
	'MEDIA_SINGLE_UPLOADED' 		=> ' il file &egrave; stato caricato con successo',
	'MEDIA_TARGET_DOT_DOT_SLASH' 		=> 'Non puoi includere ../ nella cartella di destinazione',
	'MEDIA_UPLOADED' 			=> ' il file &egrave; stato caricato con successo',
	'MOD_MISSING_PARTS_NOTICE' 		=> 'L\'installazione del modulo "%s" &egrave; fallito, uno (o pi&ugrave;) delle seguenti variabili &egrave; mancante:<br />module_directory<br />module_name<br />module_version<br />module_author<br />module_license<br />module_guid<br />module_function',
	'MOD_FORM_EXCESS_SUBMISSIONS' 		=> 'Spiacente, questo modulo &egrave; stato inviato troppe volte. Riprova nella prossima ora.',
	'MOD_FORM_INCORRECT_CAPTCHA' 		=> 'Il numero di verifica (conosciuto come Captcha) che hai inserito &egrave; sbagliato. Se hai problemi per la lettura del Captcha, invia un email: <a href="mailto:'.SERVER_EMAIL.'">'.SERVER_EMAIL.'</a>',
	'MOD_FORM_REQUIRED_FIELDS' 		=> '&Egrave; necessario compilare i seguenti campi',
	'PAGES_ADDED' 				=> 'Pagina aggiunta con successo',
	'PAGES_ADDED_HEADING' 			=> 'Voce pagina aggiunta con successo',
	'PAGES_BLANK_MENU_TITLE' 		=> 'Inserisci un titolo di menu',
	'PAGES_BLANK_PAGE_TITLE' 		=> 'Inserisci un titolo di pagina',
	'PAGES_CANNOT_CREATE_ACCESS_FILE'	=> 'Errore nella creazione all\'accesso dei file nella cartella (page), (privilegi insufficienti)',
	'PAGES_CANNOT_DELETE_ACCESS_FILE' 	=> 'Errore nell\'eliminazione all\'accesso dei file nella cartella (page), (privilegi insufficienti)',
	'PAGES_CANNOT_REORDER' 			=> 'Errore riordinamento pagine',
	'PAGES_DELETED' 			=> 'Pagina eliminata con successo',
	'PAGES_DELETE_CONFIRM' 			=> 'Sei sicuro di voler eliminare la pagina selezionata &laquo;%s&raquo; (e tutte le sue sotto-pagina)',
	'PAGES_INSUFFICIENT_PERMISSIONS' 	=> 'Non hai i permessi per modificare questa pagina',
	'PAGES_INTRO_EMPTY' 			=> 'Non pu&ograve; essere salvata una pagina intro vuota.',
	'PAGES_INTRO_LINK' 			=> 'Clicca qui per modificare la pagina d\'intro',
	'PAGES_INTRO_NOT_WRITABLE' 		=> 'Non &egrave; possibile scrivere file in page-directory/intro.php, (privilegi insufficienti)',
	'PAGES_INTRO_SAVED' 			=> 'Pagina d\'intro salvata con successo',
	'PAGES_LAST_MODIFIED' 			=> 'Ultima modifica di',
	'PAGES_NOT_FOUND' 			=> 'Pagina non trovata',
	'PAGES_NOT_SAVED' 			=> 'Errore nel salvataggio della pagina',
	'PAGES_PAGE_EXISTS' 			=> 'Una pagina con lo stesso nome o titolo esiste',
	'PAGES_REORDERED' 			=> 'Pagina riordinata con successo',
	'PAGES_RESTORED' 			=> 'Pagina ricaricata con successo',
	'PAGES_RETURN_TO_PAGES' 		=> 'Ritorna alla pagina',
	'PAGES_SAVED' 				=> 'Pagina salvata con successo',
	'PAGES_SAVED_SETTINGS' 			=> 'Impostazione pagina salvata con successo',
	'PAGES_SECTIONS_PROPERTIES_SAVED' 	=> 'Propriet&agrave; della sezione salvate con successo',
	'PREFERENCES_CURRENT_PASSWORD_INCORRECT' => 'La password (corrente) inserita non &egrave; corrente',
	'PREFERENCES_DETAILS_SAVED' 		=> 'Dettagli salvati con successo',
	'PREFERENCES_EMAIL_UPDATED' 		=> 'Email aggiornata con successo',
	'PREFERENCES_INVALID_CHARS' 		=> 'I caratteri della password utilizzati non sono validi, i caratteri validi sono: a-z\A-Z\0-9\_\-\!\#\*\+',
	'PREFERENCES_PASSWORD_CHANGED' 		=> 'Password cambiata con successo',
	'RECORD_MODIFIED_FAILED' 		=> 'Il cambiamento del record &egrave; fallito.',
	'RECORD_MODIFIED_SAVED' 		=> 'Il cambiamento del record &egrave; stato aggiornato con successo.',
	'RECORD_NEW_FAILED' 			=> 'Aggiunta di un nuovo record fallita.',
	'RECORD_NEW_SAVED' 			=> 'Nuovo record aggiungo con successo.',
	'SETTINGS_MODE_SWITCH_WARNING' 		=> 'Nota: Premendo questo pulsante resetti tutti i cambiamenti non salvati',
	'SETTINGS_SAVED' 			=> 'Impostazioni salvate con successo',
	'SETTINGS_UNABLE_OPEN_CONFIG' 		=> 'Impossibile aprire il file di configurazione',
	'SETTINGS_UNABLE_WRITE_CONFIG' 		=> 'Non &egrave; stato possibile scrivere al file di configurazione',
	'SETTINGS_WORLD_WRITEABLE_WARNING' 	=> 'Nota: &egrave; consigliato solo in ambienti di sviluppo',
	'SIGNUP2_ADMIN_INFO' 			=> '
Un nuovo utente &egrave; stato inserito con successo.

Username: {LOGIN_NAME}
UserId: {LOGIN_ID}
E-Mail: {LOGIN_EMAIL}
Indirizzo IP: {LOGIN_IP}
Data della Registrazione: {SIGNUP_DATE}
----------------------------------------
Questo messaggio &grave; generato automaticamente!

',
	'SIGNUP2_BODY_LOGIN_FORGOT' 		=> '
Ciao {LOGIN_DISPLAY_NAME},

Questa e-mail &egrave; stata inviata perch&egrave; la funzione \'recupera password\' &egrave; stata richiesta per il tuo account.

I dettagli del tuo login s&ugrave; \'{LOGIN_WEBSITE_TITLE}\':

Username: {LOGIN_NAME}
Password: {LOGIN_PASSWORD}

la tua password &egrave; stata resettata con quella qui sopra.
Questo significa che la tua password &egrave; cambiata!
Se hai qualche domanda su questi dati del login
&Egrave; necessario contattare gli amministratori del sito di \'{LOGIN_WEBSITE_TITLE}\'.
Ricordati di pulire la cache del browser usando per evitare problemi al login.

Saluti
------------------------------------
Questo messaggio &grave; generato automaticamente!

',
	'SIGNUP2_BODY_LOGIN_INFO' 		=> '
Ciao {LOGIN_DISPLAY_NAME},

Benvenuto su \'{LOGIN_WEBSITE_TITLE}\'.

I dettagli del tuo login s&ugrave; \'{LOGIN_WEBSITE_TITLE}\':
Username: {LOGIN_NAME}
Password: {LOGIN_PASSWORD}

Saluti

Attenzione:
se hai ricevuto questo messaggio per errore, cancellalo!
-------------------------------------
Questo messaggio &grave; generato automaticamente!
',
	'SIGNUP2_SUBJECT_LOGIN_INFO' 		=> 'I dettagli del tuo login LEPTON...',
	'SIGNUP_NO_EMAIL' 			=> 'Devi inserire un indirizzo email',
	'START_CURRENT_USER' 			=> 'Sei loggato come:',
	'START_INSTALL_DIR_EXISTS' 		=> 'Attenzione, la cartella di installazione Esiste ancora!',
	'START_WELCOME_MESSAGE' 		=> 'Benvenuto nell\'amministrazione di LEPTON',
	'SYSTEM_FUNCTION_DEPRECATED'		=> 'La funzione <b>%s</b> &egrave; deprecata, usa invece questa funzione <b>%s</b>!',
	'SYSTEM_FUNCTION_NO_LONGER_SUPPORTED' 	=> 'La funzione <b>%s</b> non &egrave; agggiornata ne pi&ugrave; supportata!',
	'SYSTEM_SETTING_NO_LONGER_SUPPORTED' 	=> 'L\'impostazione <b>%s</b> non &egrave; pi&ugrave; usata ne supportata!',
	'TEMPLATES_CHANGE_TEMPLATE_NOTICE' 	=> 'Nota: per modificare il template &egrave; necessario accedere alla sezione Impostazioni',
	'TEMPLATES_MISSING_PARTS_NOTICE' 	=> 'Installazione template fallita, una (o pi&ugrave;) delle seguenti variabili &egrave; mancante:<br />template_directory<br />template_name<br />template_version<br />template_author<br />template_license<br />template_function ("theme" oder "template")',
	'USERS_ADDED' 				=> 'Utente aggiunto con successo',
	'USERS_CANT_SELFDELETE' 		=> 'Azione rifiutata, Non puoi autocancellarti!',
	'USERS_CHANGING_PASSWORD' 		=> 'Nota: Devi solo inserire i valori nei campi soprastanti se si desidera cambiare la password degli utenti',
	'USERS_CONFIRM_DELETE' 			=> 'Sei sicuro di voler eliminato l\'utente selezionato?',
	'USERS_DELETED' 			=> 'Utente eliminato con successo',
	'USERS_EMAIL_TAKEN' 			=> 'L\'email inserita &egrave; gi&agrave; in uso',
	'USERS_INVALID_EMAIL' 			=> 'L\'email inserita &egrave; sbagliata',
	'USERS_NAME_INVALID_CHARS'		=> 'Caratteri non validi per il nome utente inserito',
	'USERS_NO_GROUP' 			=> 'Nessun gruppo selezionato',
	'USERS_PASSWORD_MISMATCH' 		=> 'La password inserita non corrisponde',
	'USERS_PASSWORD_TOO_SHORT' 		=> 'La password inserita &egrave; troppo corta',
	'USERS_SAVED' 				=> 'Utente salvato con successo',
	'USERS_USERNAME_TAKEN' 			=> 'L\'utente scelto &egrave; gi&agrave; usato',
	'USERS_USERNAME_TOO_SHORT' 		=> 'L\'utente inserito &grave; troppo corto'
); // $MESSAGE

$OVERVIEW = array(
	'ADMINTOOLS' 				=> 'Accedi agli strumenti d\'amministrazione di LEPTON...',
	'GROUPS' 				=> 'Gestisci gruppi utenti e i loro permessi di sistema...',
	'HELP' 					=> 'Hai qualche domanda? Trova la tua domanda...',
	'LANGUAGES' 				=> 'Gestisci le lingue di LEPTON...',
	'MEDIA' 				=> 'Gestisci i file presenti nella cartella media...',
	'MODULES' 				=> 'Gestisci i moduli di LEPTON...',
	'PAGES' 				=> 'Gestisci le pagine del tuo sito...',
	'PREFERENCES' 				=> 'Cambia impostazioni come l\'email, password, ecc... ',
	'SETTINGS' 				=> 'Cambia impostazioni di LEPTON...',
	'START' 				=> 'Panoramica amministrazione',
	'TEMPLATES' 				=> 'Cambia il look and feel del tuo sito web con i template...',
	'USERS' 				=> 'Gestisci gli utenti che possono loggarsi in LEPTON...',
	'VIEW' 					=> 'Visualizza rapidamente e naviga il tuo sito in una nuova finestra...'
);

/*
 * Create the old languages definitions only if specified in settings
 */
if (ENABLE_OLD_LANGUAGE_DEFINITIONS) {
	foreach ($MESSAGE as $key => $value) {
		$x = strpos($key, '_');
		$MESSAGE[substr($key, 0, $x)][substr($key, $x+1)] = $value;
	}
}
?>