<?php
/**
 * Delete wall comment
 */
		
$annotation_id = (int) get_input('id');

$comment = get_annotation($annotation_id);
if ($comment && $comment->canEdit()) {
	$comment->delete();
	system_message(elgg_echo('profile:commentwall:deleted'));
} else {
	register_error(elgg_echo('profile:commentwall:notdeleted'));
}
		
forward(REFERER);