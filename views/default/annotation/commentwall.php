<?php
/**
 * Comment wall annotation view
 *
 * @uses $vars['annotation']
 */

$annotation = $vars['annotation'];
$poster = $annotation->getOwnerEntity();
$date = elgg_view_friendly_time($annotation->time_created);

$icon = elgg_view('profile/icon', array(
	'entity' => $poster,
	'size' => 'tiny',
));

$delete_url = "action/commentwall/delete?id=$annotation->id";
$delete_link = elgg_view('output/confirmlink', array(
	'href' => $delete_url,
	'text' => '<span class="elgg-icon elgg-icon-delete"></span>',
	'title' => elgg_echo('delete'),
	'confirm' => elgg_echo('deleteconfirm'),
	'text_encode' => false,
));

$metadata = <<<HTML
<ul class="elgg-list-metadata">
	<li>$delete_link</li>
</ul>
HTML;

$subtext = "$poster->name $date";
$content = elgg_view('output/longtext', array('value' => $annotation->value));

$body = <<<HTML
$metadata
<p class="elgg-subtext">$subtext</p>
$content
HTML;

echo elgg_view_image_block($icon, $body);
