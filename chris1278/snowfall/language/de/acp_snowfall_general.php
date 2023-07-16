<?php
/**
*
* Snowfall - is based on the snippet Snowfall - Snow by Dr Death. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2021, Chris1278, https://christian-esch.de
* @copyright (c) 2014 - 2021, kirk, http://reyno41.bplaced.net/phpbb/
* @copyright (c) 2008,Dr Death, http://www.lpi-clan.de/
* @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CHRIS_SNOWFALL'			=>	'Schneeflocken und Zeichen Schauer',
	'ACP_SNOXINFOBOX'				=>	'Infobox',
	'ACP_SNOWINFO'					=>	'Hier kannst du die Einstellungen zur Extension vornehmen. Beachte aber bitte die Kombinationen aus Schriftart/Schrittgröße und Anzahl der Objekte. Je mehr Platz die Objekte die über den Bildschirm rieseln einnehmen um so unvorteilhafter wird das bedienen des Forums. Von daher sollte man die Anzahl und Größe der Objekte mit Bedacht wählen.',
	'ACP_SNOWMAX'					=>	'35',
	'ACP_SNOWLETTER'				=>	'*',
	'SNOWMAX'						=>	'Anzahl der Objekte',
	'SNOWMAX_EXPLAIN'				=>	'Hier kann eingestellt werden wie viele Objekte Angezeigt werden. Es muss berücksichtigt werden das je mehr Objekte angezeigt werden um so ausgefüllter wird er Bildschirm.<br><br><b>Empfohlen wird ein Wert zwischen 30-40.</b>',
	'SNOWGIF'						=>	'Verwendungsart',
	'SNOWGIF_EXPLAIN'				=>	'Hier kann die Verwendungsart ausgewählt werden. Auswählen kann man eine Schneeflocke als Gif Bild oder als Font Awesome Icon. Alternativ kann man Benutzerdefinierte Einstellungen vornehmen.',
	'SNOWFAI'						=>	'Font Awesome Icon',
	'SNOWFAI_EXPLAIN'				=>	'Hier kann ein <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome</strong></a> Icon eingetragen werden:<br><br><b>Standard: fa-snowflake-o</b>',
	'ACP_SNOWFAI'					=>	'fa-snowflake-o',
	'ACP_FA'						=>	'Font Awesome Symbol',
	'ACP_GIF'						=>	'GIF Symbol',
	'ACP_CUSTOM'					=>	'Benutzerdefinierte Einstellung',
	'SNOWLETTER'					=>	'Buchstaben oder Zeichen',
	'SNOWLETTER_EXPLAIN'			=>	'Hier können alle Zeichen eingegeben werden. Diese rieseln dann über den Bildschirm. Auch möglich wären Grüße wie:<br><br>Frohe Weihnachten<br>Frohe Ostern oder ähnliches.',
	'ACP_PREVIEW'					=>	'Vorschau',
	'SINKSPEED'						=>	'Fall Geschwindigkeit',
	'SINKSPEED_EXPLAIN'				=>	'Hier kann eine Geschwindigkeit ausgewählt werden, in der die oben gemachte Eingabe den Bildschirm runterläuft. Je kleiner die Zahl desto schneller Läuft die Animation den Bildschirm herunter.<br><br><b>Standard: 40</b>',
	'SNOWSIZE'						=>	'Zeichengröße',
	'SNOWSIZE_EXPLAIN'				=>	'Hier kann die Größe der Zeichen eingestellt werden. Es kann ein Wert zwischen min. 12 und max. 100 gewählt werden. <br><br><b>Standard: 12</b>',
	'SNOWFONT'						=>	'Schriftart',
	'SNOWFONT_EXPLAIN'				=>	'Hier kann die Schriftart ausgewählt werden.<br><br><b>Standard: Arial</b>',
	'SNOWCOLOR'						=>	'Schriftfarbe',
	'SNOWCOLOR_EXPLAIN'				=>	'Hier kann die Schriftfarbe ausgewählt werden. Die Farbe bitte im hex Code angeben ohne die führende # am Anfang.<br><br> Für weitere Informationen bezüglich hex Farbcodes bitte folgende Seite aufrufen: <a href="https://html-color-codes.info/webfarben_hexcodes/" target="_blank"><b><i><u>Farbcode in Hex Code für html.</u></i></b></a>	<br><br><b>Standard: D8D8D8</b>',
	'OPTION_CHANGE'					=>	'Bitte eine Schriftart auswählen...',
	'SAVE_FONTS'					=>	'Sichere Schriftarten',
	'FANTASY_FONTS'					=>	'Fantasievolle Schriftarten',
	'WINDOWS_FONTS'					=>	'Windows Schriftarten',
	'USED_FONT'						=>  'Aktuell ausgewählte Schriftart',
	'ACP_SNOWCOLOR'					=>	'D8D8D8',
	'ACP_SNOWFALL_SETTING_SAVED'	=>	'Update der Einstellungen war erfolgreich!',

]);
