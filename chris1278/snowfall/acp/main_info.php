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
namespace chris1278\snowfall\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=>	'\chris1278\snowfall\acp\chris1278_snowfall_general',
			'title'		=> 'ACP_CHRIS_SNOWFALL',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_CHRIS_SNOWFALL_GENERAL',
					'auth'		=>	'ext_chris1278/snowfall && acl_a_board',
					'cat'		=>	['ACP_CHRIS_SNOWFALL'],
				],
			],
		];
	}
}
