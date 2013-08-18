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
	'INDEX_TABBED_EXPLAIN'		=>	'El MOD para cambiar el aspecto del indice de su foro!',
	'INDEX_TABBED_CONFIG'		=>	'Configuración General',
	'INDEX_TABBED_INDEX'		=>	'Activar Index Tabbed en el indice',
	'INDEX_TABBED_INDEX_EXPLAIN'		=>	'Si Index Tabbed se activa en el indice y usted tiene modificaciones en el index_body, usted las perderá',
	'INDEX_TABBED_FORUM'		=>	'Activar Index Tabbed en el foro',
	'INDEX_TABBED_FORUM_EXPLAIN'		=>	'Habilitar o deshabilitar las solapas viendo un foro',
	'INDEX_TABBED_TOPIC'		=>	'Activar Index Tabbed en el tema',
	'INDEX_TABBED_TOPIC_EXPLAIN'		=>	'Habilitar o deshabilitar las solapas viendo un tema',
	'INDEX_TABBED_VERSION_OLD'		=>	'Versión Actual del MOD:',
	'INDEX_TABBED_VERSION_NEW'		=>	'Versión mas reciente del MOD:',

));

?>