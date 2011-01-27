<?php
/**
 * Elgg profile comment wall
 */

if (isloggedin()) {
	echo elgg_view_form('commentwall/add');
}

$list = list_annotations(elgg_get_page_owner_guid(), 'commentwall', 20, false);
if (!$list) {
	$list = '<p>' . elgg_echo("profile:commentwall:none") . '</p>';
}

echo $list;
