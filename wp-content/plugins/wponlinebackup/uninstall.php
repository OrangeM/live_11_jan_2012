<?php

define ('MY__DIR__', dirname(__FILE__));
define ('MY__FILE__', basename(MY__DIR__) . '/wponlinebackup.php');

if (defined('WP_UNINSTALL_PLUGIN') && strtolower(WP_UNINSTALL_PLUGIN) == strtolower(MY__FILE__)) {

	global $wpdb;

	//Remove everything.
	//TODO:Check for in progress backups and delete the files if at all possible.
	delete_option('wponlinebackup_db_version');
	delete_option('wponlinebackup_settings');
	delete_option('wponlinebackup_status');
	delete_option('wponlinebackup_schedule');
	$wpdb->query('DROP TABLE `' . $wpdb->prefix . 'online_backup`');

}

?>
