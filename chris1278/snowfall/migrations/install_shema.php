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

class install_shema extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v310\dev'];
	}

	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'users', 'user_snowfall');
	}

	public function update_schema()
	{
		return [
			'add_columns'	=> [
				$this->table_prefix . 'users'	=> [
					'user_snowfall'	=> ['BOOL', 1],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns'	=> [
				$this->table_prefix . 'users'	=> [
					'user_snowfall',
				],
			],
		];
	}
}
