<?php
/**
 *
 * This file is part of Estonian phpBB translation.
 * Copyright (c) 2008 - 2020 Estonian translation group.
 *
 *
 * This file is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 *
 * @package      Estonian
 * @author       phpBB Estonia.eu
 * @copyright    phpBB Estonia <Exabot>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administraatorid',
	'ACP_ADMIN_LOGS'			=> 'Administraatori logid',
	'ACP_ADMIN_ROLES'			=> 'Administraatori rollid',
	'ACP_ATTACHMENTS'			=> 'Manused',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Manuse seaded',
	'ACP_AUTH_SETTINGS'			=> 'Autentimine',
	'ACP_AUTOMATION'			=> 'Automatsioon',
	'ACP_AVATAR_SETTINGS'		=> 'Avatari seaded',

	'ACP_BACKUP'				=> 'Varukoopia',
	'ACP_BAN'					=> 'Keelustamine',
	'ACP_BAN_EMAILS'			=> 'Keela e-poste',
	'ACP_BAN_IPS'				=> 'Keela IP aadresse',
	'ACP_BAN_USERNAMES'			=> 'Keela kasutajanimesid',
	'ACP_BBCODES'				=> 'BBkoodid',
	'ACP_BOARD_CONFIGURATION'	=> 'Foorumi konfiguratsioon',
	'ACP_BOARD_FEATURES'		=> 'Foorumi valikud',
	'ACP_BOARD_MANAGEMENT'		=> 'Foorumi haldamine',
	'ACP_BOARD_SETTINGS'		=> 'Foorumi seaded',
	'ACP_BOTS'					=> 'Robotid/Botid',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Kohanda',
	'ACP_CAT_DATABASE'			=> 'Andmebaas',
	'ACP_CAT_DOT_MODS'			=> 'Laiendused',
	'ACP_CAT_FORUMS'			=> 'Foorumid',
	'ACP_CAT_GENERAL'			=> 'Üldine',
	'ACP_CAT_MAINTENANCE'		=> 'Hooldamine',
	'ACP_CAT_PERMISSIONS'		=> 'Õigused',
	'ACP_CAT_POSTING'			=> 'Postitamine',
	'ACP_CAT_STYLES'			=> 'Stiilid',
	'ACP_CAT_SYSTEM'			=> 'Süsteem',
	'ACP_CAT_USERGROUP'			=> 'Kasutajad ja Grupid',
	'ACP_CAT_USERS'				=> 'Kasutajad',
	'ACP_CLIENT_COMMUNICATION'	=> 'Kliendi kommunikatsioon',
	'ACP_COOKIE_SETTINGS'		=> 'Küpsiste seaded',
	'ACP_CONTACT'				=> 'Kontakt lehekülg',
	'ACP_CONTACT_SETTINGS'		=> 'Lehekülje kontakt seaded',
	'ACP_CRITICAL_LOGS'			=> 'Veateadete logi',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Kohandatud profiiliväljad',

	'ACP_DATABASE'				=> 'Andmebaasi haldus',
	'ACP_DISALLOW'				=> 'Keelamine',
	'ACP_DISALLOW_USERNAMES'	=> 'Blokeeri kasutajanimesid',

	'ACP_EMAIL_SETTINGS'		=> 'E-posti seaded',
	'ACP_EXTENSION_GROUPS'		=> 'Halda faililaiendi gruppe',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Laienduste haldus',
	'ACP_EXTENSIONS'			=> 'Halda laiendusi',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Foorumipõhised õigused',
	'ACP_FORUM_LOGS'				=> 'Foorumi logid',
	'ACP_FORUM_MANAGEMENT'			=> 'Foorumi haldamine',
	'ACP_FORUM_MODERATORS'			=> 'Foorumi moderaatorid',
	'ACP_FORUM_PERMISSIONS'			=> 'Foorumi õigused',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopeeri foorumi õigused',
	'ACP_FORUM_ROLES'				=> 'Foorumi rollid',

	'ACP_GENERAL_CONFIGURATION'		=> 'Üldine konfiguratsioon',
	'ACP_GENERAL_TASKS'				=> 'Üldine haldus',
	'ACP_GLOBAL_MODERATORS'			=> 'Üldised moderaatorid',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Üldised õigused',
	'ACP_GROUPS'					=> 'Grupid',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Gruppide õigused foorumites',
	'ACP_GROUPS_MANAGE'				=> 'Halda gruppe',
	'ACP_GROUPS_MANAGEMENT'			=> 'Gruppide haldamine',
	'ACP_GROUPS_PERMISSIONS'		=> 'Gruppide õigused',
	'ACP_GROUPS_POSITION'			=> 'Halda gruppide positsioone',
	'ACP_HELP_PHPBB'				=> 'Aita toetada phpBB\'d',

	'ACP_ICONS'					=> 'Teemaikoonid',
	'ACP_ICONS_SMILIES'			=> 'Teemaikoonid/emotikonid',
	'ACP_INACTIVE_USERS'		=> 'Mitteaktiivsed kasutajad',
	'ACP_INDEX'					=> 'AJP esileht',

	'ACP_JABBER_SETTINGS'		=> 'Jabberi seaded',
	
	'ACP_LANGUAGE'				=> 'Keelefailide haldamine',
	'ACP_LANGUAGE_PACKS'		=> 'Keelefailid',
	'ACP_LOAD_SETTINGS'			=> 'Laadimise seaded',
	'ACP_LOGGING'				=> 'Logimine',

	'ACP_MAIN'					=> 'AJP esileht',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Halda manuseid',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Siin saad näha ja kustutada kõiki kasutajate poolt lisatuid manuseid oma foorumi postitustes ja privaatsõnumites.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Halda failitüüpe',
	'ACP_MANAGE_FORUMS'			=> 'Halda foorumeid',
	'ACP_MANAGE_RANKS'			=> 'Halda kasutajakirjeldusi',
	'ACP_MANAGE_REASONS'		=> 'Halda raporteerimise/keelamise põhjuseid',
	'ACP_MANAGE_USERS'			=> 'Halda kasutajaid',
	'ACP_MASS_EMAIL'			=> 'Masskiri',
	'ACP_MESSAGES'				=> 'Sõnumid',
	'ACP_MESSAGE_SETTINGS'		=> 'Privaatsõnumite seaded',
	'ACP_MODULE_MANAGEMENT'		=> 'Moodulite haldus',
	'ACP_MOD_LOGS'				=> 'Moderaatorite logi',
	'ACP_MOD_ROLES'				=> 'Moderaatorite rollid',

	'ACP_NO_ITEMS'				=> 'Hetkel puuduvad.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Üksikud manused',

	'ACP_PERMISSIONS'			=> 'Õigused',
	'ACP_PERMISSION_MASKS'		=> 'Õiguste maskid',
	'ACP_PERMISSION_ROLES'		=> 'Õiguste rollid',
	'ACP_PERMISSION_TRACE'		=> 'Õiguste jälitus',
	'ACP_PHP_INFO'				=> 'PHP informatsioon',
	'ACP_POST_SETTINGS'			=> 'Postitamise seaded',
	'ACP_PRUNE_FORUMS'			=> 'Kärbi foorumeid',
	'ACP_PRUNE_USERS'			=> 'Kärbi kasutajaid',
	'ACP_PRUNING'				=> 'Kärpimine',

	'ACP_QUICK_ACCESS'			=> 'Kiirvalikud',

	'ACP_RANKS'					=> 'Kasutajakirjeldused',
	'ACP_REASONS'				=> 'Raporteerimise, ning keelamise põhjused',
	'ACP_REGISTER_SETTINGS'		=> 'Kasutaja registreerimise seaded',

	'ACP_RESTORE'				=> 'Taasta',

	'ACP_FEED'					=> 'Voo haldus',
	'ACP_FEED_SETTINGS'			=> 'Voo seaded',

	'ACP_SEARCH'				=> 'Otsingu konfiguratsioon',
	'ACP_SEARCH_INDEX'			=> 'Otsingu indeks',
	'ACP_SEARCH_SETTINGS'		=> 'Otsingu seaded',

	'ACP_SECURITY_SETTINGS'		=> 'Turvaseaded',
	'ACP_SERVER_CONFIGURATION'	=> 'Serveri konfiguratsioon',
	'ACP_SERVER_SETTINGS'		=> 'Serveri seaded',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signatuuri seaded',
	'ACP_SMILIES'				=> 'Emotikonid',
	'ACP_STYLE_MANAGEMENT'		=> 'Stiilide haldamine',
	'ACP_STYLES'				=> 'Stiilid',
	'ACP_STYLES_CACHE'			=> 'Puhasta vahemälu',
	'ACP_STYLES_INSTALL'		=> 'Paigalda stiile',

	'ACP_SUBMIT_CHANGES'		=> 'Salvesta muudatused',

	'ACP_TEMPLATES'				=> 'Mallid',
	'ACP_THEMES'				=> 'Teemad',

	'ACP_UPDATE'					=> 'Uuendan',
	'ACP_USERS_FORUM_PERMISSIONS'   => 'Kasutajate õigused foorumis',
	'ACP_USERS_LOGS'				=> 'Kasutajate logid',
	'ACP_USERS_PERMISSIONS' 		=> 'Kasutajate õigused',
	'ACP_USER_ATTACH'       		=> 'Manused',
	'ACP_USER_AVATAR'       		=> 'Avatar',
	'ACP_USER_FEEDBACK'     		=> 'Tagasiside',
	'ACP_USER_GROUPS'       		=> 'Grupid',
	'ACP_USER_MANAGEMENT'   		=> 'Kasutajate haldamine',
	'ACP_USER_OVERVIEW'     		=> 'Ülevaade',
	'ACP_USER_PERM' 				=> 'Õigused',
	'ACP_USER_PREFS'				=> 'Seaded',
	'ACP_USER_PROFILE'      		=> 'Profiil',
	'ACP_USER_RANK' 				=> 'Kasutajakirjeldus',
	'ACP_USER_ROLES'				=> 'Kasutaja rollid',
	'ACP_USER_SECURITY'     		=> 'Kasutaja turvalisus',
	'ACP_USER_SIG'  				=> 'Signatuur',
	'ACP_USER_WARNINGS'				=> 'Hoiatused',

	'ACP_VC_SETTINGS'					=> 'Robotitevastased meetmed ',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA pildi eelvaade',
	'ACP_VERSION_CHECK'     			=> 'Kontrolli uuendusi',
	'ACP_VIEW_ADMIN_PERMISSIONS'    	=> 'Vaata administratiivseid õiguseid',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Vaata foorumi moderatsiooni õiguseid',
	'ACP_VIEW_FORUM_PERMISSIONS'    	=> 'Vaata foorumi põhiseid õiguseid',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Vaata globaalseid moderatsiooni õiguseid',
	'ACP_VIEW_USER_PERMISSIONS'     	=> 'Vaata kasutaja põhiseid õiguseid',

	'ACP_WORDS'					=> 'Sõnade tsensuur',

	'ACTION'				=> 'Toiming',
	'ACTIONS'				=> 'Toimingud',
	'ACTIVATE'      		=> 'Aktiveeri',
	'ADD'   				=> 'Lisa',
	'ADMIN' 				=> 'Administratsioon',
	'ADMIN_INDEX'   		=> 'Administratsioon',
	'ADMIN_PANEL'   		=> 'Administraatori juhtpaneel',

	'ADM_LOGOUT'    		=> 'Logi välja&nbsp;AJP\'st',
	'ADM_LOGGED_OUT'		=> 'Oled administraatori juhtpaneelist välja logitud',

	'BACK'					=> 'Tagasi',

	'CANNOT_CHANGE_FILE_GROUP'	=> 'Faili gruppi ei saanud muuta',
	'CANNOT_CHANGE_FILE_PERMISSIONS'	=> 'Faili õigusi ei saanud muuta',
	'CANNOT_COPY_FILES'		=> 'Faile ei õnnestunud kopeerida',
	'CANNOT_CREATE_SYMLINK'	=> 'Symlinki loomine ei õnnestunud luua',
	'CANNOT_DELETE_FILES'	=> 'Faile ei õnnestunud kustutada süsteemist',
	'CANNOT_DUMP_FILE'		=> 'VIGA: Unable to dump file',
	'CANNOT_MIRROR_DIRECTORY'	=> 'VIGA: Unable to mirror directory',
	'CANNOT_RENAME_FILE'	=> 'Faili ei õnnestunud nimetada ümber süsteemis',
	'CANNOT_TOUCH_FILES'	=> 'Ei suutnud tuvastada, kas faili eksisteerib',

	'CONTAINER_EXCEPTION' => 'phpBB süsteemil tekkis viga paigaldatud laiendusele ehitada koteinerit. Sel põhjusel on kõik laiendused ajutiselt keelatud. Palun proovi puhastada oma foorumi vahemälu. Kõik laiendused automaatselt lubatakse taas, kui konteineri viga on lahendatud. Kui viga püsib, siis palun külasta ametliku tugikeskkonda <a href="https://www.phpbb.com/support">phpBB.com</a>.',
	'EXCEPTION' => 'Erand',

	'COLOUR_SWATCH' 		=> 'Veebikindlad värvikoodid',
	'CONFIG_UPDATED'		=> 'Konfiguratsioon edukalt uuendatud',
	'CRON_LOCK_ERROR'		=> 'Ei õnnestunud hankida cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Ei õnnestunud leida cron ülesannet “%s”.',
	'CRON_NO_TASK'			=> 'cron ülesandeid ei ole vaja hetkel käivitada.',
	'CRON_NO_TASKS'			=> 'cron ülesandeid ei leitud.',
	'CURRENT_VERSION'		=> 'Praegune versioon',

	'DEACTIVATE'				=> 'Deaktiveeri',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Sisestatud “%s” ei eksisteeri.',
	'DIRECTORY_NOT_DIR'			=> 'Sisestatud “%s” ei ole kataloog.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Sisestatud “%s” ei ole kirjutatav.',
	'DISABLE'					=> 'Keela',
	'DOWNLOAD'      			=> 'Laadi alla',
	'DOWNLOAD_AS'   			=> 'Laadi failina',
	'DOWNLOAD_STORE'			=> 'Laadi alla või säilita serveris',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Sa võid selle faili otse allalaadida või salvestada selle oma serveri <samp>store/</samp> kausta.',
	'DOWNLOADS'					=> 'Allalaadimised',

	'EDIT'					=> 'Muuda',
	'ENABLE'				=> 'Luba',
	'EXPORT_DOWNLOAD'		=> 'Laadi alla',
	'EXPORT_STORE'			=> 'Varu',

	'GENERAL_OPTIONS'		=> 'Üldised valikud',
	'GENERAL_SETTINGS'		=> 'Üldised seaded',
	'GLOBAL_MASK'			=> 'Globaalsete õiguste mask',

	'INSTALL'				=> 'Installeeri',
	'IP'					=> 'Kasutaja IP',
	'IP_HOSTNAME'			=> 'IP aadressid või hostinimed',

	'LATEST_VERSION'		=> 'Viimane versioon',
	'LOAD_NOTIFICATIONS'			=> 'Näita teateid',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Näita teateid igal lehel (tavaliselt päises).',
	'LOGGED_IN_AS'			=> 'Sa oled sisse logitud kasutajana:',
	'LOGIN_ADMIN'			=> 'Et administreerida foorumit, pead olema kinnitatud kasutaja.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Et administreerida foorumit, pead ennast uuesti kinnitama.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Sa oled edukalt kinnitatud ja sind viiakse automaatselt nüüd administraatori juhtpaneeli.',
	'LOOK_UP_FORUM'			=> 'Vali foorum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Sul on võimalik valida rohkem kui üks foorum.',

	'MANAGE'				=> 'Halda',
	'MENU_TOGGLE'			=> 'Peida või näita ääremenüüd',
	'MORE'					=> 'Rohkem',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Rohkem informatsiooni »',
	'MOVE_DOWN'				=> 'Liigu alla',
	'MOVE_UP'				=> 'Liigu üles',

	'NOTIFY'				=> 'Teade',
	'NO_ADMIN'				=> 'Sa ei ole volitatud administreerima seda foorumit.',
	'NO_EMAILS_DEFINED'		=> 'Ühtegi õiget e-posti aadressi ei leitud.',
	'NO_FILES_TO_DELETE'	=> 'Valitud manuseid ei eksisteeri.',
	'NO_PASSWORD_SUPPLIED'	=> 'Sa pead sisestama oma salasõna, et siseneda Administraatori juhtpaneeli.',

	'OFF'					=> 'Väljas',
	'ON'					=> 'Sees',

	'PARSE_BBCODE'						=> 'Tunne ära BBkoodid',
	'PARSE_SMILIES'						=> 'Tunne ära emotikonid',
	'PARSE_URLS'						=> 'Tunne ära lingid',
	'PERMISSIONS_TRANSFERRED'			=> 'Õigused üle kantud',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Sul on hetkel kasutaja %1$s õigused. Sa võid tema õigustega foorumit vaadata, aga sul ei ole luba siseneda administraatori juhtpaneeli, sest administraatori õiguseid ei kantud üle. Võid <a href="%2$s"><strong>taasennistada oma õigused</strong></a> igal ajal.',
	'PROCEED_TO_ACP'					=> '%sLiigu edasi AJP%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Teadaanne',
	'REMIND'							=> 'Tuleta meelde',
	'REPARSE_LOCK_ERROR'				=> 'Reparsing on käivitatud juba teise protsessi poolt.',
	'RESYNC'							=> 'Resünkroniseeri',
	'RUNNING_TASK'			=> 'Jooksev ülesanne: %s.',
	'SELECT_ANONYMOUS'		=> 'Vali anonüümne kasutaja',
	'SELECT_OPTION'			=> 'Vali valik',

	'SETTING_TOO_LOW'		=> 'Sisestatud väärtus seadele “%1$s” on liiga madal. Madalaim lubatud väärtus on %2$d.',
	'SETTING_TOO_BIG'       => 'Sisestatud väärtus seadele “%1$s” on liiga kõrge. Kõrgeim lubatud väärtus on %2$d.',
	'SETTING_TOO_LONG'      => 'Sisestatud väärtus seadele “%1$s” on liiga pikk. Pikim lubatud väärtus on %2$d.',
	'SETTING_TOO_SHORT'     => 'Sisestatud väärtus seadele “%1$s” on liiga lühike. Lühim lubatud väärtus on %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Näita kõiki toiminguid',

	'TASKS_NOT_READY'			=> 'Ülesanne ei ole valmis:',
	'TASKS_READY'			=> 'Valmis ülesanded:',
	'TOTAL_SIZE'			=> 'Kogu suurus',

	'UCP'   				=> 'Kasutaja juhtpaneel',
	'URL_INVALID'			=> 'Sätte “%1$s” URL on kehtetu.',
	'USERNAMES_EXPLAIN'     => 'Paiguta iga kasutajanimi eraldi reale.',
	'USER_CONTROL_PANEL'    => 'Kasutaja juhtpaneel',

	'UPDATE_NEEDED'			=> 'Foorum ei ole ajakohaselt uuendatud.',
	'UPDATE_NOT_NEEDED'		=> 'Foorum on ajakohaselt uuendatud.',
	'UPDATES_AVAILABLE'		=> 'Uuendused saadaval:',

	'WARNING'				=> 'Hoiatus',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'See lehekülg näitab sulle installeeritud PHP kohta andmeid. Sisaldades detaile laaditud moodulitest, olemasolevatest muutujatest ja vaikimisi seadetest. See informatsioon võib olla kasulik, siis kui diagnoosid probleeme. Palun ole teadlik, et mõned serveriteenuste firmad piiravad, millist informatsiooni näidatakse siin turvalisuse huvides. Soovitatav on mitte anda välja siit mitte ühtegi informatsiooni, välja arvatud juhul kui seda küsitakse näiteks <a href="https://www.phpbb.com/about/team/">ametlike meeskonna liikmete</a> poolt tugifoorumis.',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP konfiguratsiooni informatsiooni ei tuvastatud. Phpinfo () on keelatud turvalisuse pärast.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'See näitab kõiki toiminguid, mida on teinud foorumi administraator. Sa saad neid sorteerida kasutajanime, kuupäeva, IP või teo järgi.  Kui sul on vajalikud õigused, siis saad kustutada ka logisid.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'See näitab kõiki toiminguid, mida on teinud foorum ise. Sa saad neid sorteerida kasutajanime, kuupäeva, IP või teo järgi. Kui sul on vajalikud õigused, siis saad kustutada ka logisid.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'See näitab kõiki toiminguid, mida on teinud moderaator. Sa saad neid sorteerida kasutajanime, kuupäeva, IP või teo järgi. Kui sul on vajalikud õigused, siis saad kustutada ka logisid.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'See näitab kõiki toiminguid, mis on tehtud kasutaja poolt või kasutajatega (raporteerimised, hoiatused, kasutaja märkmed).',
	'ALL_ENTRIES'				=> 'Kõik sisestused',

	'DISPLAY_LOG'	=> 'Kuva sisestusi eelmisest',

	'NO_ENTRIES'	=> 'Mitte ühtegi logitud sisestust pole selle perioodi kohta.',

	'SORT_IP'		=> 'IP aadress',
	'SORT_DATE'		=> 'Kuupäev',
	'SORT_ACTION'	=> 'Logitud toiming',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Täname sind, et valisid phpBB oma foorumi tarkvaralahenduseks. Siit leheküljelt saad kiire ülevaate oma foorumi statistikast. Vasakul poolel olevad lingid lubavad sul kontrollida oma foorumit igast vaatenurgast. Iga leht omab juhendit, et kasutada neid administraatori vahendeid.',
	'ADMIN_LOG'					=> 'Sisselogitud administraatori tegevused',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Selles sektsioonis näed ülevaadet viimasest viiest tegevusest, mille on läbi viinud foorumi administraator. Logi täielikuks vaatamiseks, vajuta linki, mis asub siin all.',
	'AVATAR_DIR_SIZE'			=> 'Avatari kausta suurus',

	'BOARD_STARTED'		=> 'Foorum paigaldati',
	'BOARD_VERSION'		=> 'Tarkvara versioon',

	'DATABASE_SERVER_INFO'	=> 'Andmebaasi server',
	'DATABASE_SIZE'			=> 'Andmebaasi suurus',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funktsiooni ülekoormus on sobimatult konfigureeritud',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> peab olema määratud kas 0 või 4. Hetkelist väärtus saad kontrollida <samp>PHP information</samp> lehelt.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Läbipaistva sümboli enkodeering on sobimatult konfigureeritud',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> peab olema määratud 0. Hetkelist väärtus saad kontrollida <samp>PHP information</samp> lehelt.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP sisestuse sümboli konverteerimine on sobimatult konfigureeritud',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> peab olema määratud <samp>pass</samp>. Hetkelist väärtus saad kontrollida <samp>PHP information</samp> lehelt.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP väljastuse sümboli konverteerimine on sobimatult konfigureeritud',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> peab olema määratud <samp>pass</samp>. Hetkelist väärtus saad kontrollida <samp>PHP information</samp> lehelt.',

	'FILES_PER_DAY'		=> 'Manused päevas',
	'FORUM_STATS'   	=> 'Foorumi statistika',

	'GZIP_COMPRESSION'  => 'GZip kompressioon',

	'NO_SEARCH_INDEX'	=> 'Valitud otsingu backend\'il ei ole otsingu indeksit.<br />Palun loo indeks “%1$s” %2$sotsingu indeksi%3$s osasse.',
	'NOT_AVAILABLE' 	=> 'Pole olemas',
	'NUMBER_FILES'  	=> 'Manuseid kokku',
	'NUMBER_POSTS'  	=> 'Postitusi kokku',
	'NUMBER_TOPICS' 	=> 'Teemasid kokku',
	'NUMBER_USERS'  	=> 'Kasutajaid kokku',
	'NUMBER_ORPHAN' 	=> 'Üksikuid manuseid',

	'PHP_VERSION'		=> 'PHP versioon',
	'PHP_VERSION_OLD'	=> 'PHP versiooni siin serveris ei toetata (%1$s). Minimaalne nõutud PHP versioon on %2$s. %3$sAndmed%4$s',


	'POSTS_PER_DAY' 	=> 'Postitusi päevas',

	'PURGE_CACHE'			=> 'Puhasta vahemälu',
	'PURGE_CACHE_CONFIRM'	=> 'Kas oled kindel, et tahad puhastada vahemälu?',
	'PURGE_CACHE_EXPLAIN'	=> 'Puhastab kõik vahemälus olevad asjad sealhulgas ka mallide failid või käsud.',
	'PURGE_CACHE_SUCCESS'	=> 'Vahemälu edukalt puhastatud.',

	'PURGE_SESSIONS'			=> 'Kustuta kõik sessioonid',
	'PURGE_SESSIONS_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada kõik sessioonid? See logib kõik kasutajad välja.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Kustutab kõik sessioonid. See logib kõik kasutajad välja, puhastades sessioonitabeli.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Kõik sessioonid on edukalt kustutatud.',

	'RESET_DATE'					=> 'Lähtesta foorumi paigalduse kuupäev',
	'RESET_DATE_CONFIRM'			=> 'Kas oled kindel, et soovid lähtestada foorumi paigalduse kuupäeva?',
	'RESET_DATE_SUCCESS'				=> 'Foorumi paigalduse kuupäev on edukalt lähtestatud',
	'RESET_ONLINE'					=> 'Lähtesta enim kasutajaid online',
	'RESET_ONLINE_CONFIRM'			=> 'Kas oled kindel, et tahad lähtestada enim kasutajaid online loendi?',
	'RESET_ONLINE_SUCCESS'				=> 'Enim kasutajaid online on edukalt lähtestatud',
	'RESYNC_POSTCOUNTS'				=> 'Resünkroniseeri postituste arvu',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Ainult olemasolevad postitused võetakse arvesse. Kärbitud postitusi arvesse ei võeta.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Kas oled kindel, et tahad resünkroniseerida postituste arvu?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Postituste arv on edukalt resünkroniseeritud',
	'RESYNC_POST_MARKING'			=> 'Resünkroniseeri märgitud teemad',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Kas oled kindel, et tahad sünkroniseerida märgitud teemasid?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Esiteks võetakse kõigil märgistus maha ja siis märgistatakse õigesti kõik teemad, kus on olnud aktiivsust viimased 6 kuud.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Märgitud teemad on edukalt resünkroniseeritud',
	'RESYNC_STATS'					=> 'Resünkroniseeri statistika',
	'RESYNC_STATS_CONFIRM'			=> 'Kas oled kindel, et tahad resünkroniseerida statistikat?',
	'RESYNC_STATS_EXPLAIN'			=> 'Arvutab uuesti postituste, teemade, kasutajate ja failide arvu kokku.',
	'RESYNC_STATS_SUCCESS'			=> 'Statistika on edukalt resünkroniseeritud.',
	'RUN'							=> 'Käivita',

	'STATISTIC'					=> 'Statistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resünkroniseeri või lähtesta statistikat',

	'TIMEZONE_INVALID'	=> 'Valitud ajavöönd on kehtetu.',
	'TIMEZONE_SELECTED'	=> '(hetkel valitud)',
	'TOPICS_PER_DAY'	=> 'Teemasid päevas',

	'UPLOAD_DIR_SIZE'   => 'Sisestatud manuste suurus kokku',
	'USERS_PER_DAY' 	=> 'Kasutajaid päevas',

	'VALUE' 					=> 'Väärtus',
	'VERSIONCHECK_FAIL'			=> 'PhpBB versiooni ei suudetud tuvastada.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Kontrolli uuesti',
	'VERSION_CHECK'				=> 'Versiooni kontroll',
	'VERSION_CHECK_EXPLAIN'		=> 'Kontrollib, kas installeeritud phpBB versioon on kõige uuem.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Viimase versiooni informatsioon sisaldab mitte toetatud kirjet.',
	'VERSIONCHECK_INVALID_URL'	=> 'Viimase versiooni informatsioon sisaldab vigast URL\'i.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Viimase versiooni informatsiooni sisaldab vigast versiooni.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Sinu phpBB versioon pole kõige uuem.<br />Allpool leiad lingi viimase versiooni väljalaske teadaandele ja instruktsioonid uuendamiseks.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Sinu phpBB versioon pole kõige uuem',
	'VERSION_UP_TO_DATE_ACP'		=> 'Sinu versioon on kõige uuem, uuendusi pole saadaval. Sa ei pea versiooni uuendama.',
	'VIEW_ADMIN_LOG'			=> 'Vaata administraatori logi',
	'VIEW_INACTIVE_USERS'   	=> 'Vaata mitteaktiivseid kasutajaid',

	'WELCOME_PHPBB'			=> 'Tere tulemast phpBB foorumitarkvara haldusesse!',
	'WRITABLE_CONFIG'		=> 'Sinu konfiguratsioonifail (config.php) on hetkel kõigile kirjutatav. Soovitame kindlasti õigused ära muuta 640 või vähemalt 644 (näiteks: <a href="https://viki.pingviin.org/index.php/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Alates',
	'INACTIVE_REASON'				=> 'Põhjus',
	'INACTIVE_REASON_MANUAL'		=> 'Kasutaja deaktiviseeritud administraatori poolt',
	'INACTIVE_REASON_PROFILE'		=> 'Profiilid detailid vahetusid',
	'INACTIVE_REASON_REGISTER'		=> 'Äsja registreeritud kasutaja',
	'INACTIVE_REASON_REMIND'		=> 'Kasutaja sunnitud reaktivatsioon',
	'INACTIVE_REASON_UNKNOWN'		=> 'Teadmata',
	'INACTIVE_USERS'				=> 'Mitteaktiivsed kasutajad',
	'INACTIVE_USERS_EXPLAIN'		=> 'See on nimekiri kasutajadest, kes registreerusid aga on mitteaktiivsed. Sa võid neid aktiveerida, kustutada, või aktivatsiooni emaili uuesti saata.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'See on nimekiri 10 viimasest kasutajast, kes registreerusid aga on mitteaktiivsed. Täieliku nimekirja vaatamiseks vajuta allolevale lingile.',

	'NO_INACTIVE_USERS'	=> 'Pole ühtegi mitteaktiivset kasutajat',

	'SORT_INACTIVE'		=> 'Alates',
	'SORT_LAST_VISIT'	=> 'Viimane külastus',
	'SORT_REASON'		=> 'Põhjus',
	'SORT_REG_DATE'		=> 'Registreerimise kuupäev',
	'SORT_LAST_REMINDER'=> 'Viimati meeldetuletatud',
	'SORT_REMINDER'		=> 'Meeldetuletus saadetud',

	'USER_IS_INACTIVE'		=> 'Kasutaja on mitteaktiivne',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Palun saada info oma serveri ja foorumi seadete kohta phpBB\'le statistiliseks analüüsiks. Kogu info, millega saaks identifitseerida sinu veebisaiti, eemaldati. Andmed on täielikult <strong>anonüümsed</strong>. Tulevased phpBB versioonid sõltuvad statistilisest infost. Statistika avalikustatakse. Neid andmeid jagatakse ka PHP projektile - keelele, milles phpBB on kirjutatud.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Kasutades nuppu all saad kuvada eelvaate saadetavast infost.',
	'DONT_SEND_STATISTICS'		=> 'Mine tagasi AJP\'sse, kui sa ei soovi seda infot saata.',
	'GO_ACP_MAIN'				=> 'Mine AJP esilehele',
	'HIDE_STATISTICS'			=> 'Peida andmed',
	'SEND_STATISTICS'			=> 'Saada statistiline info',
	'SEND_STATISTICS_LONG'		=> 'Saada statistiline informatsioon',
	'SHOW_STATISTICS'			=> 'Näita andmeid',
	'THANKS_SEND_STATISTICS'	=> 'Täname, et edastasid selle informatsiooni!',
	'FAIL_SEND_STATISTICS'		=> 'Ebaõnnestunud: phpBB\'l ei olnud võimalik saata statistikat',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Lisatud või muudetud kasutajapõhiseid kasutaja õigusi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'   	=> '<strong>Lisatud või muudetud kasutaja õigusi</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'    	=> '<strong>Lisatud või muudetud kasutajate üldmoderaatori õigusi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'   	=> '<strong>Lisatud või muudetud gruppide üldmoderaatori õigusi</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'    	=> '<strong>Lisatud või muudetud kasutaja administraatori õigusi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'   	=> '<strong>Lisatud või muudetud grupi administraatori õigusi</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'   	=> '<strong>Lisatud või muudetud administraatoreid</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'     	=> '<strong>Lisatud või muudetud üldmoderaatoreid</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'     	=> '<strong>Lisatud või muudetud kasutajate foorumile ligipääsu</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'     	=> '<strong>Lisatud või muudetud kasutajate foorumi moderaatori ligipääsu</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'    	=> '<strong>Lisatud või muudetud gruppide foorumile ligipääsu</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'    	=> '<strong>Lisatud või muudetud gruppide foorumi moderatori ligipääsu</strong> %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'      	=> '<strong>Lisatud või muudetud moderaatoreid</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'    	=> '<strong>Lisatud või muudetud foorumi õigusi</strong> %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'   	=> '<strong>Eemaldatud administraatoreid</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'     	=> '<strong>Eemaldatud üldmoderaatoreid</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'      	=> '<strong>Eemaldatud moderaatoreid</strong> %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'    	=> '<strong>Eemaldatud kasutajate/gruppide foorumi õigusi</strong> %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'  	=> '<strong>Õigused ületoodud</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'   	=> '<strong>Oma õigused taastatud pärast õiguste kasutamist</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Ebaõnnestunud administraatori sisselogimise katse</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Edukas administraatori sisselogimine</strong>',

	'LOG_ATTACHMENTS_DELETED'   => '<strong>Eemaldatud kasutaja manused</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'    	=> '<strong>Lisatud või muudetud manuse laiendit</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'    	=> '<strong>Eemaldatud manuse laiend</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE' 	=> '<strong>Uuendatud manuse laiendit</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'   => '<strong>Laiendigrupp lisatud</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'  => '<strong>Laiendigrupp muudetud</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'   => '<strong>Laiendigrupp eemaldatud</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD' 	=> '<strong>Üksik fail üles laaditud postitusse</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL' 	=> '<strong>Üksikud failid kustutatud</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Kasutaja keelust välistatud</strong> põhjusega “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'    => '<strong>IP keelust välistatud</strong> põhjusega “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-post keelust välistatud</strong> põhjusega “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'  		=> '<strong>Keelatud kasutaja</strong> põhjusel “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'    		=> '<strong>Keelatud IP</strong> põhjusel “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL' 		=> '<strong>Keelatud e-post</strong> põhjusel “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Keeld maha võetud kasutajalt</strong><br />» %s',
	'LOG_UNBAN_IP'  		=> '<strong>Keeld maha võetud IP\'lt</strong><br />» %s',
	'LOG_UNBAN_EMAIL'       => '<strong>Keeld maha võetud e-postilt</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Uus BBkood lisatud</strong><br />» %s',
	'LOG_BBCODE_EDIT'       => '<strong>BBkood muudetud</strong><br />» %s',
	'LOG_BBCODE_DELETE'     => '<strong>BBkood kustutatud</strong><br />» %s',
    'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Viga BBkoodi seadistamisel</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>Uus bot lisatud</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot kustutatud</strong><br />» %s',
	'LOG_BOT_UPDATED'   => '<strong>Bot uuendatud</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Administraatori logi kustutatud</strong>',
	'LOG_CLEAR_CRITICAL'    => '<strong>Vigade logi kustutatud</strong>',
	'LOG_CLEAR_MOD' 		=> '<strong>Moderaatori logi kustutatud</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Kasutaja logi kustutatud</strong><br />» %s',
	'LOG_CLEAR_USERS'       => '<strong>Kasutajate logid kustutatud</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Muudetud manuseseadeid</strong>',
	'LOG_CONFIG_AUTH'       	=> '<strong>Muudetud autentimisseadeid</strong>',
	'LOG_CONFIG_AVATAR'     	=> '<strong>Muudetud avatari seadeid </strong>',
	'LOG_CONFIG_COOKIE'     	=> '<strong>Muudetud küpsiste seadeid</strong>',
	'LOG_CONFIG_EMAIL'      	=> '<strong>Muudetud e-posti seadeid</strong>',
	'LOG_CONFIG_FEATURES'   	=> '<strong>Muudetud foorumi võimalusi</strong>',
	'LOG_CONFIG_LOAD'       	=> '<strong>Muudetud laadimise seadeid</strong>',
	'LOG_CONFIG_MESSAGE'    	=> '<strong>Muudetud privaatsõnumite seadeid</strong>',
	'LOG_CONFIG_POST'       	=> '<strong>Muudetud postituse seadeid</strong>',
	'LOG_CONFIG_REGISTRATION'   => '<strong>Muudetud registreerimise seadeid</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Muudetud voo seadeid</strong>',
	'LOG_CONFIG_SEARCH'     	=> '<strong>Muudetud otsingu seadeid</strong>',
	'LOG_CONFIG_SECURITY'   	=> '<strong>Muudetud turvaseadeid</strong>',
	'LOG_CONFIG_SERVER'     	=> '<strong>Muudetud serveri seadeid</strong>',
	'LOG_CONFIG_SETTINGS'   	=> '<strong>Muudetud foorumi seadeid</strong>',
	'LOG_CONFIG_SIGNATURE'  	=> '<strong>Muudetud signatuuri seadeid</strong>',
	'LOG_CONFIG_VISUAL'     	=> '<strong>Muudetud visuaalkinnituse seadeid</strong>',

	'LOG_APPROVE_TOPIC'     	=> '<strong>Teema on heaks kiidetud</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Teema tõstatatud</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Kustutatud on postitus “%1$s”, “%2$s” poolt järgneval põhjusel</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'   => '<strong>Kustuta variteema</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Kustutatud on teema “%1$s”, “%2$s” poolt järgneval põhjusel</strong><br />» %3$s',
	'LOG_FORK'      			=> '<strong>Teema kopeeritud</strong><br />» from %s',
	'LOG_LOCK'      			=> '<strong>Teema suletud</strong><br />» %s',
	'LOG_LOCK_POST' 			=> '<strong>Postitus suletud</strong><br />» %s',
	'LOG_MERGE'     			=> '<strong>Postitused ühendatud</strong> teemasse<br />» %s',
	'LOG_MOVE'					=> '<strong>Teema liigutatud</strong><br />» foorumist %1$s foorumile %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Teema liigutatud</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>PS raport suletud</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>PS raport kustutatud</strong><br />» %s',
	'LOG_POST_APPROVED'     	=> '<strong>Postitus heaks kiidetud</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mitte heaks kiidetud “%1$s” postitus liikme “%3$s” poolt, järgneval põhjusel</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Muudeti postitust “%1$s”, mille kirjutas liige “%2$s”, põhjusel</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Taastatud postitus</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Suletud raport</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Kustutatud raport</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Taastatud teema “%1$s” postitas</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Taastamise võimalusega kustutatud postitus “%1$s” postitatud “%2$s” poolt, põhjusel</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Taastamise võimalusega kustutatud teema “%1$s” postitatud “%2$s” poolt, põhjusel</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'	 	=> '<strong>Liigutatud poolitatud postitused</strong><br />»  %s foorumisse',
	'LOG_SPLIT_SOURCE'		    => '<strong>Postitused poolitatud</strong><br />»  %s foorumist',

	'LOG_TOPIC_APPROVED'    	=> '<strong>Teema heaks kiidetud</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Taastatud teema</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Teema “%1$s”, mille postitas “%3$s” on mitte heaks kiidetud, järgneval põhjusel</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'      	=> '<strong>Teemade loendur resünkroniseeritud</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Teema tüüp muudetud</strong><br />» %s',
	'LOG_UNLOCK'    			=> '<strong>Teema avatud</strong><br />» %s',
	'LOG_UNLOCK_POST'       	=> '<strong>Postitus avatud</strong><br />» %s',

	'LOG_DISALLOW_ADD'      	=> '<strong>Lisatud keelatud kasutajanimi</strong><br />» %s',
	'LOG_DISALLOW_DELETE'   	=> '<strong>Kustutatud keelatud kasutajanimi</strong>',

	'LOG_DB_BACKUP' 			=> '<strong>Andmebaasi varukoopia</strong>',
	'LOG_DB_DELETE' 			=> '<strong>Andmebaasi varukoopia kustutatud</strong>',
	'LOG_DB_RESTORE'			=> '<strong>Andmebaasi varukoopia taastatud</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'   => '<strong>Välistatud IP/hostinimi allalaadimiste nimekirjast</strong><br />» %s',
	'LOG_DOWNLOAD_IP'       	=> '<strong>Lisatud IP/hostinimi allalaadimiste nimekirja</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Eemaldatud IP/hostinimi allalaadimiste nimekirjast</strong><br />» %s',

	'LOG_ERROR_JABBER'      => '<strong>Jabberi viga</strong><br />» %s',
	'LOG_ERROR_EMAIL'       => '<strong>E-posti viga</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>CAPTCHA viga</strong><br />» %s',

	'LOG_FORUM_ADD' 						=> '<strong>Uus foorum loodud</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Foorumi andmed kopeeritud</strong> foorumist %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'   				=> '<strong>Foorum kustutatud</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'  				=> '<strong>Foorum ja selle alafoorumid kustutatud</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'     		=> '<strong>Foorum kustutatud ja alafoorum liigutatud</strong> %1$s foorumisse<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'      		=> '<strong>Foorum kustutatud ja postitused liigutatud </strong> %1$s foorumisse<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'       => '<strong>Foorum ja selle alafoorumid kustutatud, postitused liigutatud</strong> %1$s foorumisse<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'  => '<strong>Foorum kustutatud, postitused liigutatud</strong> %1$s foorumisse <strong>ja alafoorumid</strong> %2$s foorumisse<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'   				=> '<strong>Foorum ja selle postitused kustutatud</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'    		=> '<strong>Foorum, selle postitused ja alafoorumid kustutatud</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'       => '<strong>Foorum ja selle postitused kustutatud, alafoorumid liigutatud</strong> %1$s foorumisse<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Foorumi andmed muudetud</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Foorum liigutatud</strong> %1$s <strong>alla</strong> %2$s',
	'LOG_FORUM_MOVE_UP'     				=> '<strong>Foorum liigutatud</strong> %1$s <strong>üles</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Foorum resünkroniseeritud</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Tekkis üldviga</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'     => '<strong>Uus kasutajagrupp loodud</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'    => '<strong>Grupp “%1$s” muudetud vaikimisi grupiks kasutajatele</strong><br />» %2$s',
	'LOG_GROUP_DELETE'      => '<strong>Kasutajagrupp kustutatud</strong><br />» %s',
	'LOG_GROUP_DEMOTED'     => '<strong>Liidrid tagandatud kasutajagrupis</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'    => '<strong>Kasutajad edutatud liidriks kasutajagrupis</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'      => '<strong>Kasutajad eemaldatud kasutajagrupist</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'     => '<strong>Kasutajagrupi andmed uuendatud</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Uued liidrid lisatud kasutajagruppi</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'       => '<strong>Uued kasutajad lisatud</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Kasutaja vastu võetud gruppi</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Kasutajad soovisid liituda grupiga “%1$s” ja soovivad kinnitust</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Viga pildi loomisel</strong><br />» Viga %1$s failis %2$s. real: %3$s',

	'LOG_INACTIVE_ACTIVATE' => '<strong>Aktiveerimata kasutajad aktiveeritud</strong><br />» %s',
	'LOG_INACTIVE_DELETE'   => '<strong>Mitteaktiveeritud kasutajad kustutatud</strong><br />» %s',
	'LOG_INACTIVE_REMIND'   => '<strong>Meeldetuletuskiri ebaaktiivsetele kasutajatele saadetud</strong><br />» %s',
	'LOG_INSTALL_CONVERTED' => '<strong>konvertis %1$s versioonile phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED' => '<strong>Paigaldas phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>VIGA: Sessiooni IP/browser/X_FORWARDED_FOR kontrollimine ebaõnnestus</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabberi konto muudetud</strong>',
	'LOG_JAB_PASSCHG'       	=> '<strong>Jabberi parool muudetud</strong>',
	'LOG_JAB_REGISTER'      	=> '<strong>Jabberi konto registreeritud</strong>',
	'LOG_JAB_SETTINGS_CHANGED'  => '<strong>Jabberi seaded salvestatud</strong>',

	'LOG_LANGUAGE_PACK_DELETED'     => '<strong>Keelefail kustutatud</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'   => '<strong>Keelefail installeeritud</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'     => '<strong>Keelefaili andmed on uuendatud</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'    => '<strong>Keelefail asendatud</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'   => '<strong>Sisestatud keelefail ja pandud /store/ kausta</strong><br />» %s',

	'LOG_MASS_EMAIL'	=> '<strong>Masskiri saadetud</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER' => '<strong>Muudetud postitajat teemas “%1$s”</strong><br />» algne: %2$s; uus: %3$s',

	'LOG_MODULE_DISABLE'    => '<strong>Moodul keelatud</strong><br />» %s',
	'LOG_MODULE_ENABLE'     => '<strong>Moodul lubatud</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'  => '<strong>Moodul alla liigutatud</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'    => '<strong>Moodul üles liigutatud</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'    => '<strong>Moodul eemaldatud</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Moodul lisatud</strong><br />» %s',
	'LOG_MODULE_EDIT'       => '<strong>Moodul muudetud</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Administraatori roll lisatud</strong><br />» %s',
	'LOG_A_ROLE_EDIT'       => '<strong>Administraatori roll muudetud</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'    => '<strong>Administraatori roll eemaldatud</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Foorumi roll lisatud</strong><br />» %s',
	'LOG_F_ROLE_EDIT'       => '<strong>Foorumi roll muudetud</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'    => '<strong>Foorumi roll eemaldatud</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderaatori roll lisatud</strong><br />» %s',
	'LOG_M_ROLE_EDIT'       => '<strong>Moderaatori roll muudetud</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'    => '<strong>Moderaatori roll eemaldatud</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Kasutaja roll lisatud</strong><br />» %s',
	'LOG_U_ROLE_EDIT'       => '<strong>Kasutaja roll muudetud</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'    => '<strong>Kasutaja roll eemaldatud</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Ei suutnud avada %1$s korrastamiseks, vaata õigusi.</strong><br />Erand: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'    => '<strong>Profiiliväli aktiveeritud</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'      => '<strong>Profiiliväli lisatud</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'  => '<strong>Profiiliväli deaktiveeritud</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profiiliväli muudetud</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'     => '<strong>Profiiliväli eemaldatud</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Foorumid kärbitud</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Foorumid automaatselt kärbitud</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Automaatselt kärbi vari teemad</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'   	=> '<strong>Kasutaja deaktiveeritud</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Kasutaja kärbitud ja postitused kustutatud</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'   => '<strong>Kasutaja kärbitud ja postitused säilitatud</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Vahemälu tühjendatud</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sessioonid kustutatud</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Uus tiitel lisatud</strong><br />» %s',
	'LOG_RANK_REMOVED'      => '<strong>Tiitel eemaldatud</strong><br />» %s',
	'LOG_RANK_UPDATED'      => '<strong>Tiitel uuendatud</strong><br />» %s',

	'LOG_REASON_ADDED'      => '<strong>Lisatud raporteerimise/keelamise põhjus</strong><br />» %s',
	'LOG_REASON_REMOVED'    => '<strong>Eemaldatud raporteerimise/keelamise põhjus</strong><br />» %s',
	'LOG_REASON_UPDATED'    => '<strong>Raporteerimise/keelamise põhjus uuendatud</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Viitaja valideerimine ebaõnnestus</strong><br />»Viitaja oli “<em>%1$s</em>”. Soov lükati tagasi ja sessioon lõpetati.',
	'LOG_RESET_DATE'			=> '<strong>Foorumi alguskuupäev lähtestatud</strong>',
	'LOG_RESET_ONLINE'      	=> '<strong>Rekordarv kasutajaid foorumi lähtestatud</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Failide statistika resünkroniseeritud</strong>',
	'LOG_RESYNC_POSTCOUNTS' 	=> '<strong>Kasutajate postituste arv resünkroniseeritud</strong>',
	'LOG_RESYNC_POST_MARKING'   => '<strong>Märgitud teemad resünkroniseeritud</strong>',
	'LOG_RESYNC_STATS'      	=> '<strong>Postituste, teemade ja kasutajate statistika resünkroniseeritud</strong>',

	'LOG_SEARCH_INDEX_CREATED'  => '<strong>Otsingu indeks loodud</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'  => '<strong>Otsingu indeks eemaldatud</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx viga</strong><br />» %s',
	'LOG_STYLE_ADD' 			=> '<strong>Uus stiil lisatud</strong><br />» %s',
	'LOG_STYLE_DELETE'      	=> '<strong>Stiil kustutatud</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Stiil muudetud</strong><br />» %s',
	'LOG_STYLE_EXPORT'      	=> '<strong>Stiil eksporditud</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'   		=> '<strong>Uus kujundusmall lisatud andmebaasi</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'   		=> '<strong>Uus kujundusmall lisatud failisüsteemi</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'    => '<strong>Kujundusmallide vahemälu kustutatud <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'   		=> '<strong>Kujundusmall kustutatud</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'   			=> '<strong>Kujundusmall muudetud <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'     => '<strong>Kujundusmalli andmed muudetud</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'   		=> '<strong>Kujundusmall eksporditud</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'   		=> '<strong>Kujundusmall värskendatud</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Uus teema lisatud andmebaasi</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Uus teema lisatud failisüsteemi</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Teema kustutatud</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Teema andmed muudetud</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Teema muudetud: <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Teema muudetud: <em>%1$s</em></strong><br />» Muudetud fail: <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Teema eksporditud </strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Teema värskendatud</strong><br />» %s',

	'LOG_UPDATE_DATABASE'   => '<strong>Uuendatud andmebaas versioonilt %1$s versioonile %2$s</strong>',
	'LOG_UPDATE_PHPBB'      => '<strong>Uuendatud phpBB versioonilt %1$s versioonile %2$s</strong>',

	'LOG_USER_ACTIVE'       => '<strong>Kasutaja aktiveeritud</strong><br />» %s',
	'LOG_USER_BAN_USER'     => '<strong>Keelatud kasutaja läbi kasutaja haldamise</strong> põhjusega “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'       => '<strong>IP keelatud läbi kasutaja haldamise</strong> põhjusega “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'    => '<strong>E-post keelatud läbi kasutaja haldamise</strong> põhjusega “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'      => '<strong>Kasutaja kustutatud</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'   => '<strong>Eemaldatud kõik manused, mis on lisanud</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'   => '<strong>Kasutaja avatar eemaldatud</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Kasutaja saadetavate kirjade kast tühjendatud</strong><br />» %s',
	'LOG_USER_DEL_POSTS'    => '<strong>Eemaldatud kõik postitused, mida on teinud kasutaja</strong><br />» %s',
	'LOG_USER_DEL_SIG'      => '<strong>Kasutaja signatuur eemaldatud</strong><br />» %s',
	'LOG_USER_INACTIVE'     => '<strong>Kasutaja deaktiveeritud</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'   => '<strong>Kasutaja postitused liigutatud</strong><br />» postitaja “%1$s” postitused foorumisse “%2$s”',
	'LOG_USER_NEW_PASSWORD' => '<strong>Kasutaja salasõna muudetud</strong><br />» %s',
	'LOG_USER_REACTIVATE'   => '<strong>Sunnitud kasutaja konto reaktiveerimine</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Eemaldatud vastregistreerunu märgekasutajalt</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL' => '<strong>Kasutaja “%1$s” e-post muudetud</strong><br />» vana: “%2$s” uus: “%3$s”',
	'LOG_USER_UPDATE_NAME'  => '<strong>Kasutajanimi muudetud</strong><br />» vana: “%1$s” uus: “%2$s”',
	'LOG_USER_USER_UPDATE'  => '<strong>Kasutaja andmed uuendatud</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Kasutaja konto aktiveeritud</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Kasutaja avatar eemaldatud</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Kasutaja signatuur eemaldatud</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Kasutajale tagasiside lisatud</strong><br />» %s',
	'LOG_USER_GENERAL'      	=> '<strong>Sisestus lisatud:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Kasutaja konto deaktiveeritud</strong>',
	'LOG_USER_LOCK'				=> '<strong>Kasutaja teema suletud</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Liigutatud kõik postitused foorumisse</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Kasutaja sunnitud reaktiveerimine</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Kasutaja teema avatud</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Lisatud kasutajale hoiatus</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Kasutajale hoitus lisatud</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Kasutaja vaikimisi grupp muudetud</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Kasutaja liidrikohast loobutud</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Kasutaja grupiga liitutud</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'   => '<strong>Kasutaja grupiga, mis nõuab kinnitust, liitutud</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Kasutaja grupi liikmestaatusest loobutud</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Kasutaja hoiatus kustutatud</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Kustutatud kasutaja hoiatus</strong><br />» %1$s',
		2 => '<strong>Kustutatud %2$d kasutaja hoiatust</strong><br />» %1$s', // Näiteks: '<strong>Kustutatud 2 kasutaja hoiatust</strong><br />» kasutajanimi'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Kõik hoiatused kustutatud</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Sõna tsensuur lisatud</strong><br />» %s',
	'LOG_WORD_DELETE'       => '<strong>Sõna tsensuur kustutatud</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Sõna tsensuur muudetud</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Laiendus lubatud</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Laiendus keelatud</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Laienduste andmed kustutatud</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Laiendus uuendatud</strong><br />» %s',
));
