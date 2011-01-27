<?php
/**
 * Tabbed Profile CSS
 * 
 * @package ElggTabbedProfile
 */
?>
/* ***************************************
	Tabbed Profile
*************************************** */
.profile-tab {
	float: right;
	width: 700px;
	position: relative;
}
.profile-name {
	position: absolute;
	display: block;
	width: 265px;
	float: left;
}
.tabbed-profile .elgg-tabs {
	padding-left: 260px;
	margin-bottom: 25px;
}
/*** ownerblock ***/
#profile-owner-block {
	width: 200px;
	float: left;
	background-color: #eeeeee;
	padding: 15px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block a.elgg-action-button {
	margin-bottom: 4px;
	display: table;
}
.profile-content-menu a {
	display: block;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-content-menu a:hover {
	background: #0054A7;
	color: white;
	text-decoration: none;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-admin-menu-wrapper {
	background-color: white;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
}
.profile-admin-menu-wrapper li a {
	background-color: white;
	color: red;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: black;
}
/*** comment wall ***/
.profile-tab-commentwall textarea {
	height: auto;
}
.profile-tab-commentwall input[type=submit] {
	float: right;
}
/*** profile details ***/
.profile-tab-details .odd, .profile-tab-details .even {
	background-color: #f4f4f4;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	margin: 0 0 7px 0;
	padding: 2px 4px 2px 4px;
}
.profile-aboutme-title {
	background-color: #f4f4f4;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	margin: 0 0 0px 0;
	padding: 2px 4px 2px 4px;
}
.profile-aboutme-contents {
	padding: 2px 0 0 3px;
}
.profile-banned-user {
	border: 2px solid red;
	padding: 4px 8px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
}
