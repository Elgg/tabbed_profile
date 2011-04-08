<?php
/**
 * Elgg profile comment wall
 */

if (elgg_is_logged_in()) {
	echo elgg_view_form('commentwall/add');
}

$options = array(
	'guid' => elgg_get_page_owner_guid(),
	'limit' => 20,
	'order_by' => "n_table.time_created desc",
	'annotation_names' => array('commentwall'),
);
$list = elgg_list_annotations($options);
if (!$list) {
	$list = '<p>' . elgg_echo("profile:commentwall:none") . '</p>';
}

echo $list;
