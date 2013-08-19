<?php

/**
* @author Saske admin@phpbbsaske.es
* @package Index Tabbed
* @version $Id install.php
* @copyright (c) 2013 Saske1 ( http://www.phpbbsaske.es )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
   trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$language_file = 'mods/info_acp_index_tabbed';

// The name of the mod to be displayed during installation.
$mod_name = 'INDEX_TABBED_TITLE';

$version_config_name = 'index_tabbed_version';

$versions = array(
   // Version 3.0.1
   '3.0.1'   => array(
      // Lets add a config setting
      'config_add' => array(
         array('index_tabbed_index', true),
		 array('index_tabbed_forum', true),
		 array('index_tabbed_topic', true),
		),
	  
	  // Now add the module
		'module_add' => array(
			// First, lets add a new category named SO_ACP to ACP_CAT_DOT_MODS
			array('acp', 'ACP_CAT_DOT_MODS', 'INDEX_TABBED_TITLE'),
			// next let's add our module
			array('acp', 'INDEX_TABBED_TITLE', array(
					'module_basename'	=> 'index_tabbed',
					),
				),
			),
		'cache_purge' => array('', 'template', 'theme'),
		),
	);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>