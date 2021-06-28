<?php
/**
 * english language file for elasticsearch plugin
 *
 * @author Kieback&Peter IT <it-support@kieback-peter.de>
 */

$lang['servers']      = 'ElasticSearch servers: one per line, add port number after a colon, give optional proxy after a comma';
$lang['indexname']    = 'Index name to use, must exist or can be created with the cli.php tool.';
$lang['documenttype'] = 'Document type to use when indexing';
$lang['snippets']     = 'Text to show in search result snippets';
$lang['searchSyntax'] = 'Search in wiki syntax in addition to page content';
$lang['perpage']      = 'How many hits to show per page';
$lang['detectTranslation'] = 'Translation plugin support: search in current language namespace by default';
$lang['debug']        = 'Log messages to data/cache/debug.log - needs allowdebug enabled';
$lang['disableQuicksearch'] = 'Disable quick search (page id suggestions)';
$lang['fuzzySearch'] = 'Enable fuzzy search';
$lang['fuzzySearchDistance'] = 'Edit distance for fuzzy search (numberOfCharactersInWord / THIS_VALUE where numberOfCharactersInWord >= 3)';
