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

namespace chris1278\snowfall\migrations;

class install_permission extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\snowfall\migrations\install_shema'];
	}

	public function update_data()
	{
		return [
			['permission.add', ['u_snowfall_auth']],
				['permission.permission_set', ['REGISTERED', 'u_snowfall_auth', 'group']],

		];
	}
}
