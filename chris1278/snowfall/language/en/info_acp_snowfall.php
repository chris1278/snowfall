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
	'SF_LANG_DESC'								=>	'English (En)',
	'SF_LANG_EXT_VER' 							=>	'2.0.3',
	'SF_LANG_AUTHOR' 							=>	'Chris1278',
	'SF_CONFIG_DESC' 							=>	'The settings for the „%1$s“ Extension (v%2$s) can be changed here.',
	'SF_MSG_LANGUAGEPACK_OUTDATED'				=>	'Note: The language pack English (En) for this extension is no longer up-to-date.',
	//ACP Translation
	'ACP_CHRIS_SNOWFALL'						=>	'Snowflakes and signs showers',
	'ACP_CHRIS_SNOWFALL_GENERAL'				=>	'Settings',

]);
