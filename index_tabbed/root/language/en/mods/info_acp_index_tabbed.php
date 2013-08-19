<?php
/**
*
* Share On [Español]
*
* @package language
* @version $Id: info_acp_shareon.php
* @copyright (c) Saske ( http://www.phpbbsaske.es )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_INDEX_TABBED_TITLE'	=>	'Index Tabbed',
	'INDEX_TABBED_TITLE'		=>	'Index Tabbed',
	'INDEX_TABBED_EXPLAIN'		=>	'The MOD to change the aspects of your forum index!',
	'INDEX_TABBED_CONFIG'		=>	'Settings',
	'INDEX_TABBED_INDEX'		=>	'Enable Index Tabbed in the index',
	'INDEX_TABBED_INDEX_EXPLAIN'		=>	'If Index Tabbed index is activated and you have index_body modifications, you will lose them',
	'INDEX_TABBED_FORUM'		=>	'Enable Index Tabbed in the forum',
	'INDEX_TABBED_FORUM_EXPLAIN'		=>	'Enable or disable browsing a forum tabs',
	'INDEX_TABBED_TOPIC'		=>	'Enable Index Tabbed in the forum',
	'INDEX_TABBED_TOPIC_EXPLAIN'		=>	'Enable or disable browsing a topic tabs',
	'INDEX_TABBED_VERSION_OLD'		=>	'Current Version:',
	'INDEX_TABBED_VERSION_NEW'		=>	'Last Version:',

));

?>