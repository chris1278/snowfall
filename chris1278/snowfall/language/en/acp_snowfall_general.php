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
	'ACP_CHRIS_SNOWFALL'			=>	'Snowflakes and signs showers',
	'ACP_SNOXINFOBOX'				=>	'Infobox',
	'ACP_SNOWINFO'					=>	'Here you can make the settings for the extension. But please note the combinations of font / step size and number of objects. The more space the objects that trickle across the screen take up, the less advantageous it is to use the forum. You should therefore choose the number and size of the objects carefully.',
	'ACP_SNOWMAX'					=>	'35',
	'ACP_SNOWLETTER'				=>	'*',
	'SNOWMAX'						=>	'Number of objects',
	'SNOWMAX_EXPLAIN'				=>	'Here you can set how many objects are displayed. It must be taken into account that the more objects are displayed, the more filled the screen becomes.<br><br><b>A value between 30-40 is recommended</b>.',
	'SNOWFAI'						=>	'Font Awesome icon',
	'SNOWFAI_EXPLAIN'				=>	'A <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome</strong></a> icon can be entered here:<br><br><b>Default: fa-snowflake-o</b>',
	'ACP_SNOWFAI'					=>	'fa-snowflake-o',
	'ACP_FA'						=>	'Font Awesome icon',
	'ACP_GIF'						=>	'GIF icon',
	'ACP_CUSTOM'					=>	'Custom setting',
	'SNOWGIF'						=>	'Usage type',
	'SNOWGIF_EXPLAIN'				=>	'The type of use can be selected here. You can choose a snowflake as a gif image or as a fontawesome icon. Alternatively, you can make user-defined settings.',
	'SNOWLETTER'					=>	'Letters or characters',
	'SNOWLETTER_EXPLAIN'			=>	'All characters can be entered here. These then trickle across the screen. Greetings like: <br><br>Merry Christmas or Happy Easter would also be possible',
	'ACP_PREVIEW'					=>	'Preview',
	'SINKSPEED'						=>	'Falling Speed',
	'SINKSPEED_EXPLAIN'				=>	'Here you can select a speed at which the input made above runs down the screen. The smaller the number, the faster the animation runs down the screen.<br><br><b>Default: 40</b>',
	'SNOWSIZE'						=>	'Character size',
	'SNOWSIZE_EXPLAIN'				=>	'The size of the characters can be set here. A value between a minimum of 12 and a maximum of 100 can be selected. <br><br><b>Default: 12</b>',
	'SNOWFONT'						=>	'Font',
	'SNOWFONT_EXPLAIN'				=>	'The font can be selected here.<br><br><b>Default: Arial</b>',
	'SNOWCOLOR'						=>	'Font color',
	'SNOWCOLOR_EXPLAIN'				=>	'The font color can be selected here. Please enter the color in hex code without the leading # at the beginning.<br><br> For more information on hex color codes, please visit the following page: <a href="https://htmlcolorcodes.com/" target="_blank"><b><i><u> Color code in hex code for html.</u></i></b></a>	<br><br><b>Default: D8D8D8</b>',
	'OPTION_CHANGE'					=>	'Please select a font...',
	'SAVE_FONTS'					=>	'Safe fonts',
	'FANTASY_FONTS'					=>	'Fancy fonts',
	'WINDOWS_FONTS'					=>	'Windows fonts',
	'USED_FONT'						=>	'Currently selected font',
	'ACP_SNOWCOLOR'					=>	'D8D8D8',
	'ACP_SNOWFALL_SETTING_SAVED'	=>	'The settings update was successful!',

]);
