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

namespace chris1278\snowfall\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $auth;
	protected $language;
	protected $request;
	protected $template;
	protected $user;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\auth\auth $auth,
		\phpbb\language\language $language,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user
	)
	{
		$this->config		= $config;
		$this->auth = $auth;
		$this->language = $language;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.permissions'						=>	'permissions',
			'core.page_header' 						=>	'page_header',
			'core.page_header_after' 				=>	'page_header_after',
			'core.user_setup_after'					=>	'user_setup_after',
			'core.ucp_prefs_personal_data'			=>	'ucp_prefs_get_data',
			'core.ucp_prefs_personal_update_data'	=>	'ucp_prefs_set_data',
		];
	}

	public function permissions($event)
	{
		$permissions = $event['permissions'];
			$permissions += [
				'u_snowfall_auth'	=> [
				'lang'				=> 'ACL_U_SNOWFALL_AUTH',
				'cat'				=> 'misc'
				],
			];
		$event['permissions'] = $permissions;
	}

	public function user_setup_after()
	{
		$this->language->add_lang('snowfall', 'chris1278/snowfall');
	}

	public function page_header_after()
	{
		if ($this->config['snowgif'] == false)
		{
			if (empty($this->config['snowletter']))
			{
				$snowletter = '*';
			}
			else
			{
				$snowletter = $this->config['snowletter'];
			}
		}
		else
		{
			$snowletter = $this->config['snowletter'];
		}

		if (empty($this->config['snowcolor']))
		{
			$snowcolor = 'D8D8D8';
		}
		else
		{
			$snowcolor = $this->config['snowcolor'];
		}

		if (empty($this->config['snowfai']))
		{
			$snowfai = 'fa-snowflake-o';
		}
		else
		{
			$snowfai = $this->config['snowfai'];
		}

		if (empty($this->config['snowfont']))
		{
			$snowfont = 'arial';
		}
		else
		{
			$snowfont		= $this->config['snowfont'];
		}

		$snowmax					= $this->config['snowmax'];
		$snowgif					= $this->config['snowgif'];
		$sinkspeed					= $this->config['sinkspeed'];
		$snowsize					= $this->config['snowsize'];

		$this->template->assign_vars([
			'T_SNOWMAX'			=> $snowmax,
			'T_SNOWGIF'			=> $snowgif,
			'T_SNOWLETTER'		=> $snowletter,
			'T_SINKSPEED'		=> $sinkspeed,
			'T_SNOWSIZE'		=> $snowsize,
			'T_SNOWFONT'		=> $snowfont,
			'T_SNOWFAI'			=> $snowfai,
			'T_SNOWCOLOR'		=> $snowcolor,

		]);
	}

	public function page_header()
	{
		$this->template->assign_vars([
			'T_EXT_SNOWFALL_PATH'				=>  generate_board_url() . '/ext/chris1278/snowfall/',
			'SNOWFALL_AUTH'						=> ($this->auth->acl_get('u_snowfall_auth')),
			'S_SNOWFALL'						=> (!empty($this->user->data['user_snowfall'])) ? true : false,
		]);
	}


	public function ucp_prefs_get_data($event)
	{
		$event['data'] = array_merge($event['data'], [
			'chris1278_snowfall_listner'	=> $this->request->variable('chris1278_ucp_modul_snowfall', (int) $this->user->data['user_snowfall']),
		]);

		if (!$event['submit'])
		{
			$this->template->assign_vars([
				'S_UCP_SNOWFALL'	=> $event['data']['chris1278_snowfall_listner'],
			]);
		}
	}

	public function ucp_prefs_set_data($event)
	{
		$event['sql_ary'] = array_merge($event['sql_ary'], [
			'user_snowfall' => $event['data']['chris1278_snowfall_listner'],
		]);
	}
}
