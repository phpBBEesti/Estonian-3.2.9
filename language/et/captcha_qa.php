<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2020 Estonian translation group.
*
* This file is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @package      Estonian
* @author       phpBB Estonia
* @copyright    phpBB Estonia <Exabot>
* @license      http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'See küsimus võimaldab ennetada automaatseid sisestusi.',
	'CONFIRM_QUESTION_WRONG'	=> 'Sisestasid ebakorrektse kinnitusküsimuse.',
	'CONFIRM_QUESTION_MISSING'	=> 'Kontrollküsimust CAPTCHA jaoks ei õnnestunud kuvada. Palun võtke ühendust foorumi administraatoriga.',

	'QUESTION_ANSWERS'			=> 'Vastused',
	'ANSWERS_EXPLAIN'			=> 'Palun sisesta lubatavad vastused küsimusele, üks iga rea kohta.',
	'CONFIRM_QUESTION'			=> 'Küsimus',

	'ANSWER'					=> 'Vastus',
	'EDIT_QUESTION'				=> 'Muuda küsimust',
	'QUESTIONS'					=> 'Küsimused',
	'QUESTIONS_EXPLAIN'			=> 'Iga vormi esitamise puhul, kus olete Q&amp;A plugina sissesülitanud, siis kasutajatelt küsitakse ühte täpsustatud küsimust. Selle plugina kasutamiseks tuleb vähemalt üks küsimus määrata vaikekeeleks. Nendele küsimustele peaks olema sihtgrupile lihtne vastata, kuid see ei tohi olla liiga lihtne, et bot selle leiaks, kes on võimeline Google ™ otsingut kasutama. Ainult üks õige küsimus on vajalik. Kui hakate rämpsposti raporteid saama, tuleb küsimust muuta. Lülitage seade sisse, kui teie küsimus tugineb segakasutusele, kirjavahemärkidele või tühikutele.',
	'QUESTION_DELETED'			=> 'Küsimus kustutatud',
	'QUESTION_LANG'				=> 'Keel',
	'QUESTION_LANG_EXPLAIN'		=> 'Keel, milles see küsimused ja tema vastused on kirjutatud.',
	'QUESTION_STRICT'			=> 'Range kontroll',
	'QUESTION_STRICT_EXPLAIN'	=> 'Kui lubatud, eristatakse suurtähti ja tühikuid.',

	'QUESTION_TEXT'				=> 'Küsimus',
	'QUESTION_TEXT_EXPLAIN'		=> 'Küsimus, mis esitatakse registreerumisel.',

	'QA_ERROR_MSG'				=> 'Palun täida kõik väljad ja sisesta vähemalt üks vastus.',
	'QA_LAST_QUESTION'			=> 'Sa ei saa kustutada kõiki küsimus, kuni moodul on aktiivne.',
));
