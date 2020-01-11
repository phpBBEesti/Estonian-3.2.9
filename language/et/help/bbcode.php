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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Piltide näitamine postituses',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Sissejuhatus',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Linkide loomine',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Nimekirjade loomine',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Muud küsimused',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Tsiteerimine ja kindlaksmääratud laiusega teksti kuvamine',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Teksti kujundamine',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Manuseid saab postitada igasse postituse osasse kasutades uut <strong>[attachment=][/attachment]</strong> BBkoodi, kui manuste funktsionaalsus on võimaldatud foorumi administraatori poolt ja kui sul on õigus teha manused. Postitamise lehel on eraldi koht manuste postitamiseks (Tavaliselt nupuna või menüüna).',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Manuste lisamine postitusse',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBkoodi abil saad automaatselt oma postitusse pilte kuvada. Pilt peab juba olema kuskil serveris olemas (sa ei saa pilte kuvada oma arvutist). Pildi näitamiseks pead URLi ümbritsema <strong>[img][/img]</strong> märgenditega. Näiteks:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Nagu üleval märgitud saad sa pildist ka lingi teha kasutades selleks <strong>[url][/url]</strong> märgendit, näiteks <br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />kuvab:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Pildi lisamine postitusse',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBkood on lihtsam viis HTML koodi kirjutamiseks. See, kas sa saad kasutada BBkood-i foorumis, on otsustatud saidi administraatori poolt. Igal postitusel võib ka ükshaaval keelata BBkoodi. BBkood on sarnane keel HTML-iga, kuid märgendid on nurksulgudes [ ja ] see annab parema kontrolli selle üle, kuidas ja mis on kuvatud. BBkoodi lisamine klikitavate nuppude (sõnumi ankeedi kohal) abil on aga veelgi lihtsam. Alljärgnev õpetus õpetab kuidas BBkoodi kasutada.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Mis on BBkood?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'Phpbb toetab mitmeid viise linkide ja URLide tegemiseks.<ul><li>Esiteks on võimalik kasutada <strong>[url=][/url]</strong> märgendeid; kõik, mis sa peale = trükid, kuvatakse URLina. Näiteks link phpBB kodulehele näeks href="email välja:<br /><br /><strong>[url="https://www.phpbb.com/"]</strong>phpBB<strong>[/url]</strong><br /><br />See looks järgneva lingi: <a href="https://www.phpbb.com/" target="_blank">Külasta phpBB.com veebilehte!</a>. Lingid avanevad uues aknas, et see ei segaks foorumi lugemist.</li><li>URLi enda näitamist lingina tuleb seda teha nii:<br /><br /><strong>[url]</strong>https://phpbb.com/<strong>[/url]</strong><br /><br />See kuvab järgneva lingi: <a href="https://www.phpbb.com/" target="_blank">https://www.phpbb.com/</a></li><li>phpBB oskab ka ise korrektselt kirjutatud aadresse linkideks muuta. Näiteks kirjutades www.phpbb.com teatesse, kuvatakse see automaatselt <a href="https://www.phpbb.com/" target="_blank">www.phpbb.com</a>.</li><li>Sama asi kehtib ka e-postiaadresside kohta; sa saad ise e-posti täpsustada, näiteks:<br /><br /><strong>[email]</strong>mitte.kellegi@domeen.adr<strong>[/email]</strong><br /><br />mille tulemus on <a href="mailto:mitte.kellegi@domeen.adr">mitte.kellegi@domeen.adr</a> või siis kirjuta lihtsalt mitte.kellegi@domeen.adr oma postitusse ja see muudetakse automaatselt.</li></ul>Linke saab vabalt panna ka piltide ümber (loe järgmist paragrahvi). Ka siin pead ise kontrollima, et tag´id oleksid korrektselt suletud. Näiteks:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/images/logo.png<strong>[/url][/img]</strong><br /><br /> <u>ei</u> ole õige!',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Viitamine teisele lehele',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Sellega saad kontrollida, mis on iga nimekirja punkti ees. Kasuta <strong>[list=1][/list]</strong> et nimekiri nummerdada või <strong>[list=a][/list]</strong>, et seda tähtedega tähistada. Iga punkti ette peab samuti panema <strong>[*]</strong>. Näiteks:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Poodi<br /><strong>[*]</strong>Uue arvuti ostmine<br /><strong>[*]</strong>Arvuti sõimamine, kui see kokku jookseb<br /><strong>[/list]</strong><br /><br />kuvab järgneva:<ol style="list-style-type: decimal;"><li>Poodi</li><li>Uue arvuti ostmine</li><li>Arvuti sõimamine, kui see kokku jookseb</li></ol>Tähtedega nimekirja puhul kasutaksid sa:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Vastus1<br /><strong>[*]</strong>Vastus2<br /><strong>[*]</strong>Vastus3<br /><strong>[/list]</strong><br /><br /> ning selle tulemus oleks <ol style="list-style-type: lower-alpha"><li>Vastus1</li><li>Vastus2</li><li>Vastus3</li></ol>

		<br /><strong>[list=A]</strong><br /><strong>[*]</strong>Esimene võimalik vastus<br /><strong>[*]</strong>Teine võimalik vastus<br /><strong>[*]</strong>Kolmas võimalik vastus<br /><strong>[/list]</strong><br /><br />annab<ol style="list-style-type: upper-alpha"><li>Esimene võimalik vastus</li><li>Teine võimalik vastus</li><li>Kolmas võimalik vastus</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Esimene võimalik vastus<br /><strong>[*]</strong>Teine võimalik vastus<br /><strong>[*]</strong>Kolmas võimalik vastus<br /><strong>[/list]</strong><br /><br />annab<ol style="list-style-type: lower-roman"><li>Esimene võimalik vastus</li><li>Teine võimalik vastus</li><li>Kolmas võimalik vastus</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Esimene võimalik vastus<br /><strong>[*]</strong>Teine võimalik vastus<br /><strong>[*]</strong>Kolmas võimalik vastus<br /><strong>[/list]</strong><br /><br />annab<ol style="list-style-type: upper-roman"><li>Esimene võimalik vastus</li><li>Teine võimalik vastus</li><li>Kolmas võimalik vastus</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Järjestatud nimekirja tegemine',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'Järjestamata nimekirja loomiseks kasuta <strong>[list][/list]</strong> ja defineeri iga osa kasutades <strong>[*]</strong>. Näiteks värvide nimekirja tegemiseks kasuta:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Punane<br /><strong>[*]</strong>Sinine<br /><strong>[*]</strong>Kollane<br /><strong>[/list]</strong><br /><br />See teeb järgneva nimekirja:<ul><li>Punane</li><li>Sinine</li><li>Kollane</li></ul><br />Alternatiivina võid kasutada ka nimekirja loomiseks järgmist stiili <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> või <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Järjestamata nimekirja tegemine',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Kui sa oled foorumi administraator ja sul on kindlad õigused, siis peaksid saama lisada BBkoode läbi Custom BBkood sektsiooni.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Kas ma saan lisada oma märgendeid ("tag\'e")?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Kui sa tahad kuvada koodi või midagi muud, mis nõuab kindlaksmääratud tekstilaiust, kasuta <strong>[code]</strong> ja <strong>[/code]</strong> märgendeid, näiteks<br /><br /><strong>[code]</strong>echo "siin on natuke koodi";<strong>[/code]</strong><br /><br />Teksti formaat <strong>[code][/code]</strong> siltide vahe säilitatakse.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Koodi kuvamine',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Tsiteerida saab viitega autorile või mitte.<ul><li>Kui sa kasutad foorumis viitamise nuppu, siis pannakse postituse tekst nende märgendite vahele: <strong>[quote=""][/quote]</strong>. See lubab sul määrata, kes on teksti autor. Näiteks kui sa tahad tsiteerida midagi, mida Jõmm kirjutas, siis kasutad koodi:<br /><br /><strong>[quote="Jõmm"]</strong>Tekst, mida Jõmm kirjutas<strong>[/quote]</strong><br /><br />Tulemuses kuvatakse automaatselt juurde: Jõmm kirjutas: enne õiget teksti. Sa <strong>pead</strong> panema jutumärgid \"\" autori nime ümber.</li><li>Teise meetodiga saad sa pimesi kedagi tsiteerida. Selleks pane tekst <strong>[quote]</strong> ja <strong>[/quote]</strong> märgendite vahele. Teadet vaadates on lihtsalt näha: Tsitaat: enne õiget teadet.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Tsiteerimine postitustes',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBkood sisaldab käske (märgendeid) mis lubavad sul kiiresti muuta teksti stiili. See toimib järgmiselt: <ul><li>Kui tahate teha mõnda osa tekstist rasvaseks (bold) siis toimige järgmiselt <strong>[b][/b]</strong>, nt. <br /><br /><strong>[b]</strong>Tere<strong>[/b]</strong><br /><br />saab olema <strong>Tere</strong></li><li>allajoonitud teksti tegemiseks  <strong>[u][/u]</strong>, näiteks:<br /><br /><strong>[u]</strong>Tere hommikust<strong>[/u]</strong><br /><br />saab olema <span style="text-decoration: underline">Tere hommikust</span></li><li>kui on vaja kaldus (italic) teksti, kasuta <strong>[i][/i]</strong>, nt.<br /><br />See on <strong>[i]</strong>Suurepärane!<strong>[/i]</strong><br /><br />annab sulle See on <i>suurepärane!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Kuidas luua esiletõstetud ehk rasvast, kaldus ja allajoonitud kirjaga teksti',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Et muuta teksti värvi või suurust, on vajalikud järgnevad märgendeid. Arvesta, et see, kuidas kasutajatele su postitus näib, oleneb ka tema op süsteemist ja veebibrauserist: <ul><li>Muutes teksti värvi, toimi nii, et paned teksti nende märgendeid vahele <strong>[color=][/color]</strong>. Sa võid ka inglisekeeles kirjutada vastava värvi nime (nt. red, blue, yellow, jne.) või kasutada "hexadecimal triplet" alternatiivi, nt. #FFFFFF, #000000. Näiteks, kui tahad teha punast teksti, peaksid kasutama:<br /><br /><strong>[color=red]</strong>Tere!<strong>[/color]</strong><br /><br />või<br /><br /><strong>[color=#FF0000]</strong>Tere!<strong>[/color]</strong><br /><br /> Mõlemate väljund on sama <span style="color:red">Tere!</span></li><li> Teksti suurust muutes, kasuta sarnast moodust <strong>[size=][/size]</strong>. See märgend sõltub kasutaja valitud stiilist, aga vajalik formaat on numbriline suurus, esitledes teksti suurust protsentides, alustades 20 (väga pisike) kuni 200 (väga suur). Näiteks: <br /><br /><strong>[size=30]</strong>PISIKE<strong>[/size]</strong><br /><br />on tavaliselt <span style="font-size:30%;">PISIKE</span><br /><br />ning <br /><br /><strong>[size=200]</strong>HIIGLASUUR!<strong>[/size]</strong><br /><br />on tavaliselt <span style="font-size:200%;">HIIGLASUUR!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Kuidas muuta teksti värvi ja suurust?',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Jah, muidugi. Näiteks kellegi tähelepanu äratamiseks võid kirjutada:<br /><br /><strong>[size=200][color=red][b]</strong>VAATA SIIA!<strong>[/b][/color][/size]</strong><br /><br />see kuvab <span style="color:red;font-size:200%;"><strong>VAATA SIIA!</strong></span><br /><br />Me ei soovita siiski palju sellist teksti kirjutada! Pea meeles, et sa pead jälgima, et märgendid oleksid korralikult suletud. Näiteks on selline sulgemine vale:<br /><br /><strong>[b][u]</strong>Valesti suletud<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Kas ma saan kombineerida märgendeid?',
));
