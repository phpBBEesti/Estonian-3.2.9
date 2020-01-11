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
 * @author       phpBB Estonia
 * @copyright    phpBB Estonia <Exabot>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Seadista antud valik, kui konfiguratsiooni valikud liiga tihedasti muutuvad, et tõhusalt puhverdada.',
	'CLI_CONFIG_CURRENT'				=> 'Kasutatavad konfiguratsiooni väärtused, kasuta 0 ja 1, et täpsustada booleani väärtused',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfiguratsioon %s on edukalt kustutatud.',
	'CLI_CONFIG_NEW'					=> 'Uus konfiguratsiooni väärtus, kasuta 0 ja 1, et täpsustada booleani väärtused',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfiguratsioon %s ei eksisteeri',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfiguratsiooni valiku nimi',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Seadista see valik, kui väärtust tuleb printed ilma uue reata lõppu.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Juurdekasvu kogus',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Edukalt kasvatatud konfiguratsioon %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Ei õnnestunud seadistada konfiguratsiooni %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Edukalt seadistatud konfiguratsioon %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Nimekiri juba valmis, ning mitte valmis olevatest cron töödest.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Käivitab kõik valmis olevad cron ülesanded.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Ülesande nimi, mida tuleb käivitada',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Nimekiri kõikidest paigaldatud ja saadaval olevatest migratsioonidest.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uuendan andmebaasi kohaldades migratsiooni.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Taasta migratsioon.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Kustutab konfiguratsiooni valikud',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Keelab määratud laienduse.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Lubab määratud laienduse.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Leiab migratsiooni, mis ei ole sõltuv.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Parandab puu struktuuri foorumites ja moodulites.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Saab konfiguratsiooni valiku väärtuse',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Kasvatab konfiguratsiooni valiku väärtust täisarvuni',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Nimekiri kõikidest laiendustest andmebaasis ja failisüsteemis.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Keskkonna nimi.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Käivita turvalises režiimis ehk Safe Mode (ilma laiendusdeta).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Käivita shell\'is.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Puhastab määratletud laienduse.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Tüüpide nimekiri tekstist mida saab ümberkorraldada.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Saadaval ümberkorraldus (reparse):',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparses salvestatud teksti koos praeguse text_formatter teenustega.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Sisesta tekst mida reparse. Jäta tühjaks, et reparse kõik.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Ära salvesta mitte ühtegi muudatust; Lihtsalt näita, mis juhtus',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Väikseim kirje ID töötlemiseks',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Kürgeim kirje ID töötlemiseks',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Ligikaudne arv kirjeid töötlemaks ajal',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Alusta reparsing kus viimane käivitus lõppes',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Arvutab ümber user_email_hash kolumni andmebaasi tabelis kasutajad.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Seadistab konfiguratsiooni valikud ainult siis kui vanad kattuvad hekteväärtustele',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Seadistab konfiguratsiooni valiku väärtused',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Kustuta kõik olemasolevad pisipildid ehk thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Genereeri kõik kadunud pisipildid.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Loo uuesti kõik pisipildid.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Kontrolli kas foorum on ajakohane.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Laienduse nimi kontrollimaks (kui kõik, siis märgi kõik laiendused)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Käivita kontroll käsk koos vahemäluga.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Käivita käsk valides kontrolli ainult stabiilset või mitte stabiilseid versioone.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Uuendab aegunud parooli räsid bcryptitud räsideks.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" peab määrama kas "stabiilne" või "mitte stabiilne".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktiveeri (või deaktiveeri) kasutaja konto.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Konto kasutajanimi on aktiveeritud.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deaktiveeri kasutaja(te) konto',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Kasutaja on juba aktiveeritud.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Kasutaja on juba deaktiveeritud.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Lisa uus kasutaja.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Uue kasutaja kasutajanimi',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Uue kasutaja parool',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Uue kasutaja e-posti aadress',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Saada konto aktiveerimise informatsioon uue kasutaja e-posti aadressile (vaikimisi ei saadeta)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Kustuta kasutaja konto.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Kasutaja kasutajanimi kustutamiseks',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Kustuta kõik kasutaja poolt tehtud postitused. Ilma selle valikuta säilitatakse kasutaja postitused.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Taaspuhasta kasutajanimed.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ei õnnestunud keelata laiendust %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Edukalt keelatud laiendus %s',
	'CLI_EXTENSION_DISABLED'			=> 'Laiendus %s ei ole lubatud',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ei õnnestunud lubada laiendust %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Laiendus %s edukalt lubatud',
	'CLI_EXTENSION_ENABLED'				=> 'Laiendus %s on juba aktiveeritud',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Laiendust %s ei eksisteeri',
	'CLI_EXTENSION_NAME'				=> 'Laienduse nimi',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ei õnnestunud puhastada laiendust %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Edukalt puhastatud laiendus %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Ei õnnestunud uuendada laiendust %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Edukalt uuendatud laiendus %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ühtegi laiendust ei leitud.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Laiendus %s ei ole lubatud.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Saadaval',
	'CLI_EXTENSIONS_DISABLED'			=> 'Keelatud',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiveeritud',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Foorumite ja moodulite puu struktuur on edukalt parandatud.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'E-posti aadressi räsid on edukalt ümber arvutatud.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Edukalt uuendatud aegunud parooli räsid bcryptiks.',

	'CLI_MIGRATION_NAME'					=> 'Migratsiooni nimi, sisaldades nimeruumi (kasuta kaldkriipsu, ning mitte tagurpidi kaldkriipsu, et vältida probleeme).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Saadaval migratsioon',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Paigaldatud migratsioon',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Näita ainult saadaval migratsioone',
	'CLI_MIGRATIONS_EMPTY'                  => 'Pole migratsioone.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Ümberkujundamine %1$s (vahemik %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Ümberkujundamine %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Ümberkujundamine on lõppenud edukalt',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) kustutatud.',
	'CLI_THUMBNAIL_DELETING'	=> 'Kustutan pisipilte',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) vahele jäetud.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) genereeritud.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Genereerin pisipilte',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Kõik pisipildid on genereeritud.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Kõik pisipildid on kustutatud.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Pole ühtegi pisipilti genereerida.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Pole ühtegi pisipilti kustutada.',

	'CLI_USER_ADD_SUCCESS'		=> 'Edukalt lisatud kasutaja %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada ‘%s’? [Jah/Ei]',
	'CLI_USER_RECLEAN_START'	=> 'Kasutajanimede uuesti puhastamine',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Uuesti puhastamine lõpetatud. Ühtegi kasutajanime ei olnud vaja puhastada.',
		1	=> 'Uuesti puhastamine lõpetatud. %d kasutajanimi on puhastatud.',
		2	=> 'Uuesti puhastamine lõpetatud. %d kasutajanime on puhastatud.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Valikulisena Sa saad määratleda cron ülesande nime, et käivitada ainult spetsiifiline cron ülesanne.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktiveeri kasutajakonto või deaktiveeri kasutades <info>--keela</info> valikut.
Valikuliselt saada aktiveerimis e-kiri kasutajale, kasutades <info>--saada e-kiri</info> valikut.',
	'CLI_HELP_USER_ADD'			=> 'Käsk <info>%command.name%</info> lisab uue kasutaja:
Kui see käsk käivitatakse ilma valikuta, siis saad kohe sisestada need.
Valikuliselt saada aktiveerimis e-kiri kasutajale, kasutades <info>--saada e-kiri</info> valikut.',
	'CLI_HELP_USER_RECLEAN'		=> 'Taas puhasta kasutajanimed kontrollib kõik salvestatud kasutajanimed, ning kindustab et puhtad versioonid neist on salvestatud. Puhastatud kasutajanimed on tõusutundetu vormis, normaliseeritud NFC-na ja muundatud ASCII-sse.',
));
