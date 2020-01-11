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
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Iga administraator võib määrata ise, milliseid tüüpe manuseid ta lubab ja milliseid mitte. Kui pole kindel, millised on lubatud, võta ühendust administraatoriga.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Millised manuse tüübid on siin foorumis lubatud?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Et leida nimekiri oma üleslaaditud manustest, mine kasutaja juhtpaneeli (KJP) ja järgi edasisi juhiseid.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Kuidas ma leian oma manused?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Manused',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Tellimused ja järjehoidjad',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Vormindamine ja teemade tüübid',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Sõbrad ja vaenlased',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Kasutajate tiitlid ja grupid',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB küsimused',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Sisselogimisega ja registreerumisega seotud küsimused',
	'HELP_FAQ_BLOCK_PMS'	=> 'Privaatsõnumid',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Postitamine',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Foorumitest otsimine',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Kasutaja eelistused ja seaded',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'Järjehoidja phpBB3\'s on peaaegu nagu järjehoidjad brauseris. Sind ei teavitata uuendusest, kuid saad tulla kiiresti teema juurde tagasi. Tellimise korral sind teavitatakse uuendusest teemas või foorumis sinu valitud viisil.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Mis vahe on tellimisel ja järjehoidjal?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Et tellida foorumit, vajuta "Telli foorum" lingile. Et tellida teemat, vasta teemale, kui tellimise valik on valitud  postituse seadetes või vajuta nuppu "Telli teema".',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Kuidas ma tellin teemasid või foorumeid?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Et eemaldada tellimusi, mine kasutaja juhtpaneeli (KJP), ning järgi edasisi juhiseid.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Kuidas ma eemaldan tellimusi?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Et lisada järjehoidjasse või tellida mõnda teemat, pead vajutama “Teema seaded” menüü linki otsingulahtri kõrval.<br />Vastates teemasse, kui seade “Teavita mind, kui keegi on vastanud teemasse” valik on valitud KJP-s samuti tellib automaatselt teema uuendused.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Kuidas ma saan lisada järjehoidjasse või tellida teemat?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Teadeanded ilmuvad alafoorumis teiste postituste kohale ja sisaldavad tähtsat informatsiooni, mida sa peaksid lugema.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Mis on teadeanded?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBkood on kood, mis põhineb HTMLil ning mis on abiks postitamisel. Seda saab postitustes keelata. Täpsemad juhised saab lingilt postitamise lehel.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Mis on BBkood?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Üldteadaanded sisaldavad tähtsat informatsiooni ja sa peaksid neid lugema. Nad ilmuvad iga foorumi päisesse ja juhtpaneeli. Üldteadaannete õigused määrab administraator.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Mis on üldteadaanded?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Ei. Siin foorumis ei ole võimalik postitada käske HTML\'is. Enamus vormindamist saab ka BBkood abil teha.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Kas ma HTMLi saan kasutada?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Teemaikoonid on autori poolt valitud pildikesed, mis ilmuvad teema nime kõrval foorumis ja näitavad, mis sisuga teema on.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Mis on teemaikoonid',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Pilte saab postitusse kuvada, aga selleks peavad nad olema avalikus serveris, näiteks  http://www.sinudomeen.ee/minu-pilt.gif. või sa pead need üles laadima siia lehele. Neid ei saa kuvada oma arvutist (kui see pole server) ja samuti parooliga kaitstud kohtadest. Piltide lisamiseks kasuta BBkood\'i.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Kas ma saan pilte postitada?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Suletud teemad on sellised teemad, kuhu kasutaja ei saa enam postitada. Teemasid võidakse sulgeda mitmetel põhjustel. Ka võid sa saada sulgeda omaenda teemasid, kui selleks on sul õigused.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Mis on suletud teemad?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Emotikonid on väiksed pildikesed, mis aitavad sul postituses oma emotsioone väljendada. Neid saad teatesse lisada postitamise lehelt. Katsu nendega mitte liialdada. Administraator on võib-olla ka määranud emotikonide limiidi potituse kohta.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Mis on emotikoni?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Kleepsud ilmuvad teadaannete all ja vaid esimesel lehel foorumis. Nad sisaldavad tihti tähtsat informatsiooni, mida sa peaksid lugema.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Mida tähendavad kleebisega märgitud teemad?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Sa võid kasutada neid nimekirju, et saada parem ülevaade foorumi kasutajatest. Kasutajate, kes on su sõprade nimekirjas, foorumiloleku staatust näed oma juhtpaneelis ja seal saad ka neile kiiresti privaatsõnumi saata. Olenevalt stiilist on võimalik nende kasutajate postitusi ka esile tõsta. Kui lisad kasutaja vaenlaste nimekirja, peidetakse nende postitused.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Mis on sõprade ja vaenlaste nimekiri?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Selleks on kaks moodust. Iga kasutaja profiilis on link ühte nimekirja lisamiseks. Lisaks saad ka juhtpaneelis nime sisestades lisada nimekirja. Saad samalt lehelt ka eemaldada.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Kuidas lisada või eemaldada kasutajaid nimekirjast?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administraatorid on auastmelt foorumis kõige kõrgemal. Nad saavad sättida foorumi väljanägemist ja seadeid ning määrata moderaatoreid. Neil võivad olla ka moderaatoriõigused kõigis alafoorumites.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Kes on administraatorid?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'On võimalik, et administraator on määranud gruppidele omad värvid, et neid kergemini eristada.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Miks mõnede kasutajagruppide liikmete nimed on värvilised?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Kui sa oled liige enamas kui ühes kasutajagrupis, on vaikimisi grupp see, millise grupi värvi sinu nimi ilmub ja mille tiitel sul profiilis on. Administraator on võib-olla lubanud sul vaikimisi gruppi muuta.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Mis on “Vaikimisi grupp”?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderaatorite ülesanne on hoolitseda korra eest foorumis. Nad saavad kustutada, muuta ja liigutada teemasid.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Kes on moderaatorid?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'See lehekülg sisaldab infot, näiteks kes on administraatorid ja moderaatorid ning milliseid foorumeid nad haldavad.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Mis on “Meeskond” link?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Kasutajagrupid on võimalus liikmeid gruppidesse jagada. Üks inimene saab kuuluda mitmesse gruppi ning gruppidel saab olla eriõiguseid. Nii saab näiteks anda mõnele grupile õiguse mõnda alafoorumite kasutada, kuigi teised seda teha ei saa..',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Olemasolevaid gruppe saad vaadata menüüst Kasutajagruppide alt. Seal saad ka oma liitumisavalduse esitada. Grupid võivad olla ka varjatud.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Kus on kasutajagrupid ja kuidas nendega liituda?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Kasutajagruppe loovad administraatorid. Kui oled huvitatud grupi loomisest, siis võta temaga ühendust.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Kuidas kasutajagrupi moderaatoriks saada?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Mis on kasutajagrupid?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Kõik kasutajad foorumil saavad kasutada funktsiooni “Kontakt” vormi, juhul kui see valik on lubatud foorumi administraatori poolt.<br />Registreeritud liikmetel on võimalik näha ka “Meeskond” linki.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Kuidas ma saan ühendust võtta foorumi administraatoriga?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Selle tarkvara on kirjutanud ja välja andnud phpBB Limited &#8482;. Oma soove tulevaste versioonide suhtes saad avaldada phpBB.com <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a> leheküljel, kus saad hääletada juba olemas olevate ideede eest, ning lisada oma.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Miks siin foorumis ei ole X võimalust?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Iga administraatoriga võid kontakteeruda kes on “Meeskond” leheküljel välja toodud. Kui ikka ei saa vastust, võta ühendust domeeninime omanikuga (tee <a href="http://www.google.com/search?q=whois">whois käsk</a>) või kui foorum jookseb tasuta teenusel, võta ühendust teenuse pakkujaga. Palun pane tähele, phpBB grupil ei ole   <strong>absoluutselt midagi pistmist nendes küsimustes</strong> ja teda ei saa vastutusele võtta. Ära võta ühendust nendega küsimuses, mis pole otseselt phpBB saidiga seotud. Kui siiski saadad neile sedasorti probleemi, võid mitte vastust saada.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Kellega ma ühendust võtan solvava materjali ja/või juriidilise küsimuse osas?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Selle foorumi (muutmata kujul) on tootnud, avaldanud ja õigustega kaitsnud <a href="https://www.phpbb.com/">phpBB Limited</a>. Foorumitarkvara on väljalastud GNU Üldise Avaliku Litsentsi, versioon 2 (GPL-2.0) alusel ja on täiesti tasuta kasutatav kõigile. Rohkem informatsiooni phpBB kohta leiad <a href="https://www.phpbb.com/about/">phpBB.com</a> veebilehelt.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Kes kirjutas selle foorumitarkvara?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Kui sa ei märgi <em>Logi mind sisse automaatselt igal külastusel</em> kasti, siis sa jääd sisselogituks ainult foorumi kasutamise ajaks. Kui tahad alati sisse logitud olla, märgi see kastike sisselogimisel. Seda ei ole soovitatav teha avalikes arvutites. Kui sa ei näe seda kastikest, on administraator selle keelanud.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Miks mind automaatselt välja logitakse?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Sellel probleemil on mitmeid võimalikke põhjusi. Esiteks ole kindel, et sisestasid kasutajanime ja parooli korrektselt. Kui on korrektsed, võta ühendust foorumi administraatoriga, et teada saada, kas oled saanud keelu foorumile. Ka on võimalik, et omanikul on veebiserveri konfiguratsioonis viga ja ta peab selle ise lahendama.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Kõigepealt kontrolli oma kasutajanime ja paroole. Teine võimalus on, et administraator on su konto kustutanud. Foorumitel on tavaks kustutada ebaaktiivseid kasutajaid, et vähendada andmebaasi suurust. Kui sinu kasutajakonto on kustutatud, siis proovi on järgneval korral rohkem aktiivsem, ning võtta rohkem osa vestlustest.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Kunagi ammu liitusin, aga nüüd ei saa enam sisse?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Miks ma ei saa sisse logida?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'On võimalik, et foorumi omanik on blokeerinud su IP aadressi või kasutajanime, millega üritasid registreeruda. Omanik võib olla keelustanud üldse uute kasutajate registreerimise. Võta ühendust foorum administraatoriga, et saada abi.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Miks ma ei saa registreeruda?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'Kuna me tunneme muret laste online - turvalisuse pärast, siis täidame me 1998.a. laste online turvalisuse kaitse seadust. COPPA ja sellega kaasneva FTC regulatsiooniga kehtestatakse USA föderaalseadus, mis kaitseb alla 13 aasta vanuste laste privaatsust. Meie veebileht ei ole ette nähtud alla 13 aasta vanustelt lastelt andmete väljameelitamiseks ning meie kodulehed on üles ehitatud nii, et blokeerida andmete teadlik vastuvõtt alla 13 aasta vanustelt lastelt alati, kui nõutakse vanusandmeid.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Mida tähendab COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Kustuta kõik foorumi küpsised” link kustutab kõik andmed, mida phpBB on saatnud sinu arvutisse, näiteks hoida meeles kasutajanime ja parooli. Kui sul esineb sisselogimises või väljalogimises probleeme, siis võib see link Sind aidata.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Mida teeb link nimega “Kustuta kõik foorumi küpsised”?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Ära muretse! Parooli ei saa küll taastada, aga selle saab lihtsasi lähtestada. Parooli lähtestamiseks, palun külasta sisselogimise lehekülge, ning vajuta linki nimega <em>Ma unustasin oma parooli</em>. Jälgi järgnevaid juhiseid ja peaksidki taas saama sisse logida foorumile.<br />Siiski, kui teil ei ole võimalik oma parooli lähtestada, siis palun võta ühendust foorumi administraatoriga.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Kaotasin parooli!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Võimalik, et sa ei peagi. See on foorumi haldajate otsustada, kas nad lasevad postitada ilma registreerimiseta või pead ikkagi looma konto. Siiski; registreerumine annab sulle mitmeid lisa võimalusi juurde, mida tavalistel külalistel ei ole - näiteks: avatari lisamine, privaatsõnumite saatmine, e-kirjad, gruppidega liitumine jpm veelgi. Registreerumine võtab kõigest mõne minuti, seega on soovituslik omale konto teha.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Kõigepealt kontrolli oma kasutajanime ja parooli. Kui need on kindlasti õiged, siis järgmiseks võib-olla kaks põhjust. Esimene põhjus võib-olla see, et registreerusid COPPA tingimustega. See tähendab kui Sa vajutasid linki registreerumisel, et oled alla 13. aasta vana, siis pead järgima Sulle saadetuid juhiseid. Teine põhjus võib olla aga see, et mõned foorumid nõuavad uutelt registreerumistelt, kas kasutajalt endalt e-kirja teel või siis foorumi administraatorilt. Kui foorumi registreerumine on läbi kasutaja poolse kinnituse, siis oled saanud oma e-postiaadressile kirja, ning järgi sealseid juhiseid. Kui sa ei ole kirja saanud siis võimalik, et oled pannud registreerumisel vigase e-postiaadressi või e-kiri on läinud läbi e-posti filtri rämpspost kirjade kausta. Kui sa oled täiesti kindel, et oled pannud õige e-postiaadressi, ning ikka ei ole tulnud sulle kinnituskirja, siis palun võta ühendust foorumi administraatoriga.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Ma registreerusin, aga ei saa sisse logida!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Miks ma pean üldse registreeruma?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Siin võib olla kolm põhjust; 1.) Sa ei ole registreerunud ja / või sisseloginud. 2.) Võimalik, et foorumi administraator on keelanud privaatsõnumite saatmise funktsiooni kogu foorumis. 3.) Samuti on võimalik ka see, et administraator on keelanud just Sinul saata privaatsõnumeid. Rohkema informatsiooni saamiseks tuleks pöörduda foorumi administraatori poole.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Ma ei saa privaatsõnumeid saata!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Meil on kahju kuulda seda, edasiseks tegevuseks saada foorumi administraatorile koopia kogu kirjast ja loodetavasti kasutab ta enda käsutuses olevaid meetmeid selle lõpetamiseks.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Sain rämpsposti ja/või solvava kirja foorumi vahendusel!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Saad blokeerida kasutajaid privaatsõnumid, kasutades reegleid. Kui saad privaatsõnumeid mingilt kindlalt kasutajalt, teavita administraatorit; Nemad võivad keelata sellel kasutajal sõnumite saatmise.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Ma saan soovimatuid privaatsõnumeid!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Vajutades “Tõstata teemat” linki teemat vaadates, saad sa "tõstatada" teema foorumi esimesele lehele. Kui sa seda linki ei näe, on see moodus ilmselt keelatud või tõstatamiste intervall on veel liiga väike. Samuti on võimalik teemat tõstatada sellele vastates, kuid jälgi foorumi reegleid seda tehes.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Kuidas ma tõstatan oma teemat?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Uue teema postitamiseks kasuta mingis alafoorumis vastavat nuppu "Uus teema". Vastuse lisamiseks teemasse, vajuta "Vasta" nuppu. Võimalik, et sul on esmalt vaja registreerida kasutajaks, et saaksid seda toimi. Nimekirja oma õigustest igas alafoorumis näed all olevas jaluses, näiteks: Sa saad teha uusi teemasid siin foorumis, Sa saad postitada siin foorumis manuseid, jne.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Kuidas ma saan teha foorumisse uue teema või vastata teemale?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'See nupp lubab sul salvestada postituse seise. Et laadida mõni postituse seis, kasuta Kasutaja Juhtpaneel (KJP).',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Milleks on “Salvesta” nupp postitamise juures?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Kui sa pole moderaator, saad sa kustutada ja muuta ainult oma postitusi. Muutmiseks kasuta postituse kõrval olevat nuppu. Kui keegi on su teatele vastanud, sa seda enam kustutada ei saa ja muutes tuleb teate alla kiri selle kohta, millal sa seda viimati muutsid. Moderaatorite muutmisest enamasti märki ei jää, kuid nad võivad selle omal soovil lisada.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Kuidas ma muudan või kustutan postitusi?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Mõndadesse alafoorumitesse on ligipääs ainult teatud kasutajatel või gruppidel. Võta ühendust administraatoriga, et saada ligipääs.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Miks ma ei pääse alafoorumisse?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Manuste lisamine võib olla piiratud vaid mõnele foorumile, grupile või kasutajale eraldi. Võtta ühendust foorumi administraatoriga kui sa ei ole kindel, miks ei saa postitada manuseid.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Miks ma ei saa lisada manuseid?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Hääletuse valikute limiidi määrab administraator. Kui tunned vajadust ületada seda limiiti, kontakteeru administraatoriga.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Miks ma ei saa lisada hääletuse valikuid?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Hääletuste tegemine on lihte - kui postitad teema (või muudad teema esimest postitust) peaksid nägema <em>Hääletuse lisamine</em> sakki, mis asub kirjutamisvälja all (kui seda ei näe, siis arvatavasti puuduvad sul õigused hääletuse algatamiseks). Peaksid sisestama hääletuse pealkirja ja vähemalt kaks vastusevarianti (selleks, et määrata vastusevarianti,  sisesta see vastavale reale. Hääletusele saab ka määrata ajalimiidi, 0 tähendab piiramatut aega. Valikvastuste arv võib olla piiratud, selle määrab foorumi administraator.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Kuidas ma hääletuse teen?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Hääletusi saab muuta, muutes esimest postitust. Kui keegi on juba hääletanud, saavad seda muuta ainult moderaatorid ja administraatorid.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Kuidas ma muudan või kustutan hääletuse?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Administraator võib olla määranud, et foorumis peab postituse enne avaldamist moderaator üle vaatama. Ka on võimalik, et administraator on pannud sind sellesse kasutajate gruppi, kelle postitusi peab enne avaldamist üle vaatama. Palun võta ühendust administraatoriga edasiste küsimuste jaoks.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Miks peab mu postitust heaks kiitma?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Kui administraator on selle lubanud, saad raporteerida postituse paremas ülaääres oleva nupuga.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Kuidas ma saan raporteerida postitusest?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Et lisada signatuuri postitusele, pead kõigepealt selle sisestama Juhtpaneelis. Peale seda kui signatuur on loodud, siis postituse valikutes määrama valiku <em>"Lisa signatuur"</em>.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Kuidas ma panen oma postitusele signatuuri juurde?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Igal administraatoril on oma saidil omad reeglid. Kui oled reeglit rikkunud, võid saada hoiatuse. See on administraatori otsus ja phpBB pole sellega seotud. Võta ühendust administraatoriga, kui sa ei tea, mille eest hoiatuse said.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Miks ma hoiatuse sain?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Sinu otsingul oli veebiserveri jaoks liiga palju vasteid. Kasutaja “täiendatud otsing” funktsiooni, et olla rohkem täpsem.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Miks saan ma otsingu vastuseks tühja lehe?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Sisesta sõna otsinguväljale teemas, foorumis või esilehel. Täiendatud otsingu saad teemas või foorumis "Täiendatud otsingu" linki vajutades.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Kuidas saan otsida foorumist või foorumitest?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Vajuta “Liikmed” ja siis “Leia kasutaja” linki.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Kuidas ma otsin kasutajaid?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Su otsing oli ilmselt liiga ebamäärane või sisaldas palju tihtikasutatavaid (nt. "ja" või "ei") sõnu.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Miks mu otsingul pole vasteid?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Enda postitusi saad sa vaadata, kui vajutad lingil “Vaata oma postitusi”. Et leida oma teemasid, kasuta täiendatud otsingut ja määra valikud  sobivaks.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Kuidas ma leian omaenda postitused või teemad?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Kasutajanime juures saab olla kaks pilti. Esimene on seotud tiitliga ja selle määrab administraator. Teine on avatar ja selle saad ise panna <em>Juhtpaneel</em>i alt (kui avataride kasutamine pole foorumis keelatud).',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Sinu kasutaja juhtpaneeli “Profiili” lehel saad kasutada ühte neljast meetodist, et lisada omale avataripilt: Gravatar, Gallery, mujalt veebilehelt või laadides üles. Samuti foorumi administraatorid saavad ise otsustada, kas nad lubavad avatare ja millisel viisil nad lubavad. Kui sa ei saa kasutada avatare, siis võta ühendust foorumi administraatoriga..',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Kuidas ma saan lisada avatari?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Kuidas ma panen kasutajanime juurde omale pildi?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Kui oled registreeritud kasutaja, siis sinu seaded on salvestatud andmebaasi. Et neid muuta, mine Kasutaja Juhtpaneeli (KJP); Linki KJP lehele näeb tavaliselt, kui vajutada oma kasutajanimel - üleval foorumi päises. Seal saad muuta kõiki seadeid ja eelistusi.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Kuidas saan ma oma seadeid muuta?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Ainult registreeritud kasutajad saavad foorumi kaudu e-maile saata. Ja sedagi ainult siis, kui administraator on selle võimaluse lubanud.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Kui ma vajutan kasutaja e-posti lingi peale, siis küsib foorum minult sisselogimise.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Minnes Kasutaja Juhtpaneeli (KJP) ja sealt valides “Foorumi seaded”, leiad valiku <em>Peida mu foorumil olek</em>. Kui aktiveerid selle, siis näevad sind ainult administraatorid, moderaatorid ja sa ise. Statistikas Sind loendatakse kui varjatud kasutaja.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Kuidas ma saan peita oma kasutajanime foorumilolijate nimekirjast?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Tõenäoliselt ei installeerinud administraator seda keelt või ei ole keegi seda veel tõlkinud. Võta ühendust foorumi administraatoriga ja palu, kas oleks võimalik antud keelefail paigaldada foorumile. Kui antud keelefaili ei eksisteeri, siis võid ka ise luua uue tõlke phpBB foorumile. Rohkemat informatsiooni kuidas tõlkida phpBB tarkvara leiad <a href="https://www.phpbb.com/">phpBB</a>&reg; ametlikult veebilehelt.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Minu emakeelt ei ole nimekirjas!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Tiitlid näitavad, mitu postitust oled teinud või identfitseerivad kindlaid kasutajaid, näiteks moderaatoreid ja administraatoreid. Enamasti ei saa tiitleid muuta, kuna need määrab administraator. Palun ära riku foorumit, tehes mõttetuid postitusi, et tiitlit kõrgemaks saada. Enamik foorumite administraatoreid seda ei kannata ja nad madaldavad su postituste arvu.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Mis on mu tiitel ja kuidas ma seda muudan?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Sellisel juhul on tõenäoliselt tegemist suveajale üleminekuga. Teatud kuudel võivad esineda selle tõttu väiksed nihked kellaajas. Palun teavita probleemist administraatorit.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Muutsin oma ajatsooni, aga ajad on ikka valed!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Tõenäoliselt on ajad õiged, aga sa oled lihtsalt teises ajavööndis. Sellisel juhul mine Kasutaja Juhtpaneel (KJP) ja muuda ajavöönd omale sobivamaks, näiteks: Tallinn, London, Pariis, New York, Sydney jne. Palun pane tähele, et ajatsooni muutmiseks, nagu ka muude seadete muutmiseks, pead olema registreeritud kasutaja. Kui sa ei ole registreeritud kasutaja, siis ehk on nüüd õige aeg luua omale konto.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Ajad on valed!',
));
