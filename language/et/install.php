<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 * Copyright (c) 2008 - 2020 Estonian translation group.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 * @package      Estonian
 * @author       phpBB Estonia
 * @copyright    phpBB Estonia <Exabot>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Paigaldamise paneel',
	'SELECT_LANG'	=> 'Vali keel',

	'STAGE_INSTALL'	=> 'phpBB paigaldamine',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Juhend',
	'INTRODUCTION_BODY'		=> 'Tere tulemast paigaldama foorumi tarkvara phpBB3!<br /><br />phpBB® on maailmas kõige laialdasemalt kasutatav avatud lähtekoodiga foorumi platvormi lahendus. phpBB3 on viimane versioon sellest, kui alustati 2000 aastal. Nagu eelkäijad, on phpBB3 funktsionaalne, kasutajasõbralik ja phpBB meeskond toetab seda täielikult. phpBB3 parandab oluliselt phpBB2 populaarsust ja lisab tavaliselt nõutud funktsioone, mida eelmistes versioonides ei olnud või oli puudulik. Loodame, et see foorumi tarkvara ületab teie ootused.<br /><br />See paigaldussüsteem juhendab teid phpBB3 installimisel, eelmiste versioonide pealt phpBB3 viimase versiooni peale värskendamise ja samuti mõnest teisest foorumitarkvara süsteemist (sh phpBB2) phpBB3 konverteerimisel. Lisateabe saamiseks soovitame teil lugeda <a href="../docs/INSTALL.html">installeerimise juhendit</a>.<br /><br />PhpBB3 litsentsi lugemiseks või toe saamiseks ja meie arvamuse saamiseks - selle kohta saate valida külgmenüüst vastavad valiku. Jätkamiseks valige ülevalt vastav vahekaart.',

	// Support page
	'SUPPORT_TITLE'		=> 'Tugi',
	'SUPPORT_BODY'		=> 'PhpBB3 praegusele stabiilsele versioonile antakse täielik tasuta toetus. See sisaldab:</p><ul><li>installeerimine</li><li>konfiguratsioon</li><li>tehnilised küsimused</li><li>tarkvaraga seotud võimalikud vead ja probleemid</li><li>versiooniuuendused Release Candidate (RC) versioonidest uusima stabiilse versioonini</li><li>konvertides phpBB 2.0.x edasi phpBB3</li><li>teisest foorumi tarkvarast konverteerimiseks phpBB3 peale (vaadake <a href="https://www.phpbb.com/community/viewforum.php?f=486">Konverterite foorum</a>)</li></ul><p>Me julgustame kasutajaid, kes kasutavad ikka veel phpBB3 beetaversioone, asendama oma foorumi tarkvara värskeima versiooniga.</p><h2>Laiendused / Stiilid</h2><p>Laiendustega seotud küsimuste puhul palume pöörduda <a href="https://www.phpbb.com/community/viewforum.php?f=451">Laienduste foorum</a> poole.<br />Stiilide, mallide ja teemade kohta puudutavate küsimuste puhul palume pöörduda <a href="https://www.phpbb.com/community/viewforum.php?f=471">Stiilide foorum</a> poole.<br /><br />Kui teie küsimus on seotud konkreetselt phpbb3 tarkvaraga, pöörduge palun otse phpbb3 toe poole.</p><h2>Toetuse saamine</h2><p><a href="https://www.phpbb.com/support/">Toetussektsioon</a><br /><a href="https://www.phpbb.com/support/docs/en/3.2/ug/quickstart/">Lühike juhend</a><br /><br />Tagamaks, et olete kursis viimaste uudiste ja väljaannetega, jälgige meid <a href="https://www.twitter.com/phpbb/">Twitteris</a> ja <a href="https://www.facebook.com/phpbb/">Facebookis</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Üldine avalik litsents',

	// Install page
	'INSTALL_INTRO'			=> 'Tere tulemast installeerima',
	'INSTALL_INTRO_BODY'	=> 'Selle valikuga on võimalik serverile installeerida phpBB3.</p><p>Jätkamiseks vajate oma andmebaasi seadeid. Kui te ei tea oma andmebaasi seadeid ning muid andmeid, siis võtke ühendust oma domeenihaldajaga. Ilma nendeta ei saa te jätkata. Te vajate:</p>

	<ul>
		<li>Andmebaasi tüüp - kasutatav andmebaas.</li>
		<li>Andmebaasi serveri hostinimi või DSN - andmebaasi serveri aadress.</li>
		<li>Andmebaasi serveri port - andmebaasi serveri port (enamasti ei ole seda vaja).</li>
		<li>Andmebaasi nimi - serveris oleva andmebaasi nimi.</li>
		<li>Andmebaasi kasutajanimi ja andmebaasi parool - andmebaasi juurdepääsuks vajalikud sisselogimisandmed.</li>
	</ul>

	<p><strong>Märkus:</strong> kui installite SQLite, peaksite sisestama oma andmebaasi faili täieliku tee DSN väljale ja jätma kasutajanime ja parooli väljad tühjaks. Turvakaalutlustel peaksite veenduma, et andmebaasi faili ei salvestata veebist ligipääsetavas kohas.</p>

	<p>phpBB3 toetab järgmisi andmebaase:</p>
	<ul>
		<li>MySQL 3.23 või uuem (MySQL toetatud)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 või uuem (otse või ODBC kaudu)</li>
		<li>MS SQL Server 2005 või uuem</li>
		<li>Oracle</li>
	</ul>

	<p>Kuvatakse ainult teie serveris toetatud andmebaase.',

	'ACP_LINK'	=> 'Liigu <a href="%1$s">AJP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB on juba installitud.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ei ole veel installitud.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Faili ei eksisteeri',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'PhpBB installimiseks peab fail %1$s eksisteerima.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'On soovitatav, et %1$s kataloog oleks kirjutatav, paremaks foorumi kasutaja kogemuseks.',
	'FILE_NOT_WRITABLE'						=> 'Fail ei ole kirjutatav',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'PhpBB installimiseks peab fail %1$s olema kirjutatav.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'On soovitatav, et %1$s kataloog oleks kirjutatav, paremaks foorumi kasutaja kogemuseks.',

	'DIRECTORY_NOT_EXISTS'						=> 'Kataloog puudub',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'PhpBB installimiseks peab kataloog %1$s eksisteerima.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'On soovitatav, et %1$s kataloog oleks kirjutatav, paremaks foorumi kasutaja kogemuseks.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Kataloog ei ole kirjutatav',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'PhpBB installimiseks peab kataloog %1$s olema kirjutatav.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'On soovitatav, et %1$s kataloog oleks kirjutatav, paremaks foorumi kasutaja kogemuseks.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP versioon',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB vajab PHP versiooni 5.4.0 või uuemat.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() funktsioon on vajalik',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Et phpBB korralikult toimiks, peab getimagesize funktsioon olema kättesaadav.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 tugi',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB ei käivitu, kui teie PHP installi ei kompileerita PCT laienduses UTF-8 toega.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON tugi',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Et phpBB korralikult toimiks, peab PHP JSON laiend olema kättesaadav.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM tugi',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Et phpBB korralikult toimiks, peab PHP XML / DOM laiend olema kättesaadav.',
	'PHP_SUPPORTED_DB'					=> 'Toetatud andmebaasid',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'PHP-s peab olema vähemalt ühe ühilduva andmebaasi tugi. Kui andmebaasi mooduleid ei ole saadaval, võtke ühendust oma hostingu pakkujaga või vaadake abi saamiseks asjakohane PHP installi dokumentatsiooni.',

	'RETEST_REQUIREMENTS'	=> 'Testi uuesti nõudeid',

	'STAGE_REQUIREMENTS'	=> 'Kontrollige nõudeid',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Peate täitma kõik selle ploki väljad.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Installatsioon tuvastas ajalõpu',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Paigaldaja on tuvastanud ajalõpu, võite proovida lehte värskendada, mis võib põhjustada andmete uuesti sisestamise. Soovitame teil aja lõppesätteid suurendada või kasutada CLI-d.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Seadistage installimise andmed',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administraatori detailid',

	// Form labels
	'ADMIN_CONFIG'				=> 'Administraatori konfiguratsioon',
	'ADMIN_PASSWORD'			=> 'Administraatori parool',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Kinnita administraatori parool',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Sisestage 6 kuni 30 tähemärgi pikkune parool.',
	'ADMIN_USERNAME'			=> 'Administraatori kasutajanimi',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Sisestage 3 kuni 20 tähemärgi pikkune kasutajanimi.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Sisestatud e-posti aadress on kehtetu.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Sisestatud paroolid ei ole samasugused.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Sisestatud parool on liiga pikk. Maksimaalne pikkus on 30 tähemärki.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Sisestatud parool on liiga lühike. Minimaalne pikkus on 6 tähemärki.',
	'INST_ERR_USER_TOO_LONG'		=> 'Sisestatud kasutajanimi on liiga pikk. Maksimaalne pikkus on 20 tähemärki.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Sisestatud kasutajanimi on liiga lühike. Minimaalne pikkus on 3 tähemärki.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Foorumi konfiguratsioon',
	'DEFAULT_LANGUAGE'	=> 'Vaikimisi keel',
	'BOARD_NAME'		=> 'Foorumi nimetus',
	'BOARD_DESCRIPTION'	=> 'Foorumi lühikirjeldus',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Andmebaasi seaded',

	// Form labels
	'DB_CONFIG'				=> 'Andmebaasi konfiguratsioon',
	'DBMS'					=> 'Andmebaasi tüüp',
	'DB_HOST'				=> 'Andmebaasiserveri hostinimi või DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN tähistab andmeallika nime ja on asjakohane ainult ODBC installimiseks. Kasutage PostgreSQL-is kohaliku serveriga ühenduse loomiseks UNIX-i domeeni pesa kaudu ja 127.0.0.1, et luua ühendus TCP-ga. SQLite puhul sisestage oma andmebaasi faili täielik tee.',
	'DB_PORT'				=> 'Andmebaasi serveri port',
	'DB_PORT_EXPLAIN'		=> 'Jäta see tühjaks, kui te ei tea, kas server töötab mittestandardses pordis.',
	'DB_PASSWORD'			=> 'Andmebaasi parool',
	'DB_NAME'				=> 'Andmebaasi nimi',
	'DB_USERNAME'			=> 'Andmebaasi kasutajanimi',
	'DATABASE_VERSION'		=> 'Andmebaasi versioon',
	'TABLE_PREFIX'			=> 'Andmebaasis olevate tabelite prefiks',
	'TABLE_PREFIX_EXPLAIN'	=> 'Eesliide peab algama tähega ja sisaldama ainult tähti, numbreid ja alakriipse.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ kaudu ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL MySQLi laiendusega',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Andmebaasi paigaldamise viga',
	'INST_ERR_NO_DB'				=> 'PHP andmebaasi ei saa valitud andmebaasi tüübi jaoks laadida.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Sisestatud eesliide on kehtetu. See peab algama kirjaga ja sisaldama ainult tähti, numbreid ja alakriipse.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Teie määratud tabeli eesliide on liiga pikk. Maksimaalne pikkus on %d tähemärki.',
	'INST_ERR_DB_NO_NAME'			=> 'Andmebaasi nime ei ole määratud.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Määratud andmebaasifail on teie foorumi kataloogipuus. Peaksite selle faili paigutama veebisaidile, mis ei ole veebis kättesaadav.',
	'INST_ERR_DB_CONNECT'			=> 'Ei saanud andmebaasiga ühendust, vaadake allpool olevat veateadet.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Nii andmebaas kui ka seda sisaldav kataloog peavad olema kirjutatavad.',
	'INST_ERR_DB_NO_ERROR'			=> 'Veateadet ei antud.',
	'INST_ERR_PREFIX'				=> 'Kindlaksmääratud prefiksiga tabelid on juba olemas, palun valige alternatiiv.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Sellele masinale paigaldatud MySQL-i versioon ei sobi valitud MySQL-i laiendusega. Palun proovige selle asemel “MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Teie installitud SQLite laienduse versioon on liiga vana, seda tuleb uuendada vähemalt versioonile 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Sellele seadmele paigaldatud Oracle versioonile peate seadistama <var>NLS_CHARACTERSET</var> parameeter <var>UTF8</var>. Täiendage oma installi 9.2+ või muutke parameetrit.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Teie valitud andmebaas ei olnud loodud <var>UNICODE</var> või <var>UTF8</var> kodeeringusse. Proovige installida andmebaasi <var>UNICODE</var> või <var>UTF8</var> kodeeringusse.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Skeemifail ei ole kirjutatav',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-posti konfiguratsioon',

	// Package info
	'PACKAGE_VERSION'					=> 'Paketi versioon on installitud',
	'UPDATE_INCOMPLETE'				=> 'Teie phpBB installi pole õigesti värskendatud.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Vea parandamiseks lugege allpool olevat teavet.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Mittetäielik värskendus</h1>

		<p>Märkasime, et viimane teie phpBB installi värskendus ei ole lõpetatud. Külastage <a href="%1$s" title="%1$s">andmebaasi värskendajat</a> ja veenduge, et on valitud <em>uuenda ainult andmebaasi</em> ja klõpsake nuppu <strong>Edasi</strong>. Ärge unustage kustutada kataloogi "install", kui olete andmebaasi edukalt värskendanud.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Saadaval on uus funktsiooniväljund <strong>%1$s</strong>. Palun lugege <a href="%2$s" title="%2$s"><strong>avaldamise teadet</strong></a> et saada teavet selle kohta, mida ta peab pakkuma ja kuidas uuendada.',
	'SERVER_CONFIG'				=> 'Serveri konfiguratsioon',
	'SCRIPT_PATH'				=> 'Skripti tee',
	'SCRIPT_PATH_EXPLAIN'		=> 'Tee, kus phpBB asub domeeninime suhtes, nt. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Tänan, juhtkond',
	'CONFIG_SITE_DESC'				=> 'Lühike tekst, mis kirjeldab teie foorumit',
	'CONFIG_SITENAME'				=> 'sinudomeen.ee',

	'DEFAULT_INSTALL_POST'			=> 'See on näide teie phpBB3 installimisest. Kõik näib töötavat. Kui soovite, võite selle postituse kustutada ja jätkata oma foorumi loomist. Installeerimisprotsessi ajal omistatakse teie esimesele kategooriale ja esimesele foorumile sobivad õigused eelnevalt määratletud kasutajagruppide administraatoritele, robotitele, globaalsetele moderaatoritele, külalistele, registreeritud kasutajatele ja registreeritud COPPA kasutajatele. Kui valite ka oma esimese kategooria ja esimese foorumi kustutamise, siis ärge unustage määrata kõigile kasutajagruppidele õigused, kui loote uued kategooriad ja foorumid. Uute kategooriate ja foorumite loomisel on soovitatav nende esimene kategooria ümber nimetada ja nende esimene foorum ning koopiaõigused.',

	'FORUMS_FIRST_CATEGORY'			=> 'Sinu esimene kategooria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Teie esimese foorumi kirjeldus.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Sinu esimene foorum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Saidi administraator',
	'REPORT_WAREZ'					=> 'Postitus sisaldab linke ebaseaduslikule või piraattarkvarale.',
	'REPORT_SPAM'					=> 'Raporteeritud postitusel on ainus eesmärk reklaamida veebisaiti või muud toodet.',
	'REPORT_OFF_TOPIC'				=> 'Raporteeritud postitus on välja lülitatud.',
	'REPORT_OTHER'					=> 'Raporteeritud postitus ei sobi ühegi teise kategooriasse, palun kasutage lisateavet.',

	'SMILIES_ARROW'					=> 'Nool',
	'SMILIES_CONFUSED'				=> 'Segaduses',
	'SMILIES_COOL'					=> 'Äge',
	'SMILIES_CRYING'				=> 'Nutmine või väga kurb',
	'SMILIES_EMARRASSED'			=> 'Piinlik',
	'SMILIES_EVIL'					=> 'Paha või väga hull',
	'SMILIES_EXCLAMATION'			=> 'Hüüatus',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Naerame',
	'SMILIES_MAD'					=> 'Kurb',
	'SMILIES_MR_GREEN'				=> 'Hr. Roheline',
	'SMILIES_NEUTRAL'				=> 'Neutraalne',
	'SMILIES_QUESTION'				=> 'küsimus',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Silmade keerutamine',
	'SMILIES_SAD'					=> 'Kurb',
	'SMILIES_SHOCKED'				=> 'Shokeeritud',
	'SMILIES_SMILE'					=> 'Naerata',
	'SMILIES_SURPRISED'				=> 'Üllatunud',
	'SMILIES_TWISTED_EVIL'			=> 'Keeratud pagan',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Väga õnnelik',
	'SMILIES_WINK'					=> 'Silma tegema',

	'TOPICS_TOPIC_TITLE'			=> 'Teretulemast kasutama phpBB3 foorumitarkvara',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Ülevaade',
	'MENU_INTRO'		=> 'Juhend',
	'MENU_LICENSE'		=> 'Litsents',
	'MENU_SUPPORT'		=> 'Tugi',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Konfiguratsioonifaili loomine',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Konfiguratsiooniseadete lisamine',
	'TASK_ADD_DEFAULT_DATA'				=> 'Vaikimisi seadete lisamine andmebaasi',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Andmebaasi skeemi faili loomine',
	'TASK_SETUP_DATABASE'				=> 'Andmebaasi loomine',
	'TASK_CREATE_TABLES'				=> 'Tabelite loomine',

	// Install data
	'TASK_ADD_BOTS'				=> 'Botide registreerimine',
	'TASK_ADD_LANGUAGES'		=> 'Olemasolevate keelte paigaldamine',
	'TASK_ADD_MODULES'			=> 'Moodulite paigaldamine',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Otsingukoodi loomine',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Paigalda laienduste pakke',
	'TASK_NOTIFY_USER'			=> 'Teate saatmine e-postiga',
	'TASK_POPULATE_MIGRATIONS'	=> 'Rändevoogude levitamine',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Paigaldaja on edukalt lõpetanud',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Moodulit ei leitud',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Moodulit ei leitud, sest teenus %s on määratlemata.',

	'TASK_NOT_FOUND'				=> 'Ülesannet ei leitud',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Ülesannet ei leitud, sest teenus %s on määratlemata.',

	'SKIP_MODULE'	=> 'Jäta moodul “%s” vahele',
	'SKIP_TASK'		=> 'Jäta teade “%s” vahele',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Kõik paigaldaja ülesannete teenused peaksid algama “installeriga”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installeri ülesande teenuse määratlus on kehtetu. Teenuse nimetus “%1$s” on antud, eeldatav klassi nimeruum on “%2$s”. Lisateabe saamiseks vaadake dokumentatsioonist task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Installeri konfiguratsioonifail ei ole kirjutatav.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Paigalda phpBB',
	'CLI_UPDATE_BOARD'				=> 'Värskenda phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Näita kasutatavat konfiguratsiooni',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Kinnitage konfiguratsioonifail',
	'CLI_CONFIG_FILE'				=> 'Kasutatav konfigureerimisfail',
	'MISSING_FILE'					=> 'Ei leia faili %1$s',
	'MISSING_DATA'					=> 'Konfiguratsiooni failil puuduvad andmed või need võivad sisaldada kehtetuid seadeid.',
	'INVALID_YAML_FILE'				=> 'YAML faili %1$s parseerimine ei õnnestunud',
	'CONFIGURATION_VALID'			=> 'Konfiguratsioonifail on kehtiv',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Värskenda phpBB paigaldamist',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Selle valiku abil on võimalik phpBB paigaldamist värskendada.<br />Protsessi käigus kontrollitakse kõiki faile nende terviklikkuse suhtes. Enne värskendust saate vaadata kõiki erinevusi ja faile.<br /><br />Faili värskendamist saab teha kahel erineval viisil.<h2>Käsitsi värskendamine</h2>Selle värskendusega saate allalaadida ainult oma muudetud failide kogumi, veendumaks, et te ei kaota oma failimuudatusi. Pärast selle paketi allalaadimist peate failid käsitsi üles laadima oma õigesse asukohta phpBB juurkataloogis. Kui olete seda teinud, saate uuesti kontrollida faili kontrollimise etappi, et näha, kas failid on õigesse asukohta paigutatud.<h2>Automaatne värskendus FTP-ga</h2>See meetod on sarnane esimesele, kuid muutmata faile ei ole vaja allalaadida ja neid ise üles laadida. Seda tehakse teie eest. Selle meetodi kasutamiseks peate teadma oma FTP sisselogimise andmeid. Kui olete lõpetanud, suunatakse teid uuesti failikontrolli, veendumaks, et kõik on õigesti uuendatud.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Väljalaske teadaanne</h1>

		<p>Enne värskendamisprotsessi jätkamist lugege uuema versiooni avaldamist, see võib sisaldada kasulikku teavet. Samuti sisaldab see täielikke allalaadimise linke ning muudatuste logi.</p>

		<br />

		<h1>Kuidas värskendada oma foorumit täispaketiga</h1>

		<p>Paigaldamise soovitatav viis on kasutada täielikku paketti. Kui phpBB põhilisi faile on teie installis muudetud, võite nende muudatuste kaotamiseks kasutada automaatset värskenduspaketti. Te saate ka oma installi värskendada, kasutades teisi INSTALL.html dokumendis loetletud meetodeid. phpBB3 värskendamine täieliku paketti abil:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Varundage kõik foorumil olevad failid ja andmebaas.</strong></li>
			<li>Mine <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com allalaadimiste lehele</a> ja laadige alla viimane "Täielik pakett".</li>
			<li>Pakkige arhiiv lahti.</li>
			<li>Eemaldage (kustutage) <code class="inline">config.php</code> fail ning lisaks <code class="inline">/images</code>, <code class="inline">/store</code> ja <code class="inline">/files</code> kaustad <em>allalaaditud pakist</em> (mitte serverist).</li>
			<li>Mine AJP, Foorumi seaded ja veendu, et vaikimisi stiiliks oleks Prosilver. Kui ei ole, määra selleks Prosilver.</li>
			<li>Kustuta <code class="inline">/vendor</code> ja <code class="inline">/cache</code> kaustad oma foorumi juurkataloogist serveris.</li>
			<li>FTP või SSH abil laadige allesjäänud failid ja kaustad serveris oleva foorumi juurkausta ning kirjuta olemasolevad failide üle. (Märkus: hoolitsege selle eest, et te ei kustutaks oma laienduste <code class="inline">/ext</code> kausta.)</li>
			<li><strong><a href="%1$s" title="%1$s">Nüüd käivitage värskendusprotsess, suunates oma brauseri installikataloogi</a>.</strong></li>
			<li>Järgige samme, et värskendada andmebaasi ja lasta see lõpetada.</li>
			<li>FTP või SSH abil kustutage <code class="inline">/install</code> kaust serveris asuva phpBB juurkataloogist.<br><br></li>
		</ol>
		
		<p>Nüüd on teil uus ajakohane foorum, mis sisaldab kõiki teie kasutajaid ja postitusi. Järelmeetmed:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Uuenda oma keelepaketti</li>
			<li>Uuenda oma stiili<br><br></li>
		</ul>

		<h1>Kuidas värskendada foorumit automaatse uuendamise paketiga</h1>

		<p>Automaatne värskenduspakett on soovitatav ainult juhul, kui teie foorumis on muudetud põhilisi phpBB faile. Samuti saate oma foorumit värskendada INSTALL.html dokumendis loetletud meetodite abil. phpBB3 värskendamise sammud automaatse värskenduspaketi abil on:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Minge <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com allalaadimiste lehele</a> ja laadige alla "Automaatse uuendamise pakk".</li>
			<li>Paki arhiiv lahti.</li>
			<li>Laadige täielikud lahtipakitud "install" ja "vendor" kaustad oma phpBB juurkataloogi (kus asub config.php fail).<br><br></li>
		</ol>

		<p>Pärast üleslaadimist on teie foorum tavakasutajate jaoks kättesaamatu, sest install kataloog on üles laaditud.<br /><br />
		<strong><a href="%1$s" title="%1$s">Nüüd käivitage värskendusprotsess, suunates oma brauser installikataloogi</a>.</strong><br />
		<br />
		Seejärel juhitakse värskendusprotsessi. Kui värskendus on lõpetatud, siis sellest teid teavitatakse.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Käivitatava värskenduse tüüp',

	'UPDATE_TYPE_ALL'		=> 'Uuenda failisüsteemi ja andmebaasi',
	'UPDATE_TYPE_DB_ONLY'	=> 'Uuenda ainult andmebaasi',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Faili värskendaja meetodid',

	'UPDATE_FILE_METHOD'			=> 'Faili värskendaja meetod',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Lae muudetud failid arhiivi',
	'UPDATE_FILE_METHOD_FTP'		=> 'Failide värskendamine FTP kaudu (automaatne)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Failide värskendamine otsese juurdepääsu kaudu (automaatne)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Valige allalaadimise arhiivivorming',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP seaded',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Kehtivat värskenduste kataloogi ei leitud, palun veenduge, et laadisite üles vastavad failid.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Teie versioon on ajakohane. Uuendustööriista ei ole vaja käivitada. Kui soovite oma failide korrasoleku kontrolli teha, siis veenduge, et laadisite üles õiged värskendusfailid.',
	'OLD_UPDATE_FILES'				=> 'Uuendusfailid on aegunud. Leitud värskendefailid on värskendamiseks saadaval phpBB %1$s värskendamiseks phpBB %2$s -le kuid phpBB uusim versioon on %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Leitud värskendusfailid on teie installitud versiooniga vastuolus. Teie installitud versioon on %1$s ja värskendusfail on mõeldud phpBB %2$s värskendamiseks %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Failide värskendamine',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Kontrollige värskendatavaid faile',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Faili %s ebaõnnestus.',

	'UPDATE_FILE_DIFF'		=> 'Muudetud failide hajutamine',
	'ALL_FILES_DIFFED'		=> 'Kõik muudetud failid on hajutatud.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Failide värskendamine',

	'DOWNLOAD'							=> 'Lae alla',
	'DOWNLOAD_CONFLICTS'				=> 'Allalaadimise ühendamise konfliktide arhiiv',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Otsi &lt;&lt;&lt; konfliktide avastamiseks',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Lae muudetud failide arhiiv alla',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Allalaadimise järel peaksite arhiivi pakkima. Leiad muudetud failid, mida peate oma phpBB juurkataloogi üles laadima. Seejärel laadige failid oma vastavatesse asukohtadesse. Kui olete kõik failid üles laadinud, võite värskendusprotsessi jätkata.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fail on juba ajakohane.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Fail ei tohi erineda.',
	'FILE_USED'						=> 'Kasutatav teave',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktifailid',
	'FILES_CONFLICT_EXPLAIN'		=> 'Järgmisi faile muudetakse ja need ei esinda vana versiooni originaalfaile. phpBB otsustas, et need failid loovad konflikte, kui neid üritatakse ühendada. Kui lahendate konfliktid käsitsi, kontrollige faile pärast nende muutmist uuesti. Samuti on teil võimalik valida eelistatud ühendamismeetodi vahel iga faili jaoks. Esimeseks tulemuseks on fail, kus teie vana faili vastuolulised jooned kaovad, teine kaotab muudatused uuemast failist.',
	'FILES_DELETED'					=> 'Kustutatud failid',
	'FILES_DELETED_EXPLAIN'			=> 'Uues versioonis ei ole järgmisi faile. Need failid tuleb teie installist kustutada.',
	'FILES_MODIFIED'				=> 'Muudetud failid',
	'FILES_MODIFIED_EXPLAIN'		=> 'Järgmisi faile muudetakse ja need ei esinda vana versiooni originaalfaile. Värskendatud fail on teie muudatuste ja uue faili ühendamine.',
	'FILES_NEW'						=> 'Uued failid',
	'FILES_NEW_EXPLAIN'				=> 'Järgmised failid ei ole teie installimises praegu olemas. Need failid lisatakse teie installimisse.',
	'FILES_NEW_CONFLICT'			=> 'Uued vastuolulised failid',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Järgmised failid on viimases versioonis uued, kuid on kindlaks tehtud, et samas asukohas on juba sama nimega fail. Uus fail kirjutab selle faili üle.',
	'FILES_NOT_MODIFIED'			=> 'Muutmata failid',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Järgmisi faile ei muudeta ja need esindavad esialgseid phpBB faile versioonist mida soovite uuendada.',
	'FILES_UP_TO_DATE'				=> 'Juba uuendatud failid',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Järgmised failid on juba ajakohased ja neid ei ole vaja uuendada.',
	'FILES_VERSION'					=> 'Failide versioon',
	'TOGGLE_DISPLAY'				=> 'Failide loendi vaatamine/peitmine',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Failide värskendamine',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Faili värskendaja “%1$s“ on ebaõnnestunud. Paigaldaja üritab varundada “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Faili värskendaja ebaõnnestus. Täiendavaid asendusmeetodeid ei ole.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Jätkake värskendamise protsessi',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Kontrollige faile uuesti',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Andmebaasi värskendamine',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Andmebaasi uuendamine oli edukas.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Laienduste värskendamine',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Määratud konvertorit ei eksisteeri.',
	'DEV_NO_TEST_FILE'			=> 'Konverteris ei ole test_file muutuja jaoks väärtust määratud. Kui olete selle konverteri kasutaja, ei tohiks te seda viga näha, palun teatage sellest sõnumist konverteri autorile. Kui olete konverteri autor, peate määrama allika foorumil oleva faili nime, et võimaldada selle tee kinnitamist.',
	'COULD_NOT_FIND_PATH'		=> 'Teie endise foorumi teed ei leitud. Kontrollige oma seadeid ja proovige uuesti.<br />» %s on määratud lähtekanaliks.',
	'CONFIG_PHPBB_EMPTY'		=> '“%s” phpBB3 konfiguratsiooni muutuja on tühi.',

	'MAKE_FOLDER_WRITABLE'		=> 'Veenduge, et see kaust on olemas ja on veebiserverile kirjutatav, siis proovige uuesti:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Veenduge, et need kaustad on olemas ja need oleksid veebiserverile kirjutatavad, siis proovige uuesti:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Testige uuesti',

	'NO_TABLES_FOUND'			=> 'Tabeleid ei leitud.',
	'TABLES_MISSING'			=> 'Neid tabeleid ei leitud<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Palun kontrollige oma tabeli eesliidet ja proovige uuesti.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Jätka konversiooni',
	'CONTINUE_CONVERT_BODY'		=> 'Varasem konversiooni katse on määratud. Nüüd saate valida uue konversiooni alustamise või konversiooni jätkamise vahel.',
	'CONVERT_NEW_CONVERSION'	=> 'Uus konversioon',
	'CONTINUE_OLD_CONVERSION'	=> 'Jätkake varem alustatud konversiooni',

	// Start conversion
	'SUB_INTRO'					=> 'Sissejuhatus',
	'CONVERT_INTRO'				=> 'Tere tulemast phpBB ühtse konverteri raamistikku',
	'CONVERT_INTRO_BODY'		=> 'Siit saate importida andmeid teistest (paigaldatud) foorumisüsteemidest. Alltoodud loend näitab kõiki hetkel saadaval olevaid konversioonimooduleid. Kui selles nimekirjas ei ole konverterit, mida soovite kasutada, siis vaadake meie veebisaiti, kus täiendavad konversioonimoodulid on allalaadimiseks saadaval.',
	'AVAILABLE_CONVERTORS'		=> 'Saadaolevad konverterid',
	'NO_CONVERTORS'				=> 'Konvertereid pole võimalik kasutada.',
	'CONVERT_OPTIONS'			=> 'Valikud',
	'SOFTWARE'					=> 'Foorumi tarkvara',
	'VERSION'					=> 'Versioon',
	'CONVERT'					=> 'Konvert',

	// Settings
	'STAGE_SETTINGS'			=> 'Seaded',
	'TABLE_PREFIX_SAME'			=> 'Tabeli eesliide peab olema selline, mida kasutab teisendatav tarkvara.<br />» Määratud tabeli eesliide oli %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konverter ei suutnud leida prefiksiga tabeleid. Palun veenduge, et olete sisestanud korrektse detaili, mida soovite teisendada. %1$s vaikimisi tabeli eesliide on <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Täpsustage teisendusvalikud',
	'FORUM_PATH'				=> 'Foorumi tee',
	'FORUM_PATH_EXPLAIN'		=> 'See on <strong>suhteline</strong> tee oma endisele foorumile <strong>selle phpBB3 installi juurest</strong>.',
	'REFRESH_PAGE'				=> 'Uuendamise jätkamiseks värskenda lehte',
	'REFRESH_PAGE_EXPLAIN'		=> 'Kui jah, siis värskendab konverter lehekülge, et jätkata konversiooni pärast sammu lõpetamist. Kui see on teie esimene testimise eesmärgil tehtud konversioon ja et teha eelnevalt kindlaks võimalikud vead, soovitame selle seadistada väärtusele Ei.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konversioon on pooleli',

	'AUTHOR_NOTES'				=> 'Autor märgib<br />» %s',
	'STARTING_CONVERT'			=> 'Teisendamisprotsessi alustamine',
	'CONFIG_CONVERT'			=> 'Konfiguratsiooni teisendamine',
	'DONE'						=> 'Valmis',
	'PREPROCESS_STEP'			=> 'Eeltöötluse funktsioonide/päringute teostamine',
	'FILLING_TABLE'				=> 'Tabeli täitmine <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Tabelite täitmine',
	'DB_ERR_INSERT'				=> '<code>INSERT</code> päringu töötlemisel tekkis viga.',
	'DB_ERR_LAST'				=> 'Viga <var>query_last</var> töötlemisel.',
	'DB_ERR_QUERY_FIRST'		=> 'Viga <var>query_first</var> täitmisel.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Viga <var>query_first</var>, %s (“%s”) täitmisel.',
	'DB_ERR_SELECT'				=> '<code>SELECT</code> päringu käivitamisel ilmnes viga.',
	'STEP_PERCENT_COMPLETED'	=> 'Samm <strong>%d</strong>  <strong>%d</strong>',
	'FINAL_STEP'				=> 'Protsessi viimane samm',
	'SYNC_FORUMS'				=> 'Foorumite sünkroonimine',
	'SYNC_POST_COUNT'			=> 'post_counts sünkroniseerimine',
	'SYNC_POST_COUNT_ID'		=> 'post_counts sünkroniseerimine kirjest <var>entry</var> %1$s kuni %2$s.',
	'SYNC_TOPICS'				=> 'Teemade sünkrooniseerimise alustamine',
	'SYNC_TOPIC_ID'				=> 'Teemade sünkroniseerimine <var>topic_id</var> %1$s kuni %2$s.',
	'PROCESS_LAST'					=> 'Viimaste avalduste töötlemine',
	'UPDATE_TOPICS_POSTED'		=> 'Teemasid genereeriti',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Teabe genereerimisel ilmnes viga. Pärast konversiooniprotsessi lõppu saate AJP-s seda sammu uuesti proovida.',
	'CONTINUE_LAST'				=> 'Jätka viimaseid avaldusi',
	'CLEAN_VERIFY'				=> 'Lõpliku struktuuri puhastamine ja kontrollimine',
	'NOT_UNDERSTAND'			=> '%s #%d, tabel %s (“%s”) ei saanud aru',
	'NAMING_CONFLICT'			=> 'Nimetamise konflikt: %s ja %s on mõlemad varjunimed<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konversioon on lõpetatud',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Olete nüüd edukalt konverteerinud oma foorumi phpBB 3.2 peale. Nüüd saate sisse logida ja <a href="../">juurdepääsu oma foorumile</a>. Veenduge, et seaded oleksid õigesti seadistatud, enne, kui lubate oma foorumi installimise kataloogi kustutada. Pidage meeles, et abi phpBB kasutamisel on saadaval veebi kaudu <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">Dokumentatsioon</a> ja <a href="https://www.phpbb.com/community/viewforum.php?f=466">toe foorumid</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP kaudu manuste üleslaadimine on vanas foorumis lubatud. Palun keelake FTP üleslaadimise valik ja veenduge, et on määratud kehtiv üleslaadimise kataloog, seejärel kopeerige kõik manusefailid sellesse uude veebipõhistesse kataloogidesse. Kui olete seda teinud, taaskäivitage konverter.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Konversiooni jaoks pole konfiguratsiooniteavet saadaval.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Foorumi juurdepääsu teavet ei ole võimalik saada.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kategooriaid ei ole võimalik saada.',
	'CONV_ERROR_GET_CONFIG'				=> 'Teie foorumi konfiguratsiooni ei õnnestunud alla laadida.',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” ei saa juurde pääseda/lugeda.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Grupi autentimisandmeid ei ole võimalik saada.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Vasturääkivus rühmade tabelis, mis on tuvastatud add_bots() - kui soovite seda käsitsi teha, peate lisama kõik erirühmad.',
	'CONV_ERROR_INSERT_BOT'				=> 'Botti kasutajate tabelisse ei saa sisestada.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Botti ei saa botide tabelisse sisestada.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kasutajat user_group tabelisse ei saa sisestada.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Sõnumi parser viga',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Märkus arendajale: %s kasutamiseks tuleb määrata $konverter[\'avatar_path\'].',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Foorumi suhtelist teed pole täpsustatud.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Märkus arendajale: %s kasutamiseks tuleb määrata $konverter[\'avatar_gallery_path\'].',
	'CONV_ERROR_NO_GROUP'				=> 'Rühma “%1$s” ei leitud %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Märkus arendajale: %s kasutamiseks tuleb määrata $konverter[\'ranks_path\'].',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Märkus arendajale: %s kasutamiseks tuleb määrata $konverter[\'smilies_path\'].',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Märkus arendajale: %s kasutamiseks tuleb määrata $konverter[\'upload_path\'].',
	'CONV_ERROR_PERM_SETTING'			=> 'Õiguste seadistust ei saa lisada/värskendada.',
	'CONV_ERROR_PM_COUNT'				=> 'Kausta pm arvu ei saa valida.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Uues foorumis ei saa vana kategooriat asendada.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Uut foorumit ei saa asendada vana foorumi asendamisega.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kasutaja autentimisteavet ei ole võimalik saada.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Vale grupp “%1$s” defineeritud %2$s.',
	'CONV_OPTIONS_BODY'					=> 'See lehekülg kogub andmeid, mis on vajalikud foorumile pääsemiseks. Sisestage oma endise foorumi andmebaasi andmed; konverter ei muuda midagi allpool esitatud andmebaasis. Järjepideva konversiooni võimaldamiseks peaks lähtekoht olema keelatud.',
	'CONV_SAVED_MESSAGES'				=> 'Salvestatud sõnumid',

	'PRE_CONVERT_COMPLETE'			=> 'Kõik eel konversioonijärgsed sammud on edukalt lõpule viidud. Nüüd võite alustada tegelikku konversiooniprotsessi. Pange tähele, et peate võib-olla käsitsi tegema ja korrigeerima mitmeid asju. Pärast konversiooni kontrollige määratud õigusi, taastage oma otsinguindeks, mida ei konverteerita ning veenduge, et failid oleksid õigesti kopeeritud, näiteks avatarid ja emotikonid.',
));
