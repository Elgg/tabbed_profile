<?php
/**
 * Add comment form
 */

echo '<div class="clearfix">';

echo elgg_view('input/plaintext', array('name' => 'message'));

echo elgg_view('input/hidden', array(
	'name' => 'profile_guid',
	'value' => elgg_get_page_owner_guid(),
));

echo elgg_view('input/submit', array('value' => elgg_echo('profile:commentwall:add')));

echo '</div>';
