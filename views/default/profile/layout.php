<?php
/**
 * Layout for profile content
 *
 * @uses $vars['user']
 * @uses $vars['selection']
 * @uses $vars['tabs']
 */

$selection = $vars['selection'];

echo elgg_view('profile/header', $vars);

echo "<div class=\"profile-tab profile-tab-$selection\">";
echo elgg_view("profile/tabs/$selection", $vars);
echo '</div>';

echo elgg_view('profile/owner_block', $vars);
