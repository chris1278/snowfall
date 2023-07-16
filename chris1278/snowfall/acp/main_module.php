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

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main()
	{
		global $phpbb_container;

		$this->tpl_name = 'acp_snowfall_general';

		$acp_controller = $phpbb_container->get('chris1278.snowfall.controller.acp');

		$language = $phpbb_container->get('language');

		$this->page_title = $language->lang('ACP_CHRIS_SNOWFALL');

		$acp_controller->set_page_url($this->u_action);

		$acp_controller->display_options();
	}
}
