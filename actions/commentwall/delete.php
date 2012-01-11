<?php
/**
 * Delete wall comment
 */
		
$annotation_id = (int)get_input('annotation_id');

$comment = elgg_get_annotation_from_id($annotation_id);
if ($comment && $comment->canEdit()) {
	$comment->delete();
	system_message(elgg_echo('profile:commentwall:deleted'));
} else {
	register_error(elgg_echo('profile:commentwall:notdeleted'));
}
		
forward(REFERER);