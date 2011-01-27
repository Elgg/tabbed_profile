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
foreach ($vars['tabs'] as $tab) {
	$tabs[] = array(
		'title' => elgg_echo("profile:$tab"),
		'url' => "$url/$tab",
		'selected' => $tab == $vars['selection'],
	);
}

echo elgg_view('navigation/tabs', array('tabs' => $tabs));
