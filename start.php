<?php
/**
 * Elgg tabbed profile plugin
 *
 * @package ElggTabbedProfile
 */

elgg_register_event_handler('init', 'system', 'tabbed_profile_init');

/**
 * Profile init function
 */
function tabbed_profile_init() {

	// Register a URL handler for users - this means that profile_url()
	// will dictate the URL for all ElggUser objects
	register_entity_url_handler('tabbed_profile_url', 'user', 'all');

	// Metadata on users needs to be independent
	register_metadata_as_independent('user');

	elgg_view_register_simplecache('icon/user/default/tiny');
	elgg_view_register_simplecache('icon/user/default/topbar');
	elgg_view_register_simplecache('icon/user/default/small');
	elgg_view_register_simplecache('icon/user/default/medium');
	elgg_view_register_simplecache('icon/user/default/large');
	elgg_view_register_simplecache('icon/user/default/master');

	// Register a page handler, so we can have nice URLs
	register_page_handler('profile', 'tabbed_profile_page_handler');

	elgg_extend_view('html_head/extend', 'profile/metatags');
	elgg_extend_view('css/screen', 'profile/css');

	// Register actions
	$action_base = elgg_get_plugins_path() . 'tabbed_profile/actions/commentwall';
	elgg_register_action("commentwall/add", "$action_base/add.php");
	elgg_register_action("commentwall/delete", "$action_base/delete.php");

	// allow ECML in parts of the profile
	elgg_register_plugin_hook_handler('get_views', 'ecml', 'tabbed_profile_ecml_views_hook');
}

/**
 * Profile page handler
 *
 * @param array $page Array of page elements, forwarded by the page handling mechanism
 */
function tabbed_profile_page_handler($page) {
	global $CONFIG;

	if (isset($page[0])) {
		$username = $page[0];
		$user = get_user_by_username($username);
		elgg_set_page_owner_guid($user->guid);
	}

	// short circuit if invalid or banned username
	if (!$user || ($user->isBanned() && !isadminloggedin())) {
		register_error(elgg_echo('profile:notfound'));
		forward();
	}

	$action = NULL;
	if (isset($page[1])) {
		$action = $page[1];
	}

	switch ($action) {
		case 'edit':
			// use for the core profile edit page
			require $CONFIG->path . 'pages/profile/edit.php';
			return;
			break;

		default:
			if (isset($page[1])) {
				$section = $page[1];
			} else {
				$section = 'activity';
			}
			$content = tabbed_profile_layout_page($user, $section);
			$body = elgg_view_layout('one_column', array(
				'content' => $content,
				'class' => 'tabbed-profile',
			));
			break;
	}

	echo elgg_view_page($title, $body);
}

/**
 * Layout the tabbed profile
 *
 * @param ElggUser $user      The user
 * @param string   $selection Selected tab
 *
 * @return string
 */
function tabbed_profile_layout_page($user, $selection = 'activity') {

	// allow other plugins to add tabs
	$tabs = array('activity', 'details', 'friends', 'groups', 'commentwall');
	$tabs = elgg_trigger_plugin_hook('tabs', 'profile', array('user' => $user), $tabs);

	return elgg_view('profile/layout', array(
		'entity' => $user,
		'selection' => $selection,
		'tabs' => $tabs,
	));
}

/**
 * Profile URL generator for $user->getUrl();
 *
 * @param ElggUser $user
 * @return string User URL
 */
function tabbed_profile_url($user) {
	return elgg_get_site_url() . "pg/profile/" . $user->username;
}

/**
 * Register for ECML
 *
 * @param string $hook
 * @param string $entity_type
 * @param array  $return_value
 * @param unknown_type $params
 */
function tabbed_profile_ecml_views_hook($hook, $entity_type, $return_value, $params) {
	$return_value['profile/profile_content'] = elgg_echo('profile');

	return $return_value;
}
