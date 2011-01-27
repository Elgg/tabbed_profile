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
	if ($user->annotate('commentwall', $message, ACCESS_PUBLIC, get_loggedin_userid())) {

			if ($profile_guid != get_loggedin_userid()) {
				notify_user(
					$profile_guid,
					get_loggedin_userid(),
					elgg_echo('profile:comment:subject'),
					elgg_echo('profile:comment:body', array(
						get_loggedin_user()->name,
						$message,
						$user->getURL(),
						get_loggedin_user()->name,
						get_loggedin_user()->getURL()
					))
				);
			}

			system_message(elgg_echo("profile:commentwall:posted"));

			add_to_river(
					'river/object/profile/commentwall/create',
					'commentwall',
					get_loggedin_userid(),
					$profile_guid);
	} else {
		register_error(elgg_echo("profile:commentwall:failure"));
	}
} else {
	register_error(elgg_echo("profile:commentwall:blank"));
}

forward(REFERER);