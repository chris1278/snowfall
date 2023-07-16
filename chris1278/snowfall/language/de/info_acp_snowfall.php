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
	// language pack author
	'SF_LANG_DESC'								=>	'Deutsch (Du)',
	'SF_LANG_EXT_VER' 							=>	'2.0.3',
	'SF_LANG_AUTHOR' 							=>	'Chris1278',
	'SF_CONFIG_DESC' 							=>	'Hier können die Einstellungen für die Erweiterung „%1$s“ (v%2$s) geändert werden.',
	'SF_MSG_LANGUAGEPACK_OUTDATED'				=>	'Hinweis: Das Sprachpaket Deutsch (Du) dieser Erweiterung ist nicht mehr aktuell.',
	//ACP Translation
	'ACP_CHRIS_SNOWFALL'						=>	'Schneeflocken und Zeichen Schauer',
	'ACP_CHRIS_SNOWFALL_GENERAL'				=>	'Einstellungen',

]);
