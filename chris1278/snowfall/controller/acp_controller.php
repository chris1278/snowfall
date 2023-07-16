<?php
/**
*
* @package phpBB EExtension bridge for “Statistics Block”
* @copyright (c) 2022 (Christian-Esch.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\snowfall\controller;

class acp_controller
{
	protected $ext_manager;
	protected $config;
	protected $language;
	protected $request;
	protected $template;
	protected $user;
	protected $u_action;


	public function __construct(
		\phpbb\extension\manager $ext_manager,
		\phpbb\config\config $config,
		\phpbb\language\language $language,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user


	)
	{
		$this->ext_manager			= $ext_manager;
		$this->config				= $config;
		$this->language				= $language;
		$this->request				= $request;
		$this->template				= $template;
		$this->user					= $user;
		$this->ext_manager			= $ext_manager;
		$this->md_manager 			= $ext_manager->create_extension_metadata_manager('chris1278/snowfall');
	}

	public function display_options()
	{
		$ext_display_ver 			= $this->md_manager->get_metadata('version');
		$ext_lang_min_ver 			= $this->md_manager->get_metadata()['extra']['lang-min-ver'];
		$ext_display_name 			= $this->md_manager->get_metadata('display-name');
		$ext_display_ver 			= $this->md_manager->get_metadata('version');
		$lang_ver 					= ($this->language->lang('SF_LANG_EXT_VER') !== 'SF_LANG_EXT_VER') ? $this->language->lang('SF_LANG_EXT_VER') : '0.0.0';
		$notes 						= '';
		$this->language->add_lang('acp_snowfall_general', 'chris1278/snowfall');
		add_form_key('chris1278_snowfall');
		$errors = [];

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_snowfall'))
			{
				$errors[] = $this->language->lang('FORM_INVALID');
			}

			if (empty($errors))
			{
				$this->config->set('snowgif', $this->request->variable('snowgif', 0));
				$this->config->set('snowmax', $this->request->variable('snowmax', ''));
				$this->config->set('snowletter', $this->request->variable('snowletter', '', true));
				$this->config->set('sinkspeed', $this->request->variable('sinkspeed', ''));
				$this->config->set('snowsize', $this->request->variable('snowsize', ''));
				$this->config->set('snowfont', $this->request->variable('snowfont', '', true));
				$this->config->set('snowcolor', $this->request->variable('snowcolor', ''));
				$this->config->set('snowfai', $this->request->variable('snowfai', ''));
				trigger_error($this->language->lang('ACP_SNOWFALL_SETTING_SAVED') . adm_back_link($this->u_action));
			}
		}

		$s_errors = !empty($errors);

		if (!phpbb_version_compare($lang_ver, $ext_lang_min_ver, '>='))
		{
			$this->add_note($notes, $this->language->lang('SF_MSG_LANGUAGEPACK_OUTDATED'));
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

		if (empty($this->config['snowletter']))
		{
			$snowletter = '*';
		}
		else
		{
			$snowletter = $this->config['snowletter'];
		}

		$snowgif		= $this->config['snowgif'];
		$snowmax		= $this->config['snowmax'];
		$sinkspeed		= $this->config['sinkspeed'];
		$snowsize		= $this->config['snowsize'];
		$snowfont		= $this->config['snowfont'];

		$this->template->assign_vars([
			'S_ERROR'					=> $s_errors,
			'ERROR_MSG'					=> $s_errors ? implode('<br>', $errors) : '',
			'SF_EXT_NAME'				=>	$ext_display_name,
			'SF_EXT_VER'				=>	$ext_display_ver,
			'SF_NOTES'					=>	$notes,
			'SNOWGIF'					=>	$snowgif,
			'SNOWMAX'					=>	$snowmax,
			'SNOWLETTER'				=>	$snowletter,
			'SINKSPEED'					=>	$sinkspeed,
			'SNOWSIZE'					=>	$snowsize,
			'SNOWFONT'					=>	$snowfont,
			'SNOWFAI'					=>	$snowfai,
			'SNOWCOLOR'					=>	$snowcolor,
			'U_ACTION'					=>	$this->u_action,
		]);
	}

	private function add_note(string &$notes, $msg)
	{
		$notes .= (($notes != '') ? "\n" : "") . sprintf('<p>%s</p>', $msg);

	}

	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
