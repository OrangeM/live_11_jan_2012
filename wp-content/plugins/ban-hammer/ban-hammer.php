<?php
/*
Plugin Name: Ban Hammer
Plugin URI: http://code.google.com/p/ipstenu/
Description: This plugin prevent people from registering with any email you list.
Version: 1.4
Author: Mika Epstein
Author URI: http://www.ipstenu.org/

Copyright 2009-10 Mika Epstein (email: ipstenu@ipstenu.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

*/

// Here's the basic plugin
function banhammer($user_login, $user_email, $errors) {
        // Pre-2.6 compatibility
        if(!defined('WP_PLUGIN_URL'))
        {
                if(!defined('WP_CONTENT_URL'))
                { define('WP_CONTENT_URL', get_option('siteurl') . '/wp-content'); }
                define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');
        }
        if(!defined('WP_PLUGIN_DIR'))
        {
                if(!defined('WP_CONTENT_DIR'))
                { define('WP_CONTENT_DIR', ABSPATH . 'wp-content'); }
                define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');
        }

        // First we check the users against StopForumSpam but ONLY if they checked the box
        if (get_option('banhammer_stopforumspam') != '0' )
        {
                //Initialize the Curl session
                $ch = curl_init();
                $StopForumSpam = "http://www.stopforumspam.com/api?email=$user_email";
                //Set curl to return the data instead of printing it to the browser.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //Set the URL
                curl_setopt($ch, CURLOPT_URL, $StopForumSpam);
                //Execute the fetch
                $check = curl_exec($ch);
                //Close the connection
                curl_close($ch);

                $test = "yes";
                if ( strpos( $check, $test) > 0 )
                {
                        $errors->add('invalid_email', __( get_option('banhammer_message') ));
                        return;
                }
        }

        // Get blacklist
        $blacklist_string = get_option('blacklist_keys');
        $blacklist_array = explode("\n", $blacklist_string);
        $blacklist_size = sizeof($blacklist_array);

        // Go through blacklist
        for($i = 0; $i < $blacklist_size; $i++)
        {
                $blacklist_current = trim($blacklist_array[$i]);
                if(stripos($user_email, $blacklist_current) !== false)
                {
                        $errors->add('invalid_email', __( get_option('banhammer_message') ));
                        return;
                }
        }
}


// Create the options for the message and spam assassin and set some defaults.
function banhammer_activate() {
        update_option('banhammer_stopforumspam', '0');
        update_option('banhammer_message', '<strong>ERROR</strong>: Your email has been banned from registration.');
}

// Delete the options if the plugin is being turned off (pet peeve)
function banhammer_deactivate() {
        delete_option('banhammer_stopforumspam');
        delete_option('banhammer_message');
}

// Load the options page
function banhammer_optionsmenu() {
        if (function_exists('add_submenu_page')) {
          add_submenu_page('tools.php', 'Ban Hammer', 'Ban Hammer', '8', 'ban-hammer/ban-hammer_options.php');
        }
}
function banhammer_usersmenu() {
        if (function_exists('add_submenu_page')) {
          add_submenu_page('tools.php', 'Ban Hammer Users', 'Ban Hammer Users', '8', 'ban-hammer/ban-hammer_users.php');
        }
}

// Hooks
add_action('admin_menu', 'banhammer_optionsmenu');
add_action('admin_menu', 'banhammer_usersmenu');
add_action('register_post', 'banhammer', 10, 3);

register_activation_hook( __FILE__, 'banhammer_activate' );
register_deactivation_hook( __FILE__, 'banhammer_deactivate' );
?>