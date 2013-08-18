<?php
class acp_index_tabbed
{
   var $u_action;
   function main($id, $mode)
   {
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_index_tabbed';
		$this->page_title = $user->lang['INDEX_TABBED_MOD'];
		
		/*
		* Sumbit form
		*/
		$submit = (isset($_POST['submit'])) ? true : false;
				if ($submit)
		{
			if (!check_form_key('acp_index_tabbed'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('index_tabbed_index', request_var('index_tabbed_index', true));
			set_config('index_tabbed_forum', request_var('index_tabbed_forum', true));
			set_config('index_tabbed_topic', request_var('index_tabbed_topic', true));

			trigger_error($user->lang['INDEX_TABBED_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'INDEX_TABBED_INDEX'		=> (!empty($config['index_tabbed_index'])) ? true : false,
			'INDEX_TABBED_FORUM'	=> (!empty($config['index_tabbed_forum'])) ? true : false,
			'INDEX_TABBED_TOPIC'	=> (!empty($config['index_tabbed_topic'])) ? true : false,
			'U_ACTION'		=> $this->u_action,
			'INDEX_TABBED_VERSION'		=> $config['INDEX_TABBED_VERSION'],
			'S_VERSION_UP_TO_DATE'	=> $this->index_tabbed_version_compare($config['INDEX_TABBED_VERSION']),
		));
		
		/*
		* Version Checker
		* By Saske
		*/
		
		add_form_key('acp_index_tabbed');
		$config['INDEX_TABBED_VERSION'] = (isset($config['INDEX_TABBED_VERSION'])) ? $config['INDEX_TABBED_VERSION'] : '3.0.1';


   }
   
   	function index_tabbed_version_compare($current_version = '', $version_up_to_date = true, $ttl = 86400)
	{
		global $cache, $template;

		$info = $cache->get('index_tabbed_versioncheck');

		if ($info === false)
		{
		$errstr = '';
		$errno = 0;

		$info = get_remote_file('www.phpbbsaske.es', '/version', 'index_tabbed.txt', $errstr, $errno);
		if ($info === false)
		{
			$template->assign_var('S_VERSIONCHECK_FAIL', true);
			$cache->destroy('index_tabbed_versioncheck');
		}
		}

		if ($info !== false)
	{
		$cache->put('index_tabbed_versioncheck', $info, $ttl);
		$latest_version_info = explode("\n", $info);

		$latest_version = strtolower(trim($latest_version_info[0]));
		$current_version = strtolower(trim($current_version));
		$version_up_to_date = version_compare($current_version, $latest_version, '<') ? false : true;

		$template->assign_vars(array(
			'U_VERSIONCHECK'	=> ($version_up_to_date) ? false : $latest_version_info[1],
			'S_VERSIONOLD'		=>	(isset($config['INDEX_TABBED_VERSION'])) ? $config['INDEX_TABBED_VERSION'] : '3.0.1',
			'S_VERSIONNEW'		=> ($version_up_to_date) ? false : $latest_version_info[0],
		));
	}

		return $version_up_to_date;
	}
}
?>