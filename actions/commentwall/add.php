<?php
/**
 * Add comment to wall
 */

// Get input
$message = get_input('message');
$profile_guid = get_input('profile_guid');

$user = get_entity($profile_guid);
if ($user && !empty($message)) {

	// If posting the comment was successful, say so
	if ($user->annotate('commentwall', $message, ACCESS_PUBLIC, elgg_get_logged_in_user_guid())) {

			if ($profile_guid != elgg_get_logged_in_user_guid()) {
				notify_user(
					$profile_guid,
					elgg_get_logged_in_user_guid(),
					elgg_echo('profile:comment:subject'),
					elgg_echo('profile:comment:body', array(
						elgg_get_logged_in_user_entity()->name,
						$message,
						$user->getURL(),
						elgg_get_logged_in_user_entity()->name,
						elgg_get_logged_in_user_entity()->getURL()
					))
				);
			}

			system_message(elgg_echo("profile:commentwall:posted"));

			add_to_river(
					'river/object/profile/commentwall/create',
					'commentwall',
					elgg_get_logged_in_user_guid(),
					$profile_guid);
	} else {
		register_error(elgg_echo("profile:commentwall:failure"));
	}
} else {
	register_error(elgg_echo("profile:commentwall:blank"));
}

forward(REFERER);