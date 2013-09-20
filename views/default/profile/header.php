<?php

/**
 * Profile header
 *
 * @uses $vars['user']
 * @uses $vars['selection']
 * @uses $vars['tabs']
 */
$user = $vars['entity'];


echo "<h2 class=\"profile-name\">$user->name</h2>";

$url = $user->getURL();
$tabs = array();
$priority = 100;
foreach ($vars['tabs'] as $tab) {
	elgg_register_menu_item('profile_tabs', array(
		'name' => $tab,
		'text' => elgg_echo("profile:$tab"),
		'url' => "$url/$tab",
		'selected' => $tab == $vars['selection'],
		'priority' => $priority
	));
	$priority += 100;
}

echo elgg_view_menu('profile_tabs', array(
	'order_by' => 'priority',
	'class' => 'elgg-menu-hz elgg-menu-filter'
));
