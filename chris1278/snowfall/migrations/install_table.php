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

class install_table extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\snowfall\migrations\install_acp_modul'];
	}

	public function update_data()
	{
		return [
			['config.add',['snowgif', 0]],
			['config.add',['snowmax', '35']],
			['config.add',['snowletter', '*']],
			['config.add',['sinkspeed', '40']],
			['config.add',['snowsize', '24']],
			['config.add',['snowfont', 'Arial']],
			['config.add',['snowcolor', 'D8D8D8']],
			['config.add',['snowfai', 'fa-snowflake-o']],
		];
	}
}
