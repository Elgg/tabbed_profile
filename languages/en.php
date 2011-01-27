<?php
/**
 * Elgg profile plugin language pack
 */

$english = array(

/**
 * Profile
 */

	'profile' => "Profile",
	'profile:yours' => "My profile",
	'profile:user' => "%s's profile",

	'profile:activity' => 'Activity',
	'profile:details' => 'Details',
	'profile:friends' => 'Friends',
	'profile:groups' => 'Groups',
	'profile:commentwall' => "Comment Wall",

	'profile:aboutme' => "About me",
	'profile:description' => "About me",
	'profile:briefdescription' => "Brief description",
	'profile:location' => "Location",
	'profile:skills' => "Skills",
	'profile:interests' => "Interests",
	'profile:contactemail' => "Contact email",
	'profile:phone' => "Telephone",
	'profile:mobile' => "Mobile phone",
	'profile:website' => "Website",

	'profile:banned' => 'This user account has been suspended.',
	'profile:deleteduser' => 'Deleted user',

	'profile:label' => "Profile label",
	'profile:type' => "Profile type",

/**
 * Profile comment wall
 */
	'profile:commentwall:add' => "Add to the wall",
	'profile:commentwall:posted' => "You successfully posted on the comment wall.",
	'profile:commentwall:deleted' => "You successfully deleted the message.",
	'profile:commentwall:blank' => "Sorry; you need to actually put something in the message area before we can save it.",
	'profile:commentwall:notfound' => "Sorry; we could not find the specified item.",
	'profile:commentwall:notdeleted' => "Sorry; we could not delete this message.",
	'profile:commentwall:none' => "No comment wall posts found.",
	'profile:commentwall:somethingwentwrong' => "Something went wrong when trying to save your message, make sure you actually wrote a message.",
	'profile:commentwall:failure' => "An unexpected error occurred when adding your message. Please try again.",

/**
 * Email messages commentwall
 */

	'profile:comment:subject' => 'You have a new message on your comment wall!',
	'profile:comment:body' => "You have a new message on your comment wall from %s. It reads:


%s


To view your message board comments, click here:

	%s

To view %s's profile, click here:

	%s

You cannot reply to this email.",

/**
 * Profile error messages
 */

	'profile:no_friends' => 'This person hasn\'t added any friends yet!',
	'profile:no_groups' => 'This user has not joined any groups yet.',
	'profile:noaccess' => "You do not have permission to edit this profile.",
	'profile:notfound' => "Sorry, we could not find the specified profile.",
	'profile:icon:notfound' => "Sorry, there was a problem uploading your profile picture.",
	'profile:icon:noaccess' => 'You cannot change this profile icon',
	'profile:field_too_long' => 'Cannot save your profile information because the "%s" section is too long.',

);

add_translation('en', $english);