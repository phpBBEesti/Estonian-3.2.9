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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink seaded',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink on kolmanda osapoole teenus, mis aitab raha teenida. Sa võid ise sellega tegeleda või raha annetada phpBB-le. phpBBeesti poolt informatsioon: Räägi kaasa tõlkearendamisele!',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Sa võid need seaded igal ajal muuta läbi “<a href="%1$s">VigLink seadete</a>” paneeli.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Sind ei suunata ümber sellele leheküljele, mil sisestad oma eelistused all, ning vajutad nuppu Saada.',
	'ACP_VIGLINK_ENABLE'			=> 'Aktiveeri VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktiveeri VigLink teenused.',
	'ACP_VIGLINK_EARNINGS'			=> 'Taotle oma tulu (valikuline)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Sa võid taodelda oma tulu registreerudes VigLink konto omale.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink teenused ei ole aktiveeritud phpBB poolt.',
	'ACP_VIGLINK_CLAIM'				=> 'Taotle oma tulu',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Sa võid taodelda oma tulu foorumi tulu kohta VigLingilt, ilma et annetaksid selle phpBB projekti. Et hallata oma konto seadeid, selleks registreeru VigLink kasutajakonto, ning vajuta konverteeri konto.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konverteeri konto',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink konverdi konto linki ei leitud.',
));
