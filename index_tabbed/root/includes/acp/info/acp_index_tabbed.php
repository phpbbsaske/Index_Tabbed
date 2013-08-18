<?php
class acp_index_tabbed_info
{
    function module()
    {
        return array(
            'filename'    => 'acp_index_tabbed',
            'title'        => 'INDEX_TABBED_TITLE',
            'version'    => '3.0.1',
            'modes'        => array(
                'index'        => array('title' => 'ACP_INDEX_TABBED_TITLE', 'auth' => 'acl_a_board', 'cat' => array('')),
            ),
        );
    }

    function install()
    {
    }

    function uninstall()
    {
    }
}
?>